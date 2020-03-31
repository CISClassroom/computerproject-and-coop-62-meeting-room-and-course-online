@extends('layouts.app-admin')

@section('content')

  <!-- <div align="right">
	<a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
</div>
<br />

<form method="post" action="{{ route('crud.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')
	<div class="form-group">
		<label class="col-md-4 text-right">Enter First Name</label>
		<div class="col-md-8">
			<input type="text" name="first_name" value="{{ $data->first_name }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Last Name</label>
		<div class="col-md-8">
			<input type="text" name="last_name" value="{{ $data->last_name }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Select Profile Image</label>
		<div class="col-md-8">
			<input type="file" name="image" />
			<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
			<input type="hidden" name="hidden_image" value="{{ $data->image }}" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>  -->
 
<div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
				  <div class="template">
                      <h1>แก้ไขรายละเอียด</h1>
					</div>
<hr>
					
<br/>
	<form method="post" action="{{ route('crud.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')
	<div class="form-group">
		<label class="col-md-4 text">แก้ไขชื่อเรื่อง</label>
		<div class="col-md-8">
			<input type="text" name="first_name" value="{{ $data->first_name }}" class="form-control input-lg" />
		</div>
	</div>
	<br/>
	<div class="form-group">
		<label class="col-md-4 text">แก้ไขชื่อผู้สอน</label>
		<div class="col-md-8">
			<input type="text" name="last_name" value="{{ $data->last_name }}" class="form-control input-lg" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-4 text">บทเรียน</label>
		<div class="col-md-8">
			<input type="text" name="ep" value="{{ $data->ep }}" class="form-control input-lg" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-4 text">วีดีโอเรียน</label>
		<div class="col-md-8">
			<input type="text" name="video" value="{{ $data->video }}" class="form-control input-lg" />
		</div>
	</div>

	<hr>
	<div class="form-group">
		<label class="col-md-4 text">แก้ไขไฟล์รูปภาพ</label>
		<div class="col-md-8">
			<input type="file" name="image" />
			<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
			<input type="hidden" name="hidden_image" value="{{ $data->image }}" />
		</div>
	</div>
	<br /><br /><br />
	<div align="right">
		<div class="form-group text-right">
			<input type="submit" name="edit" class="btn btn-inverse-success btn-fw" value="แก้ไข" />
			<a href="{{ route('crud.index') }}" class="btn btn-inverse-danger btn-fw">กลับ</a>
		</div>
	</div>

</form> 


                    </div>
                  </div>
                </div>
              </div>

  

@endsection



