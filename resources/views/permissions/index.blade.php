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

                        {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
                        {!! Form::submit('ลบ', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}

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
                <a href="{{ URL::to('permissions/create') }}" class="btn btn-success">Add Permission</a> 

    @endsection