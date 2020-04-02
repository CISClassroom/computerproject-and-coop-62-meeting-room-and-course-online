@extends('layouts.app-admin')

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">

        @can('Create Post')

        <div class="card-body">
            <h4 class="card-title">จองคอร์สอบรม</h4>
            <hr>
            <div class="panel-body">

                {!! Form::open(array('route' => 'courses.add','method'=>'POST','files'=>'true')) !!}
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                        @elseif (Session::has('warnning'))

                        <div class="alert alert-danger">{{ Session::get('warnning') }}</div>

                        @endif

                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-sample">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label"> {!!
                                                    Form::label('coure_name','ชื่อคอร์ส : ') !!} </label>
                                                <div class="col-sm-9">

                                                    {!! Form::text('coure_name', null, ['class' => 'form-control']) !!}
                                                    {!! $errors->first('coure_name', '<p class="alert alert-danger">
                                                        :message</p>') !!}

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label"> {!!
                                                    Form::label('coure_name_dr','ผู้สอน : ') !!} </label>
                                                <div class="col-sm-9">

                                                    {!! Form::text('coure_name_dr', null, ['class' => 'form-control'])
                                                    !!}
                                                    {!! $errors->first('coure_name_dr', '<p class="alert alert-danger">
                                                        :message</p>') !!}

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label"> {!!
                                                    Form::label('coure_day','วันที่อบรม :') !!} </label>
                                                <div class="col-sm-9">

                                                    {!! Form::date('coure_day', null, ['class' => 'form-control']) !!}
                                                    {!! $errors->first('coure_day', '<p class="alert alert-danger">
                                                        :message</p>') !!}

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label"> {!!
                                                    Form::label('coure_time','เวลาอบรม : ') !!} </label>
                                                <div class="col-sm-9">

                                                    {!! Form::text('coure_time', null, ['class' => 'form-control']) !!}
                                                    {!! $errors->first('coure_time', '<p class="alert alert-danger">
                                                        :message</p>') !!}

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label"> {!!
                                                    Form::label('coure_number','จำนวนที่รับ : ') !!} </label>
                                                <div class="col-sm-9">

                                                    {!! Form::text('coure_number', null, ['class' => 'form-control'])
                                                    !!}
                                                    {!! $errors->first('coure_number', '<p class="alert alert-danger">
                                                        :message</p>') !!}

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label"> {!!
                                                    Form::label('coure_room','สถานที่ : ') !!} </label>
                                                <div class="col-sm-9">

                                                    {!! Form::text('coure_room', null, ['class' => 'form-control']) !!}
                                                    {!! $errors->first('coure_room', '<p class="alert alert-danger">
                                                        :message</p>') !!}

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div align="right"> &nbsp;<br /> &nbsp;<br />

                                        {!! Form::submit('บันทึก',['class'=>'btn btn-dark']) !!}
                                        {{ Form::close() }}

                                    </div>
                            </div>

                            {!! Form::close() !!}
                            @endcan


                            {{-----------------------------------------------}}

                            <div class="card-body">
                                <h4 class="card-title">รายการคอร์สอบรม</h4>
                                <hr>

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">ลำดับที่</th>
                                            <th scope="col">ชื่อคอร์ส</th>
                                            <th scope="col">ผู้สอน</th>
                                            <th scope="col">วันที่อบรม</th>
                                            <th scope="col">เวลาอบรม</th>
                                            <th scope="col">จำนวนที่รับ</th>
                                            <th scope="col">สถานที่</th>
                                            <th scope="col">ตัวเลือก</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 0; ?>
                                        @foreach ($courses as $row)
                                        <?php $i++?>
                                        <tr>
                                            <th scope="row">{{$i}}</th>
                                            <td id="cname">{{ $row['coure_name'] }}</td>
                                            <td id="tname">{{ $row['coure_name_dr'] }}</td>
                                            <td>{{ $row['coure_day'] }}</td>
                                            <td>{{ $row['coure_time'] }}</td>
                                            <td>{{ $row['coure_number'] }}</td>
                                            <td>{{ $row['coure_room'] }}</td>
                                            <td>

                                            <form method="post"  action="{{ route('bookingRoom.save') }}">
                                            @csrf
                                            <input type="hidden" name="users_id" value={{Auth::user()->id}}>
                                            <input type="hidden" name="courses_id" value={{ $row['id'] }}>
                                            <button type="submit" class="btn btn-outline-success btn-sm">จอง</button>
                                            </form> <br>
                                                
                                                <form method="post" class="delete_form" action="{{route('courses.destroy',$row['id'])}}">
                                                @can('Edit Post')
                                                <a href="{{ route('courses.edit', $row->id) }}"
                                                    class="btn btn-outline-success btn-sm">แก้ไข้</a>

                                                @method('DELETE')
                                                @csrf
                                                <!-- <button type="submit" class="btn btn-outline-danger btn-sm">ลบ</button> -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#exampleModal">ลบ</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">!! แจ้งเตือน !!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">คุณยืนยันที่จะลบ รายการชื่อคอร์สอบรมนี่</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" class="btn btn-outline-danger btn-sm">ลบ</button>
      </div>
    </div>
  </div>
</div>
                                                @endcan
                                                </form>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <br>
                                <div class="text-center">

                                    {!! $courses->links() !!}

                                </div>
                            </div>
                        </div>
                    </div>

 @endsection
