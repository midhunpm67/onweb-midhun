<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\Referral;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Classes\Tbc;
// use Illuminate\Support\Facades\Session;
// use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Models\template_page;

use Symfony\Component\Debug\Exception\FatalThrowableError;


class userController extends Controller
{
    function indexView()
    {
        if (Auth::check()) {
            return view("user.indexView");
        } else {
            return view("user.login");
        }
    }

    function userReg()
    {
		return view("admin.register");
    }

    function userDemoView_backup_jk()
    {

        $page_layout = 'Header 1 <br/> Header 2 <br/> <?php echo $page_data ?> <br/> Footer 3 <br/> Footer 4';

        //==============================================

        $page_data = 'Page Data 1 <br/> Page Data 2 <br/> Page Data 3 <br/> Page Data 4';

        $php = \Blade::compileString($string);

        $obLevel = ob_get_level();
        ob_start();
        extract($data, EXTR_SKIP);

        try {
            eval('?' . '>' . $php);
        } catch (Exception $e) {
            while (ob_get_level() > $obLevel) ob_end_clean();
            throw $e;
        } catch (Throwable $e) {
            while (ob_get_level() > $obLevel) ob_end_clean();
            throw new FatalThrowableError($e);
        }

        return ob_get_clean();

        //==============================================

        // $page_content = view("demo.render_data")->with('data', $page_layout)->render();

        // return view("demo.demo_page")->with('data', $page_layout)->with('page_data', $page_data)->render();

        // print_r($page_content); exit;

        return view("demo.demo_page")->with('data', $page_layout)->render();
    }

    function view_template(Request $request)
    {
		// print_r($request->session()->all()); exit;

		$template_name = $request->template_name;
		$page_name = $request->page_name ?? "home";

        $page_layout = DB::table("template_info")
        ->select("*")
        ->where("slug_url", $template_name)
        ->get();

        $page_layout = $page_layout[0];

        $layout_id = $page_layout->id;
		// $template_name = $page_layout->slug_url;
		// $layout_header = $page_layout->layout_header;
		// $layout_footer = $page_layout->layout_footer;

		//==============================================

		$page_info = DB::table("template_pages")
        ->select("page_name", "slug_url", "page_type", "page_data")
        ->where("temp_id", $layout_id)
        ->where("slug_url", $page_name)
        ->get()->toArray();

		$page_info = $page_info[0];
		
		$template_info = [
			"page_title" => $page_info->page_name,
			"slug_url" => $page_info->slug_url,
			"page_type" => $page_info->page_type,
		];

		$page_data = json_decode($page_info->page_data, true);

		// print_r($page_data); exit;

        //==============================================

        // $page_data = $layout_header . $page_contents . $layout_footer;

        //==============================================

        return view("templates.$template_name.$page_name", compact("template_name", "page_name", "template_info", "page_data"))->render();
    }
    public function deleteWebsite(Request $request)
    {
       return DB::table('user_websites')->delete($request->id);
    }
    public function categoryEdit(Request $request)
    {
       $data = DB::table('theme_cat')->select('*')->where('id',$request->id)->first();
        return redirect('admin/add/category',$data);
    }
    public function deleteCategory(Request $request)
    {
        return DB::table('theme_cat')->delete($request->id);
    }

}
