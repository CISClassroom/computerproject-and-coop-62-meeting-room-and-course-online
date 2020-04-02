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
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">ลบ</button>

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
      <div class="modal-body">คุณยืนยันที่จะลบ ข่าวสารนี่</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        {!! Form::submit('ลบ', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

                         
                         @endcan   
                    </div>
                    
                  </div>
                </div>
              </div>
              
@endsection