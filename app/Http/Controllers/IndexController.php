<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Page;
use App\Menu;
use App\Banner;

class IndexController extends Controller
{

    public function index()
    {
    	$posts = Post::orderBy('id', 'ASC')->paginate(2);
        $banner = Banner::all()->first();
        // dd();
    	return View('post.index')
    		   ->with('posts', $posts)
               ->with('banner', $banner); 
    }

    public function showPost($slug)
    {
    	$post = Post::where('slug', '=', $slug)->first();

    	return View('post.show')
    		   ->with('post', $post); 
    }

    public function showPage($slug)
    {
        $page = Page::where('slug', '=', $slug)->first();

        return View('page.show')
               ->with('page', $page); 
    }
}
