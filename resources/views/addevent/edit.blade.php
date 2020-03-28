@extends('layouts.app-admin')

@section('content')
        
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">แก้ไขการจองห้องประชุม</h4>
            <hr>
                <div class="panel-body">    

                    {{-- {{ Form::model($event, array('route' => array('events.update', $event['id']), 'method' => 'post')) }} --}}
                    <form method="post" action="{{ route('events.update', $event['id']) }}">
                      @csrf
                      <input value={{$event['id']}} name='id' type="hidden">

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      @if (Session::has('success'))
         <div class="alert alert-success">{{ Session::get('success') }}</div>
              @elseif (Session::has('warnning'))

                <div class="alert alert-danger">{{ Session::get('warnning') }}</div>
                       
              @endif

            </div>
            <div class="col-12">
                <div class="card bg-secondary ">
                  <div class="card-body">
                    <form class="form-sample">
                      <div class="row">

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> {!! Form::label('event_name','หัวข้อ : ') !!} </label>
                            <div class="col-sm-9">

                                {!! Form::text('event_name', $event['event_name'], ['class' => 'form-control']) !!}
                                {!! $errors->first('event_name', '<p class="alert alert-danger">:message</p>') !!}
                                
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">{!! Form::label('room_name','ห้อง : ') !!} </label>
                            <div class="col-sm-9">

                                {!! Form::text('room_name', $event['room_name'], ['class' => 'form-control']) !!}
                                {!! $errors->first('room_name', '<p class="alert alert-danger">:message</p>') !!}
                           
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">{!! Form::label('start_date','วันที่เริ่มจอง:') !!} </label>
                            <div class="col-sm-9">

                                  {!! Form::date('start_date', $event['start_date'], ['class' => 'form-control']) !!}
                                  {!! $errors->first('start_date', '<p class="alert alert-danger">:message</p>') !!}
                            
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">  {!! Form::label('t_start','เวลาเริ่ม : ') !!} </label>
                            <div class="col-sm-9">

                                    {!! Form::text('t_start', $event['t_start'], ['class' => 'form-control']) !!}
                                    {!! $errors->first('t_start', '<p class="alert alert-danger">:message</p>') !!}

                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">{!! Form::label('end_date','วันที่สิ้นสุด:') !!} </label>
                            <div class="col-sm-9">

                                      {!! Form::date('end_date', $event['end_date'], ['class' => 'form-control']) !!}
                                      {!! $errors->first('end_date', '<p class="alert alert-danger">:message</p>') !!}

                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">  {!! Form::label('t_end','เวลาสิ้นสุด : ') !!} </label>
                            <div class="col-sm-9">

                                      {!! Form::text('t_end', $event['t_end'], ['class' => 'form-control']) !!}
                                      {!! $errors->first('t_end', '<p class="alert alert-danger">:message</p>') !!}

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