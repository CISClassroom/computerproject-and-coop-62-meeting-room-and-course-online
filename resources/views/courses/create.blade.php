@extends('layouts.app-admin')

@section('content')

{{-- <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">จองคอร์ส</h4>
            <hr>
            <div class="panel-body"> --}}

                <!-- {{-- <form action="{{ route('courses.store') }}" method="POST">
                    @csrf
                    <input value={{$course['id']}} name='id' type="hidden"> --}} -->

                    {{-- <div class="row">
                        <div class="col-xs-12 col-sm-12 ">
                            <div class="form-group">
                                <strong>ชื่อ :</strong>
                                <p type="text" class="form-control">{{ auth()->user()->name }}</p>

                            </div>
                        </div>
                        
                        
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>ชื่อคอร์ส :</strong>
                                    <input type="text" name="courses_id" class="form-control">
                                </div>
                            </div>

                        
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>หมายเหตุ :</strong>
                                    <input type="text" name="description" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-success">บันทึก</button>
                        </div>
                    </div>
            
                </form>      --}}

@endsection