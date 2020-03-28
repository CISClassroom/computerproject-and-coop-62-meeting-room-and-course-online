@extends('layouts.app-admin')

@section('content')

<!-- <div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
	</div>
	<br />
	<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
	<h3>ชื่อเรื่อง - {{ $data->first_name }} </h3>
	<h3>ชื่อผู้สอน - {{ $data->last_name }}</h3>
	<div class="links"><a href="{{ $data->video }}"><h3>วีดีโอ</h3></a></div>

</div> -->

<div align="center">
<div class="card" style="width: 50rem; height=500rem;"  hi>
<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
  <div class="card-body">
    <h5 class="card-title">ชื่อเรื่อง - {{ $data->first_name }}</h5>
    <p class="card-text">ชื่อผู้สอน - {{ $data->last_name }}</p>
    <div class="links"><a href="{{ $data->video }}"><h3>วีดีโอ</h3></a></div>
	<div align="right">
		<a href="{{ route('crud.index') }}" class="btn btn-inverse-success btn-fw">กลับ</a>
	</div>
  </div>
</div>
</div>


@endsection