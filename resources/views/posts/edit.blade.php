@extends('layouts.app-admin')

@section('title', '| Edit Post')

@section('content')

<!-- <div class="row">

    <div class="col-md-8 col-md-offset-2">

        <h1>Edit Post</h1>
        <hr>
            {{ Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PUT')) }}
            <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', null, array('class' => 'form-control')) }}<br>

            {{ Form::label('body', 'Post Body') }}
            {{ Form::textarea('body', null, array('class' => 'form-control')) }}<br>

            {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}
    </div>
    </div>
</div> -->

    


<div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">

                  <h1>
                    แก้ไขโพส
                    </h1>
            <hr>

            {{ Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PUT')) }}

            <div class="form-group">

                {{ Form::label('title', 'หัวข้อ') }}
                {{ Form::text('title', null, array('class' => 'form-control')) }}
            <br>

                {{ Form::label('body', 'รายละเอียด') }}
                {{ Form::textarea('body', null, array('class' => 'form-control')) }}
            <br>

                {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

                {{ Form::close() }}

            </div>
          </div>
      </div>
    </div>

    @endsection