<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Event;
use App\Product;
use App\Room;



class DropdownController extends Controller
{
     function index()
     {
     /* $country_list = DB::table('rooms')
         // ->groupBy('name')
          ->get();
         // dd($country_list);
      return view('addevent.dynamic_dependent')->with('country_list', $country_list);
      */
     }
 
     function fetch(Request $request)
     {
      /* $select = $request->get('select');
      $value = $request->get('value');
      $dependent = $request->get('dependent');
      $data = DB::table('rooms')
        ->where($select, $value)
        ->groupBy($dependent);
      $output = '<option value="">Select '.ucfirst($dependent).'</option>';
      foreach($data as $row)
      {
       $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
      }
      echo $output; */
     }

}
