<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/user/demo/{template_name}',[userController::class,"userDemoView"])->name("demoView");
Route::get("/template/{template_name}/{page_name?}", [userController::class, "view_template"])->name("previewTemplateView");

Route::get('/', function () { return view('user.index'); })->name("indexView");
Route::get('/blog', function () { return view('blog'); })->name("blogView");
Route::get('/blog-details', function () { return view('blog-details'); })->name("blogDetailsView");
// Route::get('/register', function () { return view('userReg'); })->name("registerView");
Route::get('/user-registration', function () { return view('userregistrationView'); })->name("userregistrationView");
Route::get('/index2', function () { return view('index-2'); })->name("index2View");



// Route::get("/", [userController::class, "indexView"])->name("indexView");
// Route::get("/user-reg", [userController::class, "userRegistration"])->name("userRegistration");

Route::get("/register", [userController::class, "userReg"])->name("registerView");

Route::get("/website-delete", [userController::class, "deleteWebsite"])->name("website-delete");
Route::get("/category-delete", [userController::class, "deleteCategory"])->name("category-delete");


Route::post("/user-data", [loginController::class, "registration"])->name("new_user");
// Route::get("/website-list", [adminController::class, "loginView"])->name("website");

//Route::get('insert','StudInsertController@insertform');

Route::post("/login-check", [adminController::class, "loginCheck"])->name("login_check");
Route::get("/category-edit", [userController::class, "categoryEdit"])->name("category-edit");

Route::get("/login", [adminController::class, "loginView"])->name("login");

Route::post("/create/template-data", [adminController::class, "createTemplate"])->name("createTemplate");
Route::post("/create/page-data", [adminController::class, "createPage"])->name("createPage");
Route::post("/create/templatepage-data", [adminController::class, "createTemplatePage"])->name("createTemplatePage");
Route::post("/create/website-data", [adminController::class, "createWebsite"])->name("createWebsite");
Route::post("/config/website-data", [adminController::class, "configWebsite"])->name("configWebsite");
Route::post("/create/category-data", [adminController::class, "createCategory"])->name("createCategory");
Route::post("/create/subcategory-data", [adminController::class, "create_sub_category"])->name("create_sub_category");
// ...............Admin.....................


Route::post("/template/{template_name}/{page_name?}", [adminController::class, "view_template"]);
Route::post("/w/{id}/{slug}", [adminController::class, "view_template"]);


