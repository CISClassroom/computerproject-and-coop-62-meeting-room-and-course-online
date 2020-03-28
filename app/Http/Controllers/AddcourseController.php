<?php

namespace App\Http\Controllers;

use App\Addcourse;
use App\Course;
use App\User;
use Validator;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Gate;

class AddcourseController extends Controller
{
  public function index()
  {
      
  }
 

  public function create()
  {
      return view('courses.create');
  }


  public function store(Request $request)
  {
     // dd($request);
      $request->validate([
          'users_id'    => 'required',
          'courses_id'  => 'required',
      ]);

      Addcourse::create($request->all());
 
      return redirect()->route('bookingRoom.booking')
                      ->with('success','Product created successfully.');
  }
 

  public function show(Addcourse $bookingRoom)
  {
    if(Auth::user()->id==7){
    $bookingRoom = DB::table('addcourses') 
      ->join('users', 'users.id', '=', 'addcourses.users_id')  /** Join คอลัมของผู้ใช้งานมา*/
      ->join('courses', 'courses.id', '=', 'addcourses.courses_id')  /** Join ชื่อคอร์สอบรมมา*/
      ->select('users.name', 'courses.coure_name','addcourses.id')
      //->whereColumn('users_id', '=', 'users_id')
      //->where('users_id', '<=', 'users_id')
      //->where('users.id', '>=', $bookingRoom)
      //->where('users.id', '=', Auth::id())  /* ใช้แบ่งข้อมูลผู้ใช้งาน */
      ->orderBy('users_id', 'desc')
      ->get();
    }
    else{
        $bookingRoom = DB::table('addcourses') 
      ->join('users', 'users.id', '=', 'addcourses.users_id')  /** Join คอลัมของผู้ใช้งานมา*/
      ->join('courses', 'courses.id', '=', 'addcourses.courses_id')  /** Join ชื่อคอร์สอบรมมา*/
      ->select('users.name', 'courses.coure_name','addcourses.id')
      //->whereColumn('users_id', '=', 'users_id')
      //->where('users_id', '<=', 'users_id')
      //->where('users.id', '>=', $bookingRoom)
      ->where('users.id', '=', Auth::id())  /* ใช้แบ่งข้อมูลผู้ใช้งาน */
      ->orderBy('users_id', 'desc')
      ->get();
    }
   // dd( $bookingRoom)

      return view('courses.booking',compact('bookingRoom'));
  }


  public function destroy(Request $request)
  {
     $id = $request->input('id');

     //dd($id);
     DB::table('addcourses')->where('id','=',$id)->delete();

      return redirect()->route('bookingRoom.booking')
                      ->with('success','Product deleted successfully');
  }
}
