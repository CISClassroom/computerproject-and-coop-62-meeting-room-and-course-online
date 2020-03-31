<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Validator;
use Session;
use DB;
use Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$courses = Course::get();
        /*$courses = Course::latest()->paginate(5);
        return view('courses.index', compact('courses') )
        ->with('i', (request()->input('page', 1) - 1) * 5); */


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('courses.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'coure_name'    => 'required',
            'coure_name_dr' => 'required',
            'coure_day'     => 'required',
            'coure_time'    => 'required',
            'coure_number'  => 'required',
            'coure_room'    => 'required'

        ]);
 

        if ($validator->fails()) {
        	\Session::flash('warnning','Please enter the valid details');
            return Redirect::to('/courses')->withInput()->withErrors($validator);
        }

        $course = new Course;
        $course->coure_name    = $request['coure_name'];
        $course->coure_name_dr = $request['coure_name_dr'];
        $course->coure_day     = $request['coure_day'];
        $course->coure_time    = $request['coure_time'];
        $course->coure_number  = $request['coure_number'];
        $course->coure_room    = $request['coure_room'];

        //dd($event);
        $course->save();

        \Session::flash('success','Courses added successfully.');
        return Redirect::to('/courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        /*$courses = Course::all();
        return view('courses.index', compact('courses')); */
        //dd($events);
        $courses = Course::orderBy('coure_day', 'ASC')
        ->paginate(5);
        //->get();
        //dd($courses);
        return view('courses.index', compact('courses'));
    }


    public function edit($id)
    {
        $course = Course::findOrFail($id)->toArray();
        $data=array("course"=>$course);
        return view('courses.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $validator = Validator::make($request->all(), [
            'coure_name'    => 'required',
            'coure_name_dr' => 'required',
            'coure_day'     => 'required',
            'coure_time'    => 'required',
            'coure_number'  => 'required',
            'coure_room'    => 'required'

        ]);
 
        if ($validator->fails()) {
        	\Session::flash('warnning','Please enter the valid details');
            return Redirect::to('/courses')->withInput()->withErrors($validator);
        }
        
        $coure_name     = $request['coure_name'];
        $coure_name_dr  = $request['coure_name_dr'];
        $coure_day      = $request['coure_day'];
        $coure_time     = $request['coure_time'];
        $coure_number   = $request['coure_number'];
        $coure_room     = $request['coure_room'];

        $id = $request->input('id');
        $data=array('coure_name'    => $coure_name,
                    'coure_name_dr' => $coure_name_dr,
                    'coure_day'     => $coure_day,
                    'coure_time'    => $coure_time,
                    'coure_number'  => $coure_number,
                    'coure_room'    => $coure_room );
                    
        $i=DB::table('courses')->where('id',$id)->update($data);

        \Session::flash('success','Courses updated successfully.');
        return Redirect::to('/courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $course = Course::findOrFail($id);
        $course->delete();

		// redirect
		return redirect('courses')->with('message', 'Successfully deleted the Courses!');
    }
}