Route::prefix('/admin')->middleware('auth')->group(function () {

    Route::get("/dashboard", [adminController::class, "indexView"])->name("indexView");
    Route::get("/logout", [adminController::class, "logout"])->name("logout");

    Route::get('/', function () { return view('admin.index'); })->name("dashboardView");


    Route::get("/category-edit", [userController::class, "categoryEdit"])->name("category-edit");

    Route::get("/add/layout", [adminController::class, "new_layout"])->name("new_layout");
    Route::get("/add/template", [adminController::class, "new_template"])->name("new_template");
	Route::get("/add/website", [adminController::class, "new_website"])->name("new_website");
    Route::get("/add/new-page/{id}", [adminController::class, "new_page"])->name("new_page");
	Route::get("/config/website/{web_id}/{page_name?}", [adminController::class, "config_website"])->name("config_website");
    Route::get("/add/category", [adminController::class, "new_category"])->name("new_category");
    Route::get("/add/subcategory", [adminController::class, "new_subcategory"])->name("new_subcategory");
    Route::get("/add/templatepage", [adminController::class, "new_templatepage"])->name("new_templatepage");
    Route::get("/get/subcat", [adminController::class, "getSubCategory"])->name("getSubCategory");
    Route::get("/get/template", [adminController::class, "getTemplate"])->name("getTemplate");

    Route::get('/list/websites', [adminController::class, "website_listing"])->name("website_listing");
    Route::get('/list/templates', [adminController::class, "template_listing"])->name("template_listing");
    Route::get('/list/categories', [adminController::class, "category_listing"])->name("category_listing");
    Route::get('/list/subcategories', [adminController::class, "subcategory_listing"])->name("subcategory_listing");
    Route::get('/list/template-pages/{id}', [adminController::class, "templatepages_listing"])->name("templatepages_listing");

	Route::get('/create/website/{template_name}', [adminController::class, "create_website"])->name("create_website");
    Route::get('/template/delete/{id}', [adminController::class, "deleteTemplate"])->name("delete-template");




    //Personal Portfolio
        Route::get('/demo/personal/{id}', [adminController::class, "demoPersonalWebsite"])->name("personal_website_demo");
        Route::get('/template/personal/{id}', [adminController::class, "personalWebsite"])->name("personal_website");
        Route::get('/template/edit/personal/{id}', [adminController::class, "editPersonalWebsite"])->name("personal_website.edit");
        Route::post('/template/insert/personal', [adminController::class, "insertPersonalWebsite"])->name("personal_website.insert");
        Route::post('/template/update/personal', [adminController::class, "updatePersonalWebsite"])->name("personal_website.update");



    //edit category
    Route::get('/category/edit/{id}', [adminController::class, "editCategory"])->name("category.edit");
    Route::post('/category/edit', [adminController::class, "updateCategory"])->name("category.update");

    Route::get('/sub-category/edit/{id}', [adminController::class, "editSubCategory"])->name("sub-category.edit");
    Route::post('/update/subcategory-data', [adminController::class, "updateSubCategory"])->name("SubCategory.update");
    Route::get("/sub-category-delete", [adminController::class, "deleteSubCategory"])->name("sub-category-delete");






    Route::get('/calendar', function () { return view('admin.calendar'); })->name("calendarView");
    Route::get('/chart-3d', function () { return view('admin.chart_3d'); })->name("chart3dView");
    Route::get('/chart-chartist', function () { return view('admin.chart_chartist'); })->name("chartchartistView");
    Route::get('/chart-chartjs', function () { return view('admin.chart_chartjs'); })->name("chartchartjsView");
    Route::get('/chart-dynamic', function () { return view('admin.chart_dynamic'); })->name("chartdynamicView");
    Route::get('/chart-flot', function () { return view('admin.chart_flot'); })->name("chartflotView");
    Route::get('/chart-knob', function () { return view('admin.chart_knob'); })->name("chartknobView");
    Route::get('/widgets', function () { return view('admin.widgets'); })->name("widgetsView");
    Route::get('/ui-typography', function () { return view('admin.ui_typography'); })->name("uitypographyView");
    Route::get('/ui-treeview', function () { return view('admin.ui_treeview'); })->name("uitreeviewView");
    Route::get('/ui-sweetalert', function () { return view('admin.ui_sweetalert'); })->name("uisweetalertView");
    Route::get('/ui-rangeslider', function () { return view('admin.ui_rangeslider'); })->name("uirangesliderView");
    Route::get('/ui-notification', function () { return view('admin.ui_notification'); })->name("uinotificationView");
    Route::get('/ui-modals', function () { return view('admin.ui_modals'); })->name("uimodalsView");
    Route::get('/ui-draggablecards', function () { return view('admin.ui_draggablecards'); })->name("uidraggablecardsView");
    Route::get('/ui-components', function () { return view('admin.ui_components'); })->name("uicomponentsView");
    Route::get('/ui-checkboxradio', function () { return view('admin.ui_checkboxradio'); })->name("uicheckboxradioView");
    Route::get('/ui-cards', function () { return view('admin.ui_cards'); })->name("uicardsView");
    Route::get('/ui-buttons', function () { return view('admin.ui_buttons'); })->name("uibuttonsView");
    // Route::get('/tables-responsive', function () { return view('admin.tables_responsive'); })->name("tablesresponsiveView");
    Route::get('/tables-editable', function () { return view('admin.tables_editable'); })->name("tableseditableView");
    Route::get('/read-mail', function () { return view('admin.read_mail'); })->name("readmailView");
    Route::get('/profile', function () { return view('admin.profile'); })->name("profileView");
    Route::get('/page-starter', function () { return view('admin.page_starter'); })->name("pagestarterView");
    Route::get('/page-register', function () { return view('admin.page_register'); })->name("pageregisterView");
    Route::get('/page-recoverpw', function () { return view('admin.page_recoverpw'); })->name("pagerecoverpwView");
    Route::get('/page-login', function () { return view('admin.page_login'); })->name("pageloginView");
    Route::get('/page-lockscreen', function () { return view('admin.page_lockscreen'); })->name("pagelockscreenView");
    Route::get('/page_confirmmail', function () { return view('admin.page_confirmmail'); })->name("pageconfirmmailView");
    Route::get('/page500', function () { return view('admin.page500'); })->name("page500View");
    Route::get('/page404', function () { return view('admin.page404'); })->name("page404View");
    Route::get('/tables-datatable', function () { return view('admin.tables_datatable'); })->name("tablesdatatableView");
    Route::get('/tables-basic', function () { return view('admin.tables_basic'); })->name("tablesbasicView");
    Route::get('/chart-flot', function () { return view('admin.chart-flot'); })->name("chartflotView");
//    ...................
    Route::get('/', function () { return view('admin.'); })->name("View");
    Route::get('/', function () { return view('admin.'); })->name("View");
    Route::get('/', function () { return view('admin.'); })->name("View");
    Route::get('/', function () { return view('admin.'); })->name("View");
    Route::get('/', function () { return view('admin.'); })->name("View");
    Route::get('/', function () { return view('admin.'); })->name("View");
    Route::get('/', function () { return view('admin.'); })->name("View");
    Route::get('/', function () { return view('admin.'); })->name("View");
    Route::get('/', function () { return view('admin.'); })->name("View");
    Route::get('/', function () { return view('admin.'); })->name("View");
    Route::get('/', function () { return view('admin.'); })->name("View");
    Route::get('/', function () { return view('admin.'); })->name("View");
    Route::get('/', function () { return view('admin.'); })->name("View");
    Route::get('/', function () { return view('admin.'); })->name("View");
    Route::get('/', function () { return view('admin.'); })->name("View");
    Route::get('/', function () { return view('admin.'); })->name("View");


});
//Route::prefix('/user')->middleware('auth')->group(function () {
//
//    Route::get("/dashboard", [userController::class, "indexView"])->name("user.indexView");
//    Route::get("/logout", [userController::class, "logout"])->name("user.logout");
//
//    Route::get('/', function () { return view('user.index'); })->name("user.dashboardView");
//
//
//
//    Route::get("/add/layout", [userController::class, "new_layout"])->name("user.new_layout");
//    Route::get("/add/template", [userController::class, "new_template"])->name("user.new_template");
//	Route::get("/add/website", [userController::class, "new_website"])->name("user.new_website");
//	Route::get("/config/website/{web_id}/{page_name?}", [userController::class, "config_website"])->name("user.config_website");
//    Route::get("/add/category", [userController::class, "new_category"])->name("user.new_category");
//    Route::get("/add/subcategory", [userController::class, "new_subcategory"])->name("user.new_subcategory");
//    Route::get("/add/templatepage", [userController::class, "new_templatepage"])->name("user.new_templatepage");
//    Route::get("/get/subcat", [userController::class, "getSubCategory"])->name("user.getSubCategory");
//    Route::get("/get/template", [userController::class, "getTemplate"])->name("user.getTemplate");
//
//    Route::get('/list/websites', [userController::class, "website_listing"])->name("user.website_listing");
//    Route::get('/list/templates', [userController::class, "template_listing"])->name("user.template_listing");
//    Route::get('/list/categories', [userController::class, "category_listing"])->name("user.category_listing");
//    Route::get('/list/subcategories', [userController::class, "subcategory_listing"])->name("user.subcategory_listing");
//    Route::get('/list/template-pages/{id}', [userController::class, "templatepages_listing"])->name("user.templatepages_listing");
//
//	Route::get('/create/website/{template_name}', [userController::class, "create_website"])->name("user.create_website");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//    Route::get('/calendar', function () { return view('admin.calendar'); })->name("calendarView");
//    Route::get('/chart-3d', function () { return view('admin.chart_3d'); })->name("chart3dView");
//    Route::get('/chart-chartist', function () { return view('admin.chart_chartist'); })->name("chartchartistView");
//    Route::get('/chart-chartjs', function () { return view('admin.chart_chartjs'); })->name("chartchartjsView");
//    Route::get('/chart-dynamic', function () { return view('admin.chart_dynamic'); })->name("chartdynamicView");
//    Route::get('/chart-flot', function () { return view('admin.chart_flot'); })->name("chartflotView");
//    Route::get('/chart-knob', function () { return view('admin.chart_knob'); })->name("chartknobView");
//    Route::get('/widgets', function () { return view('admin.widgets'); })->name("widgetsView");
//    Route::get('/ui-typography', function () { return view('admin.ui_typography'); })->name("uitypographyView");
//    Route::get('/ui-treeview', function () { return view('admin.ui_treeview'); })->name("uitreeviewView");
//    Route::get('/ui-sweetalert', function () { return view('admin.ui_sweetalert'); })->name("uisweetalertView");
//    Route::get('/ui-rangeslider', function () { return view('admin.ui_rangeslider'); })->name("uirangesliderView");
//    Route::get('/ui-notification', function () { return view('admin.ui_notification'); })->name("uinotificationView");
//    Route::get('/ui-modals', function () { return view('admin.ui_modals'); })->name("uimodalsView");
//    Route::get('/ui-draggablecards', function () { return view('admin.ui_draggablecards'); })->name("uidraggablecardsView");
//    Route::get('/ui-components', function () { return view('admin.ui_components'); })->name("uicomponentsView");
//    Route::get('/ui-checkboxradio', function () { return view('admin.ui_checkboxradio'); })->name("uicheckboxradioView");
//    Route::get('/ui-cards', function () { return view('admin.ui_cards'); })->name("uicardsView");
//    Route::get('/ui-buttons', function () { return view('admin.ui_buttons'); })->name("uibuttonsView");
//    // Route::get('/tables-responsive', function () { return view('admin.tables_responsive'); })->name("tablesresponsiveView");
//    Route::get('/tables-editable', function () { return view('admin.tables_editable'); })->name("tableseditableView");
//    Route::get('/read-mail', function () { return view('admin.read_mail'); })->name("readmailView");
//    Route::get('/profile', function () { return view('admin.profile'); })->name("profileView");
//    Route::get('/page-starter', function () { return view('admin.page_starter'); })->name("pagestarterView");
//    Route::get('/page-register', function () { return view('admin.page_register'); })->name("pageregisterView");
//    Route::get('/page-recoverpw', function () { return view('admin.page_recoverpw'); })->name("pagerecoverpwView");
//    Route::get('/page-login', function () { return view('admin.page_login'); })->name("pageloginView");
//    Route::get('/page-lockscreen', function () { return view('admin.page_lockscreen'); })->name("pagelockscreenView");
//    Route::get('/page_confirmmail', function () { return view('admin.page_confirmmail'); })->name("pageconfirmmailView");
//    Route::get('/page500', function () { return view('admin.page500'); })->name("page500View");
//    Route::get('/page404', function () { return view('admin.page404'); })->name("page404View");
//    Route::get('/tables-datatable', function () { return view('admin.tables_datatable'); })->name("tablesdatatableView");
//    Route::get('/tables-basic', function () { return view('admin.tables_basic'); })->name("tablesbasicView");
//    Route::get('/chart-flot', function () { return view('admin.chart-flot'); })->name("chartflotView");
////    ...................
//    Route::get('/', function () { return view('admin.'); })->name("View");
//    Route::get('/', function () { return view('admin.'); })->name("View");
//    Route::get('/', function () { return view('admin.'); })->name("View");
//    Route::get('/', function () { return view('admin.'); })->name("View");
//    Route::get('/', function () { return view('admin.'); })->name("View");
//    Route::get('/', function () { return view('admin.'); })->name("View");
//    Route::get('/', function () { return view('admin.'); })->name("View");
//    Route::get('/', function () { return view('admin.'); })->name("View");
//    Route::get('/', function () { return view('admin.'); })->name("View");
//    Route::get('/', function () { return view('admin.'); })->name("View");
//    Route::get('/', function () { return view('admin.'); })->name("View");
//    Route::get('/', function () { return view('admin.'); })->name("View");
//    Route::get('/', function () { return view('admin.'); })->name("View");
//    Route::get('/', function () { return view('admin.'); })->name("View");
//    Route::get('/', function () { return view('admin.'); })->name("View");
//    Route::get('/', function () { return view('admin.'); })->name("View");
//
//
//});



























