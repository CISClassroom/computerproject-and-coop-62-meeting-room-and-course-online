@extends('layouts.app-admin')

@section('content')
        

  
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">แก้ไขการจองห้องประชุม</h4>
            <hr>
                <div class="panel-body">    

                    <form method="post" action="{{ route('courses.update', $course['id']) }}">
                      @csrf
                      <input value={{$course['id']}} name='id' type="hidden">

              <div class="col-12">
                <div class="card bg-secondary">
                  <div class="card-body">
                    <form class="form-sample">
                      <div class="row">

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">  {!! Form::label('coure_name','ชื่อคอร์ส : ') !!} </label>
                            <div class="col-sm-9">

                                   {!! Form::text('coure_name', $course['coure_name'], ['class' => 'form-control']) !!}
                                   {!! $errors->first('coure_name', '<p class="alert alert-danger">:message</p>') !!}

                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> {!! Form::label('coure_name_dr','ผู้สอน : ') !!} </label>
                            <div class="col-sm-9">

                                   {!! Form::text('coure_name_dr', $course['coure_name_dr'], ['class' => 'form-control']) !!}
                                   {!! $errors->first('coure_name_dr', '<p class="alert alert-danger">:message</p>') !!}

                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> {!! Form::label('coure_day','วันที่อบรม :') !!} </label>
                            <div class="col-sm-9">

                                   {!! Form::date('coure_day', $course['coure_day'], ['class' => 'form-control']) !!}
                                   {!! $errors->first('coure_day', '<p class="alert alert-danger">:message</p>') !!}
                                  
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> {!! Form::label('coure_time','เวลาอบรม : ') !!} </label>
                            <div class="col-sm-9">

                            {!! Form::text('coure_time', $course['coure_time'], ['class' => 'form-control']) !!}
                            {!! $errors->first('coure_time', '<p class="alert alert-danger">:message</p>') !!}

                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> {!! Form::label('coure_number','จำนวนที่รับ : ') !!} </label>
                            <div class="col-sm-9">

                                   {!! Form::text('coure_number', $course['coure_number'], ['class' => 'form-control']) !!}
                                   {!! $errors->first('coure_number', '<p class="alert alert-danger">:message</p>') !!}

                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> {!! Form::label('coure_room','สถานที่ : ') !!} </label>
                            <div class="col-sm-9">

                                   {!! Form::text('coure_room', $course['coure_room'], ['class' => 'form-control']) !!}
                                   {!! $errors->first('coure_room', '<p class="alert alert-danger">:message</p>') !!}

                            </div>
                          </div>
                        </div>
                      </div>

                      <div align="right"> &nbsp;<br/>

                         {!! Form::submit('Update',['class'=>'btn btn-dark']) !!}
                         {{ Form::close() }}

                    </div>
               </div>

              {!! Form::close() !!}

              </div>
           </div>    
      </div>
   </div>
</div>
@endsection