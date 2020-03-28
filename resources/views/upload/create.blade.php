@extends('layouts.app-admin')

@section('content')

			<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
					  
				@if($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<div align="right">
					<a href="{{ route('crud.index') }}" class="btn btn-gradient-danger">Back</a>
				</div>

				  <div class="template">
					  <h3>สร้างคอร์สเรียน</h3>
					  <br />
					</div>
					<form method="post" action="{{ route('crud.store') }}" enctype="multipart/form-data">

						@csrf
						<div class="form-group">
							<label class="col-md-4 text-right" for="exampleFormControlTextarea1">Enter First Name</label>
							<div class="col-md-8">
								<textarea type="text" name="first_name" class="form-control input-lg" id="exampleFormControlTextarea1" rows="3" ></textarea>
							</div>
						</div>
						<br />
						<br />
						<br />
						<div class="form-group">
							<label class="col-md-4 text-right">Enter Last Name</label>
							<div class="col-md-8">
							<textarea type="text" name="last_name" class="form-control input-lg" id="exampleFormControlTextarea1" rows="3" ></textarea>
							</div>
						</div>
						<br />
						<br />
						<br />
						<div class="form-group">
							<label class="col-md-4 text-right">บทเรียน</label>
							<div class="col-md-8">
								<input type="text" name="ep" class="form-control input-lg" />
							</div>
						</div>
						<br />
						<br />
						<br />
						<div class="form-group">
							<label class="col-md-4 text-right">วีดีโอ</label>
							<div class="col-md-8">
								<input type="text" name="video" class="form-control input-lg" />
							</div>
						</div>
						<br />
						<br />
						<br />
						
					
						<div class="form-group">
							<label>File upload</label>
								<input  type="file" name="image" class="file-upload-default">
								<div class="input-group col-xs-12">
									<input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
									<span class="input-group-append">
										<button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
									</span>
								</div>
						</div>
					
					
						<br /><br /><br />
						<div class="form-group text-center">
							<input type="submit" name="add" class="btn btn-gradient-success btn-lg btn-block" value="Add" />
						</div>
					
					</form>
					
                  </div>
                </div>
    		</div>

@endsection



