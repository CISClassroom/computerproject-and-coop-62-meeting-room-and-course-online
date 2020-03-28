@extends('layouts.app-admin')

@section('title', '| View Post')

@section('content')

                <!-- <div class="container">

                    <h1>{{ $post->title }}</h1>
                    <hr>
                    <p class="lead">{{ $post->body }} </p>
                    <hr>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id] ]) !!}
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                    @can('Edit Post')
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info" role="button">Edit</a>
                    @endcan
                    @can('Delete Post')
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    @endcan
                    {!! Form::close() !!}

                </div> -->

  <div class="col-lg-12 grid-margin stretch-card">
     <div class="card">
        <div class="card-body">
           <table class="table table-striped">

             <h1>
                 {{ $post->title }}
             </h1>
         <hr>

             <p class="lead">

                 {{ $post->body }}

             </p>
           <hr>
              <div class="template-demo">

                  {!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id] ]) !!}
   
                  <!-- <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a> -->
                  <a href="{{ URL::route('posts.index') }}" class="btn btn-primary">กลับ</a>

                        @can('Edit Post')
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info" role="button">แก้ไข</a>
                        @endcan

                         @can('Delete Post')
                         {!! Form::submit('ลบ', ['class' => 'btn btn-danger']) !!}
                         @endcan
                         {!! Form::close() !!}
                         
                    </div>
                    
                  </div>
                </div>
              </div>
              
@endsection