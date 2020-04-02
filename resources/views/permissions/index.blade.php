{{-- \resources\views\permissions\index.blade.php --}}
@extends('layouts.app-admin')

@section('title', '| Permissions')

@section('content')

 <!-- <div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-key"></i>Available Permissions

    <a href="{{ route('users.index') }}" class="btn btn-default pull-right">Users</a>
    <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a></h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td> 
                    <td>
                    <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ URL::to('permissions/create') }}" class="btn btn-success">Add Permission</a>

</div>  -->

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h1>
                    <i class="fa fa-key"></i>กำหนดบทบาท
                </h1>
            <table class="table table-striped">
                <thead>
                <tr>

                    <th>บทบาท</th>
                    <th>ตัวเลือก</th>

                </tr>
            </thead>
            <tbody>
                            
            @foreach ($permissions as $permission)

                <tr>
                        <td>{{ $permission->name }}</td> 

                <td>

                <div class="template-demo"> 
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">แก้ไข</a>

                        

                              <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$permission->id}}">ลบ</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{$permission->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">!! แจ้งเตือน !!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">คุณยืนยันที่จะลบ บทบาทนี่</div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
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
                <a href="{{ URL::to('permissions/create') }}" class="btn btn-success">เพิ่มบทบาท</a> 

    @endsection