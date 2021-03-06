{{-- \resources\views\users\index.blade.php --}}
@extends('layouts.app-admin')

@section('title', '| Users')

@section('content')

<!--<div class="col-lg-10 col-lg-offset-1">
     <h1><i class="fa fa-users"></i> User Administration <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a>
    <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a></h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date/Time Added</th>
                    <th>User Roles</th>
                    <th>Operations</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>

                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                    <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                    <td>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>

</div> -->

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

           <h1 class="card-title">การจัดการผู้ใช้</h1>

         <table class="table table-striped">
            <thead>
              <tr>

                 <th>ชื่อ</th>
                 <th>อีเมล</th>
                 <th>วัน-เวลา</th>
                 <th>บทบาทผู้ใช้</th>
                 <th>ตัวเลือก</th>

              </tr>
          </thead>
        <tbody>

               @foreach ($users as $user)
               
          <tr>

                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}

          <td>
             <div class="template-demo">
                <div class="btn-group" role="group" aria-label="Basic example">

                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">แก้ไข</a>

                      <!-- {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                      {!! Form::submit('ลบ', ['class' => 'btn btn-danger']) !!}
                      {!! Form::close() !!} -->

                      <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$user->id}}">ลบ</button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">!! แจ้งเตือน !!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">คุณยืนยันที่จะลบ ชื่อผู้ใช้งานนี่</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                        {!! Form::submit('ลบ', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </div>
                    </div>
                </div>
                </div>


              </div>
              </div>

           </td>
           </tr>
                 @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
      <a href="{{ route('users.create') }}" class="btn btn-success">เพิ่มผู้ใช้งาน</a>

@endsection