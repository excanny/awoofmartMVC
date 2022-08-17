<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
use App\Models\Wishlist;
use App\Models\Category;

class FrontController extends Controller
{
   public function __construct()
    {
      if(empty($_COOKIE["_fhv"]))
	   {
	   
    	  $GUID = sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));;
    	  $cookie_name = "_fhv";
        $cookie_value = $GUID;
        setcookie($cookie_name, $cookie_value, time() + (10 * 365 * 24 * 60 * 60), "/");
	   }

    }

    public function home()
    {
       $cities = DB::table('tcities')->get();
       return view('front.welcome', compact('cities'));
    }

    public function city($city_name)
    {
        //if(!Session::get('city')) return redirect('/');
        $cities = DB::table('tcities')->get();
        $city_exists = DB::table('tcities')->where('fcity_name', ucfirst($city_name))->first();
        if(is_null($city_exists)) return view('front.404', compact('cities'));

        $categories = Category::with('children')->where('fparent_id', 0)->orderBy('fcategory_name','asc')->get();
        $popular_products = DB::table('tproducts')->where('fmerchant_city', $city_name)->limit(10)->orderBy('fviews', 'desc')->get();
        $recent_products = DB::table('tproducts')->where('fmerchant_city', $city_name)->limit(3)->orderBy('created_at', 'desc')->get();
        $top_selling = DB::table('tsales_details')->select('fproduct_id', DB::raw('COUNT(fproduct_id) as count'))->groupBy('fproduct_id')->orderBy('count', 'desc')->limit(3)->get();
        return view('front.city', compact('cities', 'categories', 'popular_products', 'recent_products', 'top_selling'));
        //return $categories;
    } 

    public function Cart()
    {
      $cities = DB::table('tcities')->get();
      $cart_contents = Cart::where('fshopper_id', $_COOKIE["_fhv"])->select('*')->get();
      return view('front.cart', compact('cities', 'cart_contents'));
    }

    public function getareas(Request $request)
    {
      $areas = DB::table('tareas')->where('fcity_name', $request->city)->select('farea_name')->orderBy('farea_name','asc')->get();
      $output = "";
      foreach ($areas as $area) 
         $output .="<option value='".$area->farea_name."'>".$area->farea_name."</option>";
      
      $data = array('areas' =>  $output); 

      return json_encode($data);
 
    }

    public function getlandmarks(Request $request)
    {
      $area = $request->area;
      $landmarks = DB::table('tlandmarks')->where('farea_name',$area)->select('fland_mark')->orderBy('fland_mark','asc')->get();
      $output = "";
      foreach ($landmarks as $landmark) 
      {
            $output .="<option value='".$landmark->fland_mark."'>".$landmark->fland_mark."</option>";
      }

         $data = array(
            'landmarks' => $output,
         ); 

      return json_encode($data);
     //var_dump($area);

    }

    public function choosecitytoshop(Request $request)
    {
      $city = $request->city;
      Session::put('city', $city);
      return response()->json(['url'=>url('/city/'. strtolower($city))]);
    }

   


}
