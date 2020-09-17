<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slider_news = Blog::where('slider',1)->orderBy('id','DESC')->take(3)->get();
        $categories = Category::with('blogs')
            ->get();
        return view('frontend.index',compact('categories','slider_news'));
    }

}
