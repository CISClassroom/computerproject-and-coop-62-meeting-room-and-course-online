<?php

namespace App\Http\Controllers;

use App\Crud;
use Illuminate\Http\Request;
use Validator;
use DB;

class CrudsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Crud::latest()->paginate(5); 
        return view('upload.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('upload.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'    =>  'required',
            'last_name'     =>  'required',
            'ep'            =>  'required',
            'video'         =>  'required',
            'image'         =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();        /* $image_name ใช้อ่านไฟล์ $image  */
        $image->move(public_path('images'), $new_name);                         /* เมื่อบันทึกแล้วจะนำไปเก็บที่ path images*/

        $form_data = array(
            'first_name'       =>   $request->first_name,
            'last_name'        =>   $request->last_name,
            'ep'               =>   $request->ep,
            'video'            =>   $request->video,
            'image'            =>   $new_name
        );

        Crud::create($form_data);

        return redirect('crud')
                    ->with('success', 'Data Added successfully.');
    }


    // // Add or Remove
    // public function indexAdd()
    // {
    //     return view("upload.addMore");

    // }

    // public function addMorePost(Request $request)
    // {
    //     $rules = [];
    //     foreach($request->input('name') as $key => $value) {
    //         $rules["name.{$key}"] = 'required';
    //     }
    //     $validator = Validator::make($request->all(), $rules);

    //     if ($validator->passes()) {
    //         foreach($request->input('name') as $key => $value) {
    //             TagList::create(['name'=>$value]);
    //         }
    //         return response()->json(['success'=>'done']);
    //     }
    //     return response()->json(['error'=>$validator->errors()->all()]);
    // }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Crud::findOrFail($id);
        return view('upload.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Crud::findOrFail($id);
        return view('upload.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'first_name'    =>  'required',
                'last_name'     =>  'required',
                'ep'            =>  'required',
                'video'         =>  'required',
                'image'         =>  'image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();      /* $image_name ใช้อ่านไฟล์ $image  */
            $image->move(public_path('images'), $image_name);                       /* เมื่อบันทึกแล้วจะนำไปเก็บที่ path images*/
        }
        else
        {
            $request->validate([
                'first_name'    =>  'required',
                'last_name'     =>  'required',
                'ep'            =>  'required',
                'video'         =>  'required'
            ]);
        }

        $form_data = array(
            'first_name'       =>   $request->first_name,
            'last_name'        =>   $request->last_name,
            'ep'               =>   $request->ep,
            'video'            =>   $request->video,
            'image'            =>   $image_name
        );
  
        Crud::whereId($id)->update($form_data);

        return redirect('crud')->with('success', 'Data is successfully updated');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Crud::findOrFail($id);
        $data->delete();

        return redirect('crud')->with('success', 'Data is successfully deleted');
    }
}
