<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    public function home()
    {
       $cities = DB::table('tcities')->get();
       return view('front.welcome', compact('cities'));
    }

    public function getareas(Request $request)
    {
      $city = $request->city;
      $areas = DB::table('tareas')->where('fcity_name',$city)->select('farea_name')->orderBy('farea_name','asc')->get();
      $output = "";
      foreach ($areas as $area) 
      {
            $output .="<option value='".$area->farea_name."'>".$area->farea_name."</option>";
      }

         $data = array(
            'areas'     =>  $output,
         ); 

     return json_encode($data);
     //var_dump($areas);

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

    public function city()
    {
        if(!Session::get('city'))
        {
            return redirect('/');
        }

        $cities = DB::table('tcities')->get();
        return view('front.city', compact('cities'));
        
    }   


}
