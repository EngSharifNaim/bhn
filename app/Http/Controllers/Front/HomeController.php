<?php

namespace App\Http\Controllers\Front;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;
use DB;

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

    public function distanceCalculation($point1_lat, $point1_long, $point2_lat, $point2_long, $unit = 'km', $decimals = 2) {
        // Calculate the distance in degrees
        $degrees = rad2deg(acos((sin(deg2rad($point1_lat))*sin(deg2rad($point2_lat))) + (cos(deg2rad($point1_lat))*cos(deg2rad($point2_lat))*cos(deg2rad($point1_long-$point2_long)))));

        // Convert the distance in degrees to the chosen unit (kilometres, miles or nautical miles)
        switch($unit) {
            case 'km':
                $distance = $degrees * 111.13384; // 1 degree = 111.13384 km, based on the average diameter of the Earth (12,735 km)
                break;
            case 'mi':
                $distance = $degrees * 69.05482; // 1 degree = 69.05482 miles, based on the average diameter of the Earth (7,913.1 miles)
                break;
            case 'nmi':
                $distance =  $degrees * 59.97662; // 1 degree = 59.97662 nautic miles, based on the average diameter of the Earth (6,876.3 nautical miles)
        }
        return round($distance, $decimals);
    }


    public function geo()
    {
//        31.535111, 34.531719
//        31.551605, 34.461659
//        $sqlDistance = DB::raw(( 111.045 * acos( cos( radians($data['lat'] ) )
//       * cos( radians( addresses.latitude ) )
//       * cos( radians( addresses.longitude )
//       - radians($data['lng']) )
//       + sin( radians($data['lat']) )
//       * sin( radians( addresses.latitude ) ) ) ));
        $point1 = array("lat" => "31.535111", "long" => "34.531719"); // Paris (France)
        $point2 = array("lat" => "31.551605", "long" => "34.461659"); // Mexico City (Mexico)
        $km = $this->distanceCalculation($point1['lat'], $point1['long'], $point2['lat'], $point2['long']); // Calculate distance in kilometres (default)
        return "The distance between Paris (France) and Mexico City (Mexico) is  " . $km . " km ";

    }
}
