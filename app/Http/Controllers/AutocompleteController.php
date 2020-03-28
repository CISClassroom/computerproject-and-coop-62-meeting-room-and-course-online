<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Addcourse;
use App\User;
use App\Course;
use Validator;

class AutocompleteController extends Controller
{
    //for create controller - php artisan make:controller AutocompleteController

    function index()
    {
     return view('courses.autocomplete');
    }

    function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('courses')
        ->where('coure_name', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '
       <li><a href="#">'.$row->coure_name.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
    }
}