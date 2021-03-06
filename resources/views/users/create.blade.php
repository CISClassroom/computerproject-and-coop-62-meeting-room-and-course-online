{{-- \resources\views\users\create.blade.php --}}
@extends('layouts.app-admin')

@section('title', '| Add User')

@section('content')

 <!-- <div class='col-lg-4 col-lg-offset-4'>

    <h1><i class='fa fa-user-plus'></i> Add User</h1>
    <hr>

    {{ Form::open(array('url' => 'users')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', '', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', '', array('class' => 'form-control')) }}
    </div>

    <div class='form-group'>
        @foreach ($roles as $role)
            {{ Form::checkbox('roles[]',  $role->id ) }}
            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

        @endforeach
    </div>

    <div class="form-group">
        {{ Form::label('password', 'Password') }}<br>
        {{ Form::password('password', array('class' => 'form-control')) }}

    </div>

    <div class="form-group">
        {{ Form::label('password', 'Confirm Password') }}<br>
        {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

    </div>

    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>  -->

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
       <div class="card-body">
           <table class="table table-striped">
                   
           <h1>

               <i class='fa fa-user-plus'></i> เพิ่มผู้ใช้งาน

           </h1>
         <hr>

            {{ Form::open(array('url' => 'users')) }}

        <div class="form-group">

            {{ Form::label('name', 'ชื่อผู้ใช้งาน') }}
            {{ Form::text('name', '', array('class' => 'form-control')) }}

        </div>

        <div class="form-group">

            {{ Form::label('email', 'Email ผู้ใช้งาน') }}
            {{ Form::email('email', '', array('class' => 'form-control')) }}

        </div>

        กำหนดสิทธิ์<br>
        <div class='form-group'>

            @foreach ($roles as $role)
                {{ Form::checkbox('roles[]',  $role->id ) }}
                {{ Form::label($role->name, ucfirst($role->name)) }}<br>

            @endforeach

        </div>

        <div class="form-group">

            {{ Form::label('password', 'รหัสผ่าน') }}<br>
            {{ Form::password('password', array('class' => 'form-control')) }}

        </div>

        <div class="form-group">

            {{ Form::label('password', 'ใส่รหัสผ่านย้ำอีกครั้ง') }}<br>
            {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

        </div>

            {{ Form::submit('เพิ่ม', array('class' => 'btn btn-primary')) }}
            {{ Form::close() }}
        </div>
    </div>
</div>


@endsection