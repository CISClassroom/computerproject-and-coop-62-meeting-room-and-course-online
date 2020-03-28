@extends('layouts.app-admin')

@section('content')
        {{-- <!-- <div class="container">

            <div class="panel panel-primary">

             <div class="panel-heading">จองห้องประชุม</div><br>

              <div class="panel-body">    

                    {!! Form::open(array('route' => 'events.add','method'=>'POST','files'=>'true')) !!}
                    <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-12">
                          @if (Session::has('success'))
                             <div class="alert alert-success">{{ Session::get('success') }}</div>
                          @elseif (Session::has('warnning'))
                              <div class="alert alert-danger">{{ Session::get('warnning') }}</div>
                          @endif

                      </div>

                      <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            {!! Form::label('event_name','Event Name:') !!}
                            <div class="">
                            {!! Form::text('event_name', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('event_name', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                        </div>
                      </div>

                      <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                          {!! Form::label('start_date','Start Date:') !!}
                          <div class="">
                          {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
                          {!! $errors->first('start_date', '<p class="alert alert-danger">:message</p>') !!}
                          </div>
                        </div>
                      </div>

                      <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                          {!! Form::label('end_date','End Date:') !!}
                          <div class="">
                          {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
                          {!! $errors->first('end_date', '<p class="alert alert-danger">:message</p>') !!}
                          </div>
                        </div>
                      </div>

                      <div class="col-xs-1 col-sm-1 col-md-1 text-center"> &nbsp;<br/>
                      {!! Form::submit('Add Event',['class'=>'btn btn-primary']) !!}
                      {{ Form::close() }}
                      </div>
                    </div>
                   {!! Form::close() !!}

             </div>

            </div>

            <div class="panel panel-primary">
              <div class="panel-heading">MY Event Details</div>
              <div class="panel-body" >
                   {!! $calendar_details->calendar() !!} 
                   
               
              </div>
            </div>

            </div>  --> --}}


  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">จองห้องประชุม</h4>
            <hr>
                <div class="panel-body">    

                    {!! Form::open(array('route' => 'events.add','method'=>'POST','files'=>'true')) !!}
                    
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      @if (Session::has('success'))
         <div class="alert alert-success">{{ Session::get('success') }}</div>
              @elseif (Session::has('warnning'))

                <div class="alert alert-danger">{{ Session::get('warnning') }}</div>
                       
              @endif

            </div>

            <div class="col-12">
                <div class="card bg-secondary">
                  <div class="card-body">
                    <form class="form-sample">
                      <div class="row">

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">{!! Form::label('event_name','หัวข้อ : ') !!}</label>
                            <div class="col-sm-9">

                                  {!! Form::text('event_name', null, ['class' => 'form-control']) !!}
                                  {!! $errors->first('event_name', '<p class="alert alert-danger">:message</p>') !!}

                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">{!! Form::label('room_name','ห้อง : ') !!}</label>
                            <div class="col-sm-9">

                                  {!! Form::text('room_name', null, ['class' => 'form-control']) !!}
                                  {!! $errors->first('room_name', '<p class="alert alert-danger">:message</p>') !!}

                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">{!! Form::label('start_date','วันที่เริ่มจอง :') !!}</label>
                            <div class="col-sm-9">

                                  {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
                                  {!! $errors->first('start_date', '<p class="alert alert-danger">:message</p>') !!}
                                  
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> {!! Form::label('t_start','เวลาเริ่ม : ') !!}</label>
                            <div class="col-sm-9">

                                  {!! Form::text('t_start', null, ['class' => 'form-control']) !!}
                                  {!! $errors->first('t_start', '<p class="alert alert-danger">:message</p>') !!}

                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">{!! Form::label('end_date','วันที่สิ้นสุด:') !!}</label>
                            <div class="col-sm-9">

                                  {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
                                  {!! $errors->first('end_date', '<p class="alert alert-danger">:message</p>') !!}

                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> {!! Form::label('t_end','เวลาสิ้นสุด : ') !!}</label>
                            <div class="col-sm-9">

                                  {!! Form::text('t_end', null, ['class' => 'form-control']) !!}
                                  {!! $errors->first('t_end', '<p class="alert alert-danger">:message</p>') !!}

                            </div>
                          </div>
                        </div>
                      </div>

                      <div align="right"> &nbsp;<br/>

                          {!! Form::submit('บันทึก',['class'=>'btn btn-dark']) !!}
                          {{ Form::close() }}
                     </div>
                  </div>

              {!! Form::close() !!}

         {{-- ------------------------------------------- --}}
             
            </div>

            
          {{-- ------------------------------------------- --}}
     
          <div class="card-body">
          <nav>
               <form method="GET" action="{{ url('searchs') }}">
                  <div class="form-group">
                      <div class="input-group">
                        <input type="search" name="word" class="form-control"  placeholder="ค้นหารายการจองห้องประชุม"  aria-label="Search" />
                        <div class="input-group-append">
                          <button class="btn btn-primary btn-fw" type="submit">ค้นหา</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </nav> 
          {{-- ------------------------------------------- --}}

              <h4 class="card-title">รายการจองห้องประชุม</h4>
              <hr>
                  <table class="table table-striped">
         <thead>
                <tr>
                      <th scope="col">ลำดับที่</th>
                      <th scope="col">หัวข้อ</th>
                      <th scope="col">ห้อง</th>
                      <th scope="col">วันที่เริ่มจอง</th>
                      <th scope="col">เวลาเริ่ม</th>
                      <th scope="col">วันที่สิ้นสุด</th>
                      <th scope="col">เวลาสิ้นสุด</th>
                  @can('Edit Post')     
                      <th scope="col">ตัวเลือก</th>  		
                    @endcan
                  </tr>
         </thead>
      <tbody>       

            <?php $i = 0; ?>
      @foreach ($events as $row)
            <?php $i++?>
          <tr>

              <th scope="row">{{$i}}</th>
              <td>{{ $row['event_name'] }}</td>
              <td>{{ $row['room_name'] }}</td>
              <td>{{ $row['start_date'] }}</td>
              <td>{{ $row['t_start'] }}</td>
              <td>{{ $row['end_date'] }}</td>
              <td>{{ $row['t_end'] }}</td>

              <td>
                
                <form method="post" class="delete_form" action="{{route('events.destroy',$row['id'])}}">

                  @can('Edit Post')
                  <a href="{{ route('events.edit', $row->id) }}" class="btn btn-outline-success btn-sm">แกไข</a>
                  @endcan

                  @can('Delete Post')
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-outline-danger btn-sm">ลบ</button>
                  @endcan

              </form>
              </td>

          </tr>
            
        @endforeach
      
             </tbody>
           </table>
          </div>
      </div>
      

@endsection

