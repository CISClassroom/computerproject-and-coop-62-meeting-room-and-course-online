@extends('layouts.app-admin')

@section('title', '| Edit Permission')

@section('content')

<!-- <div class='col-lg-4 col-lg-offset-4'>

    <h1><i class='fa fa-key'></i> Edit {{$permission->name}}</h1>
    <br>
    {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with permission data --}}

    <div class="form-group">
        {{ Form::label('name', 'Permission Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>
    <br>
    {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div> -->

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <table class="table table-striped">

                <h1>
                    <i class='fa fa-key'></i> แก้ไขบทบาท {{$permission->name}}
                </h1>
        <br>
                    {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with permission data --}}

            <div class="form-group">

                    {{ Form::label('name', 'ชื่อสิทธิ์ ') }}
                    {{ Form::text('name', null, array('class' => 'form-control')) }}

            </div>
        <br>
                    {{ Form::submit('แก้ไข', array('class' => 'btn btn-primary')) }}
                    {{ Form::close() }}

            </div>
        </div>
    </div>

    @endsection