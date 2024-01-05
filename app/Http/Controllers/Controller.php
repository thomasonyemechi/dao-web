<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;



    function blogIndex()
    {
        $posts = DB::connection('mysql2')->select("SELECT * FROM blogs ORDER BY id desc limit 25  ");

        return view('blog', compact(['posts']));
    }


    function blogSingleIndex($slug)
    {
        $posts = DB::connection('mysql2')->select("SELECT * FROM blogs ORDER BY rand() limit 3  ");
        $post = DB::connection('mysql2')->select("SELECT * FROM blogs WHERE slug='$slug' LIMIT 1  ")[0];

        return view('single_blog', compact(['post', 'posts']));
    }
}
