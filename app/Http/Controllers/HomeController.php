<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $settings = [];
        $settings['vision'] = Setting::where('key','vision')->first();
        if($settings['vision'])
            $settings['vision'] = $settings['vision']->value;
        else
            $settings['vision'] = 'غير محدد بعد';
        $settings['mission'] = Setting::where('key','mission')->first()->value;
        $settings['message'] = Setting::where('key','message')->first()->value;
        $settings['employees'] = (int)Setting::where('key','employees')->first()->value;
        $settings['citizens'] = (int)Setting::where('key','citizens')->first()->value;
        $settings['projects'] = (int)Setting::where('key','projects')->first()->value;

        $slider_news = Blog::where('slider',1)->orderBy('id','DESC')->take(3)->get();
        $categories = Category::with('blogs')
            ->get();
        return view('frontend.index',compact('categories','slider_news','settings'));
    }

}
