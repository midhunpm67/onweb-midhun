@switch($page_name)

    @case('indexView')

    <link rel="stylesheet" href="{{asset("user/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("user/css/responsive.css")}}">

    @break

    @case('blogView')

    <link rel="stylesheet" href="{{asset("user/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("user/css/responsive.css")}}">

    @break


    @case('blogDetailsView')

    <link rel="stylesheet" href="{{asset("user/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("user/css/responsive.css")}}">

    @break

    @case('registerView')

    <link rel="stylesheet" href="{{asset("user/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("user/css/responsive.css")}}">

    @break


    @case('userregistrationView')

    <link rel="stylesheet" href="{{asset("user/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("user/css/responsive.css")}}">

    @break


    @case('index2View')

    <link rel="stylesheet" href="{{asset("user/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("user/css/responsive.css")}}">

    @break

@endswitch
