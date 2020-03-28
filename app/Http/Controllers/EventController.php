<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\DB;
use DB;
use Auth;
use Validator;
use Session;
use App\Event;
use App\Room;
use User;
use App\Search as Search;

use Calendar;

class EventController extends Controller
{
    public function index(){
    /*	//$events = Event::get();
    	// $event_list = [];
    	// foreach ($events as $key => $event) {
    	// 	$event_list[] = Calendar::event(
        //         $event->event_name,
        //         true,
        //         new \DateTime($event->start_date),
        //         new \DateTime($event->end_date.' +1 day')
        //     );
    	// }
    	// $calendar_details = Calendar::addEvents($event_list); 
        //return view('addevent.events', compact('calendar_details') );  */

       /* $events = Event::latest()->paginate(5);
        return view('addevent.events',compact('events'))
            ->with('i', (request()->input('page', 1) - 1) * 5);  
            //********************************** 
        $data = DB::Event('data')->paginate(5);

        return view('addevent.events', ['data' => $data]);  */
        $events = Event::orderBy('created_at', 'desc')->paginate(5);
        return view('addevent.events',  compact('events'));

    }

    public function addEvent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'event_name' => 'required',
            'start_date' => 'required',
            'end_date'   => 'required',
            'room_name'  => 'required',
            't_start'    => 'required',
            't_end'      => 'required'

        ]);
 

        if ($validator->fails()) {
        	\Session::flash('warnning','Please enter the valid details');
            return Redirect::to('/events')->withInput()->withErrors($validator);
        }

        $event = new Event;
        $event->event_name = $request['event_name'];
        $event->start_date = $request['start_date'];
        $event->end_date   = $request['end_date'];
        $event->room_name  = $request['room_name'];
        $event->t_start    = $request['t_start'];
        $event->t_end      = $request['t_end'];

        $event->save();
        //dd($event);


        \Session::flash('success','Event added successfully.');
        return Redirect::to('/events');
    }

    // Dropdown
  
   
    // Search
    public function home(){
        $data= array('word'=>null);
        return view('addevent.search',$data);
    }
    public function getsearch(Request $request){
        $event_name=$request->input('word');
        $word=Search::getWord($event_name);
        //dd($word);
        $data=array("word"=>$word,"event_name"=>$event_name);
        //dd($data);
        return view('addevent.search',$data);
    }



    //  public function index1() {
    //      $events = Event::all()->toArray();
    //      return view('event.index1', compact('events'));
    //    }
    public function show(Event $event) 
    {
        //$events = Event::all();
        //return view('addevent.events', compact('events'));
        //dd($events);

        $events = Event::orderBy('start_date', 'ASC')->get();
        return view('addevent.events', compact('events'));
    }



    public function edit($id)
    {
        $event = Event::findOrFail($id)->toArray();
       // dd(gettype($event));
        //dd($event);
        //dd(array_column($event,'original'));
        $data=array("event"=>$event);
        return view('addevent.edit',$data);
    }

    public function update(Request $request)
    // public function update(Request $request, Event $event)
    {
        // $event = Event::findOrFail($id)->toArray();
        $validator = Validator::make($request->all(), [
            'event_name' => 'required',
            'start_date' => 'required',
            'end_date'   => 'required',
            'room_name'  => 'required',
            't_start'    => 'required',
            't_end'      => 'required'
        ]);
        //dd($validator);
        if ($validator->fails()) {
        	\Session::flash('warnning','Please enter the valid details');
            return Redirect::to('/events')->withInput()->withErrors($validator);
        }
        //dd($request['event_name']);

       /* $event = new Event;
        $id = $request->input('id');
        $event->event_name = $request['event_name'];
        $event->start_date = $request['start_date'];
        $event->end_date = $request['end_date'];
        //$event->id = $id;*/
        $event_name  = $request['event_name'];
        $start_date = $request['start_date'];
        $end_date   = $request['end_date'];
        $room_name  = $request['room_name'];
        $t_start    = $request['t_start'];
        $t_end      = $request['t_end'];

        $id = $request->input('id');
        $data=array('event_name'=>$event_name,
                    'start_date'=>$start_date,
                    'end_date'  =>$end_date, 
                    'room_name' =>$room_name,
                    't_start'   =>$t_start,
                    't_end'     =>$t_end);
       // dd($id);
        $i=DB::table('events')->where('id',$id)->update($data);
       // dd($i);
      //  dd($event->toArray());
       // $event->where('id',$id)->update( $event->toArray());
      //  $event->save();
        //dd($event);

        \Session::flash('success','Event updated successfully.');
        return Redirect::to('/events');
    }


    public function destroy($id)
    {
        // delete
        $event = Event::findOrFail($id);
        $event->delete();

		// redirect
		return redirect('events')->with('message', 'Successfully deleted the Event!');
    }

}