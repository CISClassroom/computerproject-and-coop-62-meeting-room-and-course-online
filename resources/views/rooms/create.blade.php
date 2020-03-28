@extends('layouts.app-admin')

@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>เพิ่มข้อมูลห้อง</h3>
            </div>
        </div>
    </div>

    @if ($errors->any())  {{-- ช่วยเตือนเวลากรอกรายละเอียดไม่ครบ --}}
        <div class="alert alert-danger">
            <strong>อ๊ะ!!</strong> มีปัญหาบางอย่างกับข้อมูลที่คุณป้อน <br><br>
            {{-- <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul> --}}
        </div>
    @endif

    <form action="{{ route('rooms.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ชื่อห้อง:</strong>
                    <input type="text" name="name" class="form-control">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>รายละเอียดห้อง:</strong>
                    <textarea class="form-control" style="height:150px" name="detail"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">บันทึก</button>
            </div>
        </div>

    </form>

    <div align="right">
        <a href="{{ route('rooms.index') }}" class="btn btn-inverse-danger btn-fw">ย้อนกลับ</a>
    </div>

        </div>
    </div>
</div>


@endsection