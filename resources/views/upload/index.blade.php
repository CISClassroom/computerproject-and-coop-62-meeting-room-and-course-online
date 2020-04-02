@extends('layouts.app-admin')

@section('content')

<!-- <div align="right">
	<a href="{{ route('crud.create') }}" class="btn btn-success btn-sm">Add</a>
</div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered table-striped">
	<tr>
		<th width="50%">Image</th>
		<th width="35%">First Name</th>
		<th width="35%">Last Name</th>
		<th width="30%">Action</th>
	</tr>
	@foreach($data as $row)
		<tr>
			<td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
			<td>{{ $row->first_name }}</td>
			<td>{{ $row->last_name }}</td>
			<td>
				
				<form action="{{ route('crud.destroy', $row->id) }}" method="post">
					<a href="{{ route('crud.show', $row->id) }}" class="btn btn-primary">Show</a>
					<a href="{{ route('crud.edit', $row->id) }}" class="btn btn-warning">Edit</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
	@endforeach
</table>
{!! $data->links() !!} -->




<div class="col-lg-12 grid-margin stretch-card">
	<div class="card">
	  <div class="card-body">
		<h4 class="card-title">VDO คอร์สเรียน</h4>             

		@can('Edit Post')
		<div align="right">
			<a href="{{ route('crud.create') }}" class="btn btn-gradient-info btn-lg">เพิ่มVDO</a>
			@endcan
		</div>
		<br />
		@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
		@endif

		<table class="table table-bordered ">
		  <thead>
			<tr>
			   <th width="35%" >รูปภาพ</th>
				<th width="35%">ชื่อเรื่อง</th>
				<th width="35%">ชื่อผู้สอน</th>
				<th width="35%">บทเรียน</th>
				<th width="35%">วีดีโอเรียน</th>
				<th width="35%">ตัวเลือก</th>
			</tr>
		  </thead>
		  <tbody>
			@foreach($data as $row)
			<tr>    
				<td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="mr-2" alt="image"></td>
				<td>{{ mb_substr($row->first_name,0,20).'...' }}</td>
				<td>{{ mb_substr($row->last_name,0,20).'...' }}</td>
				<td>{{ ($row->ep) }}</td>
				<td>{{ mb_substr($row->video,0,20).'...' }}</td>
			
			<td>
			<form action="{{ route('crud.destroy', $row->id) }}" method="post">
				<a href="{{ route('crud.show', $row->id) }}" class="btn btn-outline-primary btn-sm">แสดง</a>

				@can('Edit Post')
				<a href="{{ route('crud.edit', $row->id) }}" class="btn btn-outline-success btn-sm">แก้ไข</a>
				@endcan

				@can('Delete Post')
				@csrf
				@method('DELETE')
				<!-- <button type="submit" class="btn btn-outline-danger btn-sm">ลบ</button> -->
				<!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#exampleModal">ลบ</button>

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
                      <div class="modal-body">คุณยืนยันที่จะลบ รายการVDOคอร์สเรียน</div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">ยกเลิก</button>
                        <button type="submit" class="btn btn-outline-danger btn-sm">ลบ</button>
                      </div>
                    </div>
                  </div>
                </div>
				@endcan

			</form>
			</td>
			@endforeach
			</tr>
		  </tbody>

		</table>
		<br><br>
		{!! $data->links() !!} 
	  </div>
	</div>
  </div>
  

  
			  
@endsection