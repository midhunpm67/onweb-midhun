<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\Referral;
use Illuminate\Support\Facades\Auth;
use App\Models\ThemeCat;
use App\Models\ThemeSub;
use App\Models\TemplateInfo;
use Illuminate\Support\Facades\Route;
// use App\Classes\Tbc;
// use Illuminate\Support\Facades\Session;
// use App\Models\User;
use Illuminate\Support\Facades\Mail;

class adminController extends Controller
{
    function indexView()
    {
        if (Auth::check()) {
            return view("admin.indexView");
        } else {
            return view("admin.login");
        }
    }

    function loginView()
    {
        if (Auth::check()) {
            return view("admin.indexView");
        } else {
            return view("admin.login");
        }
    }

    function loginCheck(Request $request)
    {

        $request->validate([
            'email' =>  'required|email',
            'password'  => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin/dashboard')->withSuccess('Successfully Logged In');
        }

        return redirect("login")->withSuccess('Credentials are not valid');
    }

    public function logout()
    {
        Auth::logout();
        return view('admin.login');
    }

    public function new_layout()
    {

        return view('admin.new_layout');
    }

    function createTemplate(Request $request): string
    {

        $request_data = $request->all();

        $insert_template = 0;

        $insert_template = DB::table("template_info")->insertGetId(
            [
                'template_name' => $request_data['template_name'],
                'template_layout' => $request_data['template_layout'],
                'slug_url' => $request_data['slug_url'],
                'cat_id' => $request_data['cat_id'],
                'sub_id' => $request_data['sub_id'],
                'theme_id' => 1,
                'is_single_page' => 1,
                'source_id' => 1,
                'author_id' => 1,
            ]
        );



        if ($insert_template)
            return json_encode([
                "status" => 1,
                "message" => "Success!",
                "redirect" => "/website-list"
            ]);
        else
            return json_encode([
                "status" => 0,
                "message" => "Something went wrong!"
            ]);
    }

    public function new_template()
    {
        $category = ThemeCat::where("active","1")->get();
        $subcategory = ThemeSub::where("active","1")->get();
        return view('admin.new_template')->with("category",$category)->with("subcategory",$subcategory);
    }

    function getSubCategory(Request $request)
    {
        $subcategory = ThemeSub::where("active","1")->where("cat_id",$request->catId)->get();
        $html ="<option value='0'>Select Sub Category</option>";
        foreach($subcategory as $sub)
        {
            $html .= "<option value='".$sub->id."'>".$sub->name."</option>";
        }
        return  $html;
    }
	
    function getTemplate(Request $request)
    {
        $template = TemplateInfo::where("active","1")->where("cat_id",$request->catId)->where("sub_id",$request->subcatId)->get();
        $html ="<option value='0'>Select Template</option>";
        foreach($template as $tem)
        {
            $html .= "<option value='".$tem->id."'>".$tem->template_name."</option>";
        }
        return  $html;
	}

	public function new_website()
	{
		$category = ThemeCat::where("active", "1")->get();
		$subcategory = ThemeSub::where("active", "1")->get();
		return view('admin.new_website')->with("category", $category)->with("subcategory", $subcategory);
	}

	public function config_website(Request $request)
	{
		$request_data = $request->all();

		$page_name = $request->page_name ?? "home";
		$web_id = $request->web_id;

		$uw_data = DB::table("user_websites")
		->select("id", "website_name", "slug_url", "theme_id")
		->where("id", "$web_id")
		->get();

		$uw_data = $uw_data[0] ?? $uw_data;
		$website_name = $uw_data->website_name;
		$slug_url = $uw_data->slug_url;
		$theme_id = $uw_data->theme_id;

		$page_info = DB::table("template_pages")
		->select("page_name", "slug_url", "page_type", "page_fields")
		->where("temp_id", $theme_id)
			->where("slug_url", $page_name)
			->get()->toArray();

		$page_info = $page_info[0];

		$template_info = [
			"page_title" => $page_info->page_name,
			"slug_url" => $page_info->slug_url,
			"page_type" => $page_info->page_type,
		];

		$page_fields = json_decode($page_info->page_fields, true);

        $category = ThemeCat::where("active", "1")->get();
        $subcategory = ThemeSub::where("active", "1")->get();
        return view('admin.new_website')->with("category", $category)->with("subcategory", $subcategory);
		
//		return view('admin.config_website', compact("template_info", "page_fields"));
	}
	
	//jk
    function createWebsite(Request $request)
    {
        $request_data = $request->all();

        $insert_website = 0;

        $insert_website = DB::table("template_info")->insertGetId(
            [
                'template_name' => $request_data['template_name'],
                'slug_url' => $request_data['slug_url'],
                'cat_id' => $request_data['category'],
                'sub_id' => $request_data['subcategory'],
                'author_id' => Auth::user()->id,
                'active'=>1

            ]
        );

        if ($insert_website)
        {
            return back()->with('success','successfully added');
        }
        else
       {
        return back()->with('error','Error...!');
       }
    }

    function configWebsite(Request $request): string
    {

        $request_data = $request->all();

        $insert_website = 0;

        $insert_website = DB::table("user_websites")->insertGetId(
            [
                'website_name' => $request_data['website_name'],
                // 'web_content' => $request_data['web_content'],
                'slug_url' => $request_data['website_name_slug'],
                'theme_id' => $request_data['website_name_slug'],
                'user_id' => Auth::id(),
                'is_subdomain' => 0,

            ]
        );

        if ($insert_website)
            return json_encode([
                "status" => 1,
                "message" => "Success!",
                "redirect" => "/config/website/$insert_website"
            ]);
        else
            return json_encode([
                "status" => 0,
                "message" => "Something went wrong!"
            ]);
    }

    public function new_category()
    {

        return view('admin.new_category');
    }

    function createCategory(Request $request): string
    {

        $request_data = $request->all();

        $insert_catagory = 0;

        $insert_catagory = DB::table("theme_cat")->insertGetId(
            [
                'name' => $request_data['name'],
            ]
        );
        if ($insert_catagory)
           {
               return redirect('admin/list/categories');
           }
    }

    public function new_subcategory()
    {
        $category = DB::table("theme_cat")
		->select("id", "name")
		->get();
        return view('admin.new_subcategory',compact('category'));
    }

    function create_sub_category(Request $request): string
    {
        $request_data = $request->all();
        $insert_category = 0;

        $insert_category = DB::table("theme_sub")->insertGetId(
            [
                'name' => $request_data['name'],
                'cat_id' => $request_data['category'],
            ]
        );
        if ($insert_category)
            {
                return redirect('/admin/list/subcategories');
            }
    }

    public function new_templatepage()
    {
        return view('admin.new_templatepage');
    }

    function createTemplatePage(Request $request): string
    {

        $request_data = $request->all();

        $insert_templatepage = 0;

        $insert_templatepage = DB::table("template_pages")->insertGetId(
            [
                'page_name' => $request_data['page_name'],
                'page_layout' => $request_data['page_layout'],
                'slug_url' => $request_data['slug_url'],
                'temp_id' => $request_data['temp_id'],
                'page_type' => 1,
                'header_depenndancy' => 1,
                'footer_dependanc' => 1,
            ]

        );
        // print_r($insert_templatepage); exit;


        if ($insert_templatepage)
            return json_encode([
                "status" => 1,
                "message" => "Success!",
                "redirect" => "/admin/list/websites"
            ]);
        else
            return json_encode([
                "status" => 0,
                "message" => "Something went wrong!"
            ]);
    }

    function website_listing()
    {

        $page_title = "Website Listing";
        $page_name = "website_listing";
        $add_url = "/admin/add/website";

        if(Auth::user()->user_type != 'admin'){
            $db_data = DB::table("user_websites")
                ->select("id", "website_name", "slug_url", "web_content")
                ->where('user_id',Auth::id())
                ->orderBy("id", "ASC")
                ->get();
        }
        elseif (Auth::user()->user_type != 'user'){
            $db_data = DB::table("user_websites")
                ->select("id", "website_name", "slug_url", "web_content")
                ->orderBy("id", "ASC")
                ->get();
        }


//        dd($db_data);

        $list_data = [];
        $loop_counter=0;
        // print_r($db_data); exit;

        foreach ($db_data as $val) {
            // if ($val->credit_id == "")
            //     continue;
            $loop_counter++;

            $id = $val->id;
            $website_name = $val->website_name;
            $slug_url = $val->slug_url;
            // $web_content = $val->web_content;

            $list_data_temp = [
                "id" => "$id",
                "Sl. No." => "$loop_counter",
                "Website Name" => "$website_name",
                "Slug Url" =>"$slug_url",
                "Actions" => "<button class='btn btn-sm' value='$id'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'>
                <path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z'/>
                <path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z'/>
                </svg></button>
                <button class='btn btn-sm delete-btn-web' value='$id'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                </svg></button>",
            ];

            array_push($list_data, $list_data_temp);
        }

        $list_title = [
            "id",
            "Sl. No.",
            "Website Name",
            "Slug Url",
            "Actions",
        ];

        $page_data = [
            "title" => "$page_title",
            "button" => [
                "icon" => "",
                "link" => ""
            ],
            "no_data" => "Sorry... Website List Empty! 🤷‍♂️",
            "list_title" => $list_title,
            "list" => $list_data
        ];

        return view("admin.common_list_view", compact("page_title", "page_name", "page_data","add_url"));
    }


    function template_listing()
    {
        // $userId = Auth::id();

        $page_title = "Template Listing";
        $page_name = "template_listing";
        $add_url = route('new_template');

        $db_data = DB::table("template_info")
        ->select("id", "template_name", "slug_url", "template_layout")
        ->orderBy("id", "ASC")
        ->get();

        // print_r(Route::get('templatepages_listing')->toArray());
        // exit;

        $list_data = [];
        $loop_counter=0;
        // print_r($db_data); exit;

        foreach ($db_data as $val) {
            // if ($val->credit_id == "")
            //     continue;
            $loop_counter++;

            $id = $val->id;
            $template_name = $val->template_name;
            $slug_url = $val->slug_url;
            $template_layout = $val->template_layout;

            $list_data_temp = [
                "id" => "$id",
                "Sl. No." => "$loop_counter",
                "Template Name" => "$template_name",
                "Slug Url" =>"$slug_url",
                "Actions" => "<a href='/admin/list/template-pages/$id'>View Pages</a><br/><a href='/template/$slug_url' target='_blank'>View Template</a><br/><a href='/create/template/$slug_url' target='_blank'>Use Template</a>",
            ];

            array_push($list_data, $list_data_temp);
        }

        $list_title = [
            "id",
            "Sl. No.",
            "Template Name",
            "Slug Url",
            "Actions",
        ];

        $page_data = [
            "title" => "$page_title",
            "button" => [
                "icon" => "",
                "link" => ""
            ],
            "no_data" => "Sorry... Template List Empty! 🤷‍♂️",
            "list_title" => $list_title,
            "list" => $list_data
        ];

        // print_r($page_data);
        // exit;

        return view("admin.common_list_view", compact("page_title", "page_name", "page_data","add_url"));
	}

	function templatepages_listing($id)
	{
		// $userId = Auth::id();

		$page_title = "templatepages_listing";
		$page_name = "templatepages_listing";
        $add_url = route('new_page',$id);

		$db_data = DB::table("template_pages AS tp")
		->select("tp.id", "tp.page_name", "tp.slug_url AS page_slug", "tp.page_type", "template_name", "ti.id", "ti.template_name", "ti.slug_url AS template_slug")
		->leftJoin('template_info AS ti', function ($join) {
			$join->on('ti.id', '=', 'tp.temp_id');
		})
		->where("tp.temp_id", $id)
			->orderBy("tp.id", "ASC")
			->get();
		$list_data = [];
		$loop_counter = 0;
		// print_r($db_data); exit;

		foreach ($db_data as $val) {
			// if ($val->credit_id == "")
			//     continue;
			$loop_counter++;

			$id = $val->id;
			$page_name = $val->page_name;
			$page_slug = $val->page_slug;
			$page_type = $val->page_type;
			// $page_layout = $val->page_layout;
			$template_slug = $val->template_slug;

			$list_data_temp = [
				"id" => "$id",
				"Sl. No." => "$loop_counter",
				"page_name" => "$page_name",
				"slug_url" => "$page_slug",
				// "page_layout" => "$page_layout",
				"Actions" => "<a href='/template/$template_slug/$page_slug' target='_blank'>View Page</a>",

			];

			array_push($list_data, $list_data_temp);
		}

		$list_title = [
			"id",
			"Sl. No.",
			"Template Name",
			"Slug Url",
			// "Page Layout",

		];

		$page_data = [
			"title" => "$page_title",
			"button" => [
				"icon" => "",
				"link" => ""
			],
			"no_data" => "Sorry... Template Page List Empty! 🤷‍♂️",
			"list_title" => $list_title,
			"list" => $list_data
		];

		return view("admin.common_list_view", compact("page_title", "page_name", "page_data","add_url"));
	}

    function category_listing()
    {
        // $userId = Auth::id();

        $page_title = "Template Listing";
        $page_name = "category_listing";
        $add_url = route('new_category');

        $db_data = DB::table("theme_cat")
        ->select("id", "name")
        ->orderBy("id", "ASC")
        ->get();

        $list_data = [];
        $loop_counter=0;
        // print_r($db_data); exit;

        foreach ($db_data as $val) {
            // if ($val->credit_id == "")
            //     continue;
            $loop_counter++;

            $id = $val->id;
            $name = $val->name;
            $url =route('category-edit',['id' => $id]);

            $list_data_temp = [
                "id" => "$id",
                "Sl. No." => "$loop_counter",
                "Category Name" => "$name",
                "Actions"=>"<a class='btn btn-sm' href='$url'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                </svg></a>
                <button class='btn btn-sm delete-btn-category' value='$id'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                </svg></button>"
            ];

            array_push($list_data, $list_data_temp);
        }

        $list_title = [
            "id",
            "Sl. No.",
            "Category Name",
            "Actions"
        ];

        $page_data = [
            "title" => "$page_title",
            "button" => [
                "icon" => "",
                "link" => ""
            ],
            "no_data" => "Sorry... Category List Empty! 🤷‍♂️",
            "list_title" => $list_title,
            "list" => $list_data
        ];

        return view("admin.common_list_view", compact("page_title", "page_name", "page_data","add_url"));
    }

    function subcategory_listing()
    {
        // $userId = Auth::id();

        $page_title = "subcategory_listing";
        $page_name = "subcategory_listing";
        $add_url = route('new_subcategory');

        $db_data = DB::table("theme_sub")
        ->select("id", "name")
        ->orderBy("id", "ASC")
        ->get();

        $list_data = [];
        $loop_counter=0;
        // print_r($db_data); exit;

        foreach ($db_data as $val) {
            // if ($val->credit_id == "")
            //     continue;
            $loop_counter++;

            $id = $val->id;
            $name = $val->name;


            $list_data_temp = [
                "id" => "$id",
                "Sl. No." => "$loop_counter",
                "subCategory Name" => "$name",

            ];

            array_push($list_data, $list_data_temp);
        }

        $list_title = [
            "id",
            "Sl. No.",
            "subCategory Name",

        ];

        $page_data = [
            "title" => "$page_title",
            "button" => [
                "icon" => "",
                "link" => ""
            ],
            "no_data" => "Sorry... subCategory List Empty! 🤷‍♂️",
            "list_title" => $list_title,
            "list" => $list_data
        ];

        return view("admin.common_list_view", compact("page_title", "page_name", "page_data","add_url"));
    }
    public function new_page($id)
    {
        return view('admin.new_page',compact('id'));
    }
    public function createPage(Request $request)
    {

        $request->validate([
            'page_name'=>'required',
            'slug_url'=>'required'
        ]);
        $request_data = $request->all();
        $insert_page = DB::table("template_pages")->insertGetId(
            [
                'page_name' => $request_data['page_name'],
                'slug_url' => $request_data['slug_url'],
                'temp_id' => $request_data['id'],
                'page_type' => 1
            ]
        );

        if ($insert_page)
        {
            return back()->with('success','successfully added');
        }
        else
       {
        return back()->with('error','Error...!');
       }
    }
}
