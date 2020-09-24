<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        $categories = Category::all();
        return view('dashboard.blogs.index',compact('blogs','categories'));
    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->details = $request->body;
        $blog->category_id = $request->category;
        if(isset($request->main))
            $blog->main = 1;
        if(isset($request->slider))
            $blog->slider = 1;
        $blog->user_id = Auth::id();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/blogs');
            $image->move($destinationPath, $name);
            $blog->image = 'images/blogs/' . $name;
        }

        $blog->save();

        return back();


    }
}
