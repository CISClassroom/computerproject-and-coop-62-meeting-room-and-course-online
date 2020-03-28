@extends('layouts.app-admin')

@section('content')

    <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>แก้ไข ข้อมูลห้อง</h3>
            </div>
            <hr>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('rooms.update',$room->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ชื่อห้อง:</strong>
                    <input type="text" name="name" value="{{ $room->name }}" class="form-control">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>รายละเอียดห้อง:</strong>
                    <textarea class="form-control" style="height:150px" name="detail">{{ $room->detail }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">บันทึก</button>
            </div>
        </div>

    </form>


                  </div>
                </div>
              </div>
@endsection