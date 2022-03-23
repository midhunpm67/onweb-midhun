jQuery(function ($) {
    ("use strict");

    var settings = {
        validator: {
            login_form: {
                url: "/forms/login",
                defaultButton: "SIGN IN",
                onClickButton: "SIGNING IN...",
                successFunction: "common_reload",
            },
            templateRegForm: {
                defaultButton: "SUBMIT",
                onClickButton: "SUBMITING...",
                successFunction: "common_reload",
            },

            templatePageForm: {
                defaultButton: "SUBMIT",
                onClickButton: "SUBMITING...",
                successFunction: "common_redirect",
            },
            websiteRegForm: {
                defaultButton: "SUBMIT",
                onClickButton: "SUBMITING...",
                successFunction: "common_redirect",
            },
            categoryRegForm: {
                defaultButton: "SUBMIT",
                onClickButton: "SUBMITING...",
                successFunction: "common_reload",
            },

            subcategoryRegForm: {
                defaultButton: "SUBMIT",
                onClickButton: "SUBMITING...",
                successFunction: "common_reload",
            },
            profile_form: {
                url: "/forms/complete_profile",
                defaultButton: "COMPLETE",
                onClickButton: "COMPLETING...",
                successFunction: "common_redirect",
            },
            add_credit_form: {
                url: "/forms/add_credit",
                defaultButton: "ADD CREDIT",
                onClickButton: "ADDING CREDIT...",
                successFunction: "common_redirect",
            },
            add_client_form: {
                defaultButton: "ADD CLIENT",
                onClickButton: "ADDING CLIENT...",
                successFunction: "common_redirect",
            },
            pay_credit_form: {
                defaultButton: "REPAY CREDIT",
                onClickButton: "REPAYING CREDIT...",
                successFunction: "common_redirect",
            },
            user_acc_form: {
                url: "/forms/add-acc",
                defaultButton: "ADD ACCOUNT",
                onClickButton: "ADDING ACCOUNT...",
                successFunction: "common_redirect",
            },
            transfer_payouts: {
                url: "/forms/transfer-payouts",
                defaultButton: "TRANSFER AMOUNT",
                onClickButton: "TRANSFERING AMOUNT...",
                successFunction: "common_reload",
            },
            client_enroll_form: {
                url: "/forms/client-enroll",
                defaultButton: "REGISTER",
                onClickButton: "REGISTERING...",
                successFunction: "common_redirect",
            },
            password_reset_form: {
                defaultButton: "RESET",
                onClickButton: "PROCESSING...",
                successFunction: "common_redirect",
            },
        },
        pageid: $(".page").data("page"),
        native_api: typeof Website2APK === "function" ? 1 : 0,
        inactive_timeout: 600, // In secs.. 10 mins.
    };

    var cyberfort = {};

    $.ajaxSetup({
        type: "POST",
        contentType: "application/x-www-form-urlencoded",
        headers: {
            "X-CSRF-Token": $("meta[name=csrf-token]").attr("content"),
        },
    });

    jQuery.validator.setDefaults({
        debug: false,
        ignore: ":hidden",
        onkeyup: false,
        errorPlacement: function (error, element) {
            if (element.is(":radio") || element.is(":checkbox")) {
                error.insertBefore(element.next());
            } else {
                error.insertAfter(element);
            }

            if (element.is("select:hidden")) {
                error.insertAfter(element.next(".nice-select"));
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {
            // alert('valid form submitted'); // for demo
            // return false; // for demo
            var $this = $(form),
                form_id = form.id,
                validator = settings.validator[form_id],
                url = validator.url ?? $this.attr("action"),
                defaultButton = validator.defaultButton,
                onClickButton = validator.onClickButton,
                successFunction = validator.successFunction,
                submitType = $this.attr("method") ?? "",
                // failureFunction = validator.failureFunction,
                errorMsg = "";

            $this
                .find("button[type='submit']")
                .html(onClickButton)
                .attr("disabled", true);

            var formData = $this.serialize();

            $.ajax({
                url: url,
                data: formData,
                method: submitType,
                success: function (response) {
                    response = JSON.parse(response);
                    cyberfort[successFunction](response, form);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    var responseText = jQuery.parseJSON(jqXHR.responseText);

                    if (responseText.message == "CSRF token mismatch.") {
                        alert("Session Timed Out! Reloading..");

                        location.reload();
                        return false;
                    }

                    alert(errorThrown);
                    // alert("Network Error");

                    // console.log(jqXHR.responseText);
                    // console.log(jqXHR.statusText);

                    console.log(textStatus);
                    console.log(errorThrown);

                    $this
                        .find("button[type='submit']")
                        .html("Try Again!")
                        .attr("disabled", false);
                },
            });
        },
    });

    $.validator.addMethod(
        "mobile_num",
        function (value, element) {
            var re = new RegExp(
                "^(?:(?:\\()(?:\\+|0{0,2})91(?:\\))(\\s*[\\ -]\\s*)?|[0]?)?[6789]\\d|( )|(-){9}|(\\d[ -]?){10}\\d$"
            );
            return this.optional(element) || re.test(value);
        },
        "Invalid Mobile!"
    ); // mobile_num

    $.validator.addMethod(
        "is_aadhaar",
        function (value, element) {
            var re = new RegExp("^[2-9]{1}[0-9]{3}\\s*[0-9]{4}\\s*[0-9]{4}$");
            return this.optional(element) || re.test(value);
        },
        "Invalid Aadhaar Number!"
    ); // is_aadhaar

    $.validator.addMethod(
        "indian_pin",
        function (value, element) {
            var re = new RegExp("^[1-9][0-9]{2}\\s*[0-9]{3}$");
            return this.optional(element) || re.test(value);
        },
        "Invalid Pin Code!"
    ); // indian_pin

    $.validator.addMethod(
        "minDateToday",
        function (value, element) {
            var curDate = new Date();
            var inputDate = value.split("-").reverse().join("-");
            inputDate = new Date(value);

            if (inputDate < curDate) return false;

            return true;
        },
        "Date cannot be in the past!"
    ); // maxDateToday

    $.validator.addMethod(
        "maxDateToday",
        function (value, element) {
            var curDate = new Date();
            var inputDate = value.split("-").reverse().join("-");
            inputDate = new Date(value);

            if (inputDate > curDate) return false;

            return true;
        },
        "Date cannot be in the future!"
    ); // maxDateToday

    $.validator.addMethod(
        "max5DaysPast",
        function (value, element) {
            var curDate = new Date();
            var maxDate = curDate.setDate(curDate.getDate() - 6);
            var inputDate = value.split("-").reverse().join("-");
            inputDate = new Date(value);

            if (inputDate < maxDate) return false;

            return true;
        },
        "Date should be max 5 Days old!"
    ); // max5DaysPast

    $.validator.addMethod(
        "dateRange_5_5",
        function (value, element) {
            var curDate = new Date();
            var minDate = curDate.setDate(curDate.getDate() - 6);
            var maxDate = curDate.setDate(curDate.getDate() + 6);
            var inputDate = new Date(value);

            if (inputDate < minDate || inputDate > maxDate) return false;

            return true;
        },
        "Invalid Date!"
    );

    $.validator.addMethod(
        "no_space",
        function (value, element) {
            return value.indexOf(" ") < 0 && value != "";
        },
        "No space allowed!"
    ); // error message

    $("#templateRegForm").validate({
        rules: {
            template_name: {
                required: true,
                minlength: 3,
                maxlength: 30,
            },
            slug_url: {
                required: true,
                minlength: 3,
                maxlength: 50,
            },
            template_layout: {
                required: true,

            },

        },
    });
     $("#templatePageForm").validate({
        rules: {
            page_name: {
                required: true,
                minlength: 3,
                maxlength: 30,
            },
            slug_url: {
                required: true,
                minlength: 3,
                maxlength: 50,
            },
            page_layout: {
                required: true,

            },

        },
    });


    $("#websiteRegForm").validate({
        rules: {
            website_name: {
                required: true,
                minlength: 3,
                maxlength: 30,
            },
            slug_url: {
                required: true,
                minlength: 3,
                maxlength: 50,
            },
            web_content: {
                required: true,

            },

        },
    });
    $("#categoryRegForm").validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
                maxlength: 30,
            },


        },
    });
    $("#subcategoryRegForm").validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
                maxlength: 30,
            },


        },
    });
    $("#profile_form").validate({
        rules: {

            template_name: {
                required: true,
            },
            slug_url: {
                required: true,
            },
            template_layout: {
                required: true,
            },

        },
    });

    $("#login_form").validate({
        rules: {
            user_info: {
                required: true,
            },
            password: {
                required: true,
            },
        },
    });

    $("#add_client_form").validate({
        rules: {
            aadhaar: {
                required: true,
                is_aadhaar: true,
                remote: {
                    url: "/search/aadhaar",
                    type: "post",
                    complete: function (data) {
                        data = data.responseJSON;

                        if (data === true) {
                            $("#add-reg-user")
                                .attr("data-client-id", "")
                                .attr("disabled", true);
                            $(".user_info .client-name").html("");
                            $(".user_info .email").html("");
                            $(".user_info .mobile").html("");
                            $(".user_info .aadhaar").html("");

                            $("#add_client_form").addClass("open");
                            return false;
                        } else if (data.message === "Client already added!") {
                            alert("Client already added!");
                            return false;
                        }

                        switch (true) {
                            case data.overdue_for > 0:
                                $(".user_info")
                                    .removeClass("info warning danger success")
                                    .addClass("info");
                                break;

                            case data.overdue_for > 14:
                                $(".user_info")
                                    .removeClass("info warning danger success")
                                    .addClass("warning");
                                break;

                            case data.overdue_for > 30:
                                $(".user_info")
                                    .removeClass("info warning danger success")
                                    .addClass("danger");
                                break;

                            default:
                                $(".user_info")
                                    .removeClass("info warning danger success")
                                    .addClass("success");
                                break;
                        }

                        var client_id = data.client_id;

                        $("#add-reg-user")
                            .attr("data-client-id", client_id)
                            .attr("disabled", false);
                        $(".user_info .client-name").html(data.client_name);
                        $(".user_info .email").html(data.email);
                        $(".user_info .mobile").html(data.mobile);
                        $(".user_info .aadhaar").html(data.aadhaar);

                        $("#add_client_form").removeClass("open");
                        $(".reg-user").addClass("open");
                    },
                },
            },
            first_name: {
                required: true,
                minlength: 3,
                maxlength: 20,
            },
            last_name: {
                maxlength: 30,
            },
            mobile: {
                required: true,
                mobile_num: true,
                minlength: 10,
                maxlength: 15,
                remote: {
                    url: "/validate/uniqueMobile",
                    type: "post",
                },
            },
            email: {
                minlength: 4,
                email: true,
                remote: {
                    url: "/validate/uniqueEmail",
                    type: "post",
                },
            },
            gender: {
                required: true,
            },
            is_company: {
                required: false,
            },
            company_type: {
                required: function (element) {
                    return $("#is_company").val() == 1;
                },
            },
            company_name: {
                required: function (element) {
                    return $("#is_company").val() == 1;
                },
            },
            company_mobile: {
                required: function (element) {
                    return $("#is_company").val() == 1;
                },
            },
            otp_code: {
                required: true,
                remote: {
                    url: "/validate/otp",
                    type: "post",
                    data: {
                        otp: "client",
                    },
                },
            },
        },
    });

    $("#add_credit_form").validate({
        rules: {
            given_to: {
                required: true,
            },
            amount: {
                required: true,
            },
            given_on: {
                required: true,
                maxDateToday: true,
                max5DaysPast: true,
            },
            deadline: {
                required: true,
                minDateToday: true,
            },
            comments: {
                maxlength: 100,
            },
        },
    });

    $("#pay_credit_form").validate({
        rules: {
            amount: {
                required: true,
            },
            paid_on: {
                required: true,
                maxDateToday: true,
                max5DaysPast: true,
            },
            pay_mode_ref: {
                required: false,
                minlength: 3,
                maxlength: 50,
            },
            comments: {
                maxlength: 100,
            },
        },
    });

    $("#user_acc_form").validate({
        rules: {
            acc_id: {
                required: true,
            },
        },
    });

    // 9562346314
    // 5CACW6

    $("#transfer_payouts").validate({
        rules: {
            user_code: {
                required: true,
                minlength: 6,
                maxlength: 6,
                remote: {
                    url: "/validate/userCode",
                    type: "post",
                },
            },
        },
    });

    $("#client_enroll_form").validate({
        rules: {
            aadhaar: {
                required: true,
                is_aadhaar: true,
                remote: {
                    url: "/search/client-aadhaar",
                    type: "post",
                    complete: function (data) {
                        data = data.responseJSON;

                        if (data.status == 0) {
                            $("#client_enroll_form").removeClass("open");
                            alert(data.message);
                            return false;
                        }

                        $("#client_enroll_form").validate().element("#aadhaar");

                        var client_id = data.client_id;

                        $("#add-reg-user")
                            .attr("data-client-id", client_id)
                            .attr("disabled", false);
                        $(".client_content .client_text .name").append(
                            data.client_name
                        );
                        $(".client_content .client_text .mobile").append(
                            data.mobile
                        );
                        $("#client_id").val(data.client_id);

                        $("#client_enroll_form").addClass("open");
                    },
                },
            },
            mobile: {
                required: true,
                mobile_num: true,
                minlength: 10,
                maxlength: 15,
            },
            client_id: {
                required: true,
                minlength: 6,
                maxlength: 6,
                remote: {
                    url: "/validate/referralExists",
                    type: "post",
                },
            },
            otp_code: {
                required: true,
                minlength: 7,
                maxlength: 7,
                remote: {
                    url: "/validate/otp",
                    type: "post",
                    data: {
                        otp: "client",
                    },
                },
            },
            password: {
                required: true,
                minlength: 6,
            },
            password_1: {
                required: true,
                minlength: 6,
                equalTo: "#password",
            },
        },
    });

    $("#password_reset_form").validate({
        rules: {
            mobile: {
                required: true,
                mobile_num: true,
                minlength: 10,
                maxlength: 15,
            },
            otp_code: {
                required: true,
                minlength: 7,
                maxlength: 7,
                remote: {
                    url: "/validate/otp",
                    type: "post",
                    data: {
                        otp: "client",
                    },
                },
            },
            password: {
                required: true,
                minlength: 6,
            },
            password_1: {
                required: true,
                minlength: 6,
                equalTo: "#password",
            },
        },
    });

    /*------------------------------------------------------------------
	Validate Functions
	-------------------------------------------------------------------*/

    cyberfort.common_reload = (response, form) => {
        var $this = $(form),
            form_id = form.id,
            validator = settings.validator[form_id],
            defaultButton = validator.defaultButton;

        var status = response.status;
        var message = response.message;
        var reload = response.reload ?? 0;

        if (status == 1) {
            location.reload();
        } else {
            $this.trigger("reset");
            $this
                .find("button[type='submit']")
                .html(defaultButton)
                .attr("disabled", false);

            alert(message);

            if (reload == 1) location.reload();
        }
    };

    cyberfort.common_redirect = (response, form) => {
        var $this = $(form),
            form_id = form.id,
            validator = settings.validator[form_id],
            defaultButton = validator.defaultButton;

        var status = response.status;
        var message = response.message;
        var reload = response.reload ?? 0;

        if (status == 1) {
            window.location.replace(response.redirect);
        } else {
            $this.trigger("reset");
            $this
                .find("button[type='submit']")
                .html(defaultButton)
                .attr("disabled", false);

            alert(message);

            if (reload == 1) location.reload();
        }
    };

    /*------------------------------------------------------------------
	jQuery document ready
	-------------------------------------------------------------------*/
    $(document).ready(function () {

        /*----------- Page Registration --------- */
        if (settings.pageid == "dashboard_no_reg") {
            fetch_reg_info();
        }

        /*-------------- Page Contact ----------- */
        if (settings.pageid == "contact") {
            $("#ContactForm").validate({
                submitHandler: function (form) {
                    ajaxContact(form);
                    return false;
                },
            });
        }

        /*-------------- Page Contact ----------- */
        if (settings.pageid == "add_client") {
            $("#mobile").on("focousout", function () {
                var mob = $(this).val();

                $("#send_otp").data("mob", mob);
            });
        }
    });

    // $("#mobile, #company_mobile, #user_info").inputmask({
    //     mask: "+\\91 9999999999",
    //     placeholder: "+91 __________",
    // });

    // $("#email").inputmask({ mask: "email", placeholder: "name@abc.com" });

    // $("#referred_by, #referral_code, #user_code, #ec_id").inputmask({
    //     mask: "[A|9]{6}",
    //     placeholder: "xxxxxx",
    // });

    // $("#aadhaar, .aadhaar").inputmask({
    //     mask: "9999 9999 9999",
    //     placeholder: "xxxx xxxx xxxx",
    // });

    // $("#otp_code, #pin_code").inputmask({
    //     mask: "999 999",
    //     placeholder: "xxx xxx",
    // });

    //**********************FIRST END******************************//

    function nl2br(str, is_xhtml) {
        var breakTag =
            is_xhtml || typeof is_xhtml === "undefined" ? "<br />" : "<br>";
        return (str + "").replace(
            /([^>\r\n]?)(\r\n|\n\r|\r|\n)/g,
            "$1" + breakTag + "$2"
        );
    }

    function nl2nl(str) {
        return (str + "").replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, "$1\n$2");
    }

    $("body").on("click", ".referral_url", function () {
        var user_code = $(this).val();
        copy_to_clipboard(user_code);
        $(this).select();

        alert("User Code Copied!");
    });

    $("body").on("click", ".referral_url_copy", function () {
        var user_code = $(".user_code").val();
        copy_to_clipboard(user_code);

        alert("User Code Copied!");
    });

    $("body").on("click", ".user_code", function () {
        var user_code = $(".user_code").html();
        copy_to_clipboard(user_code);

        alert("User Code Copied!");
    });

    $("body").on("click", ".invite_user", function () {
        var user_code = $(".user_code").html();
        var full_name = $(".full_name").html();

        var invite_msg =
            `Hi,\r\nYou're being invited to the Easy Credits Team by ` +
            full_name +
            `. You're just 2 steps manages away from managing your finances like a pro, and earning money while doing it.\r\n\r\n1. Install the application from playstore:\r\nhttps://play.google.com/store/apps/details?id=com.cyberforttech.easycredits\r\n\r\n2. a) Open this invite link below:\r\nhttps://easycredits.in/register/` +
            user_code +
            `\r\n\r\n*OR*\r\n\r\n2. b) Enter this Referral Code while registering:\r\n*_` +
            user_code +
            `_*\r\n\r\nSincerely,\nEasy Credits Team.`;

        copy_to_clipboard(invite_msg);

        alert("Invite Text Copied!");
    });

    // $("#mobile").bind("paste", function(e){
    // 	// access the clipboard using the api
    // 	var pastedData = handlePaste(e);
    // } );

    function copy_to_clipboard(text) {
        var emptyArea = document.createElement("TEXTAREA");
        emptyArea.innerHTML = text;
        document.body.appendChild(emptyArea);

        emptyArea.select();
        document.execCommand("copy");

        document.body.removeChild(emptyArea);
    }

    var inactive_log = function (max_inactive_secs = 300) {
        var time,
            interval,
            max_inactive = max_inactive_secs * 1000; // 1000 milliseconds = 1 second

        function logout() {
            window.location.replace("/logout");
        }

        function resetTimer() {
            clearTimeout(time);
            clearInterval(interval);

            var tick = 1000,
                curPercentVal = 100,
                offset = curPercentVal / max_inactive_secs;

            time = setTimeout(logout, max_inactive);

            interval = setInterval(() => {
                curPercentVal = curPercentVal - offset;
                document.querySelector("#countdown").style.width =
                    curPercentVal + "%";
            }, tick);
        }

        var events = [
            "load",
            "mousedown",
            "mousemove",
            "keypress",
            "scroll",
            "touchstart",
        ];

        events.forEach(function (name) {
            document.addEventListener(name, resetTimer, true);
        });
    };

    if ($("#countdown").length) {
        inactive_log(settings.inactive_timeout);
    }

    function handlePaste(e) {
        var clipboardData, pastedData;

        // Stop data actually being pasted into div
        e.stopPropagation();
        e.preventDefault();

        // Get pasted data via clipboard API
        clipboardData =
            e.originalEvent.clipboardData || window.originalEvent.clipboardData;
        pastedData = clipboardData.getData("Text");

        // Do whatever with pasteddata
        return pastedData;
    }

    function notify(icon, title, message, type = "success", timeout_sec = "") {
        if (icon == "check") {
            icon == "fi fi-check";
        } else if (icon == "cross") {
            icon == "fi-cross";
        }

        if (timeout_sec == "") {
            timeout_sec = "10000";
        } else {
            timeout_sec = timeout_sec * 1000;
        }

        $.notify(
            {
                icon: icon,
                title: title,
                message: message,
            },
            {
                element: "body",
                position: null,
                type: type,
                allow_dismiss: true,
                newest_on_top: true,
                showProgressbar: true,
                placement: {
                    from: "top",
                    align: "right",
                },
                offset: 20,
                spacing: 10,
                z_index: 99999999,
                delay: timeout_sec,
                animate: {
                    enter: "animated fadeInDown",
                    exit: "animated fadeOutUp",
                },
                icon_type: "class",
                template:
                    '<div data-notify="container" class="notify-alert col-11 col-sm-3 alert alert-{0}" role="alert">' +
                    '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                    '<span class="notify-icon" data-notify="icon"></span> ' +
                    '<span class="notify-title" data-notify="title">{1}</span> ' +
                    '<span class="notify-message" data-notify="message">{2}</span>' +
                    '<div class="notify-progressbar progress" data-notify="progressbar">' +
                    '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                    "</div>" +
                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                    "</div>",
            }
        );
    }
});
