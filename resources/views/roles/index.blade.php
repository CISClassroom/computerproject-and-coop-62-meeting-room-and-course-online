{{-- \resources\views\roles\index.blade.php --}}
@extends('layouts.app-admin')

@section('title', '| Roles')

@section('content')

<!--<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-key"></i> Roles

    <a href="{{ route('users.index') }}" class="btn btn-default pull-right">Users</a>
    <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a></h1>
    <hr>
     <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Role</th>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($roles as $role)
                <tr>

                    <td>{{ $role->name }}</td>

                    <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                    <td>
                    <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ URL::to('roles/create') }}" class="btn btn-success">Add Role</a> 

</div>-->

 <div class="col-lg-12 grid-margin stretch-card">
     <div class="card">
         <div class="card-body">
             <table class="table table-striped">
                <thead>
                    <tr>

                        <th>รายการผู้ใช้</th>
                        <th>บทบาทผู้ใช้งาน</th>
                        <th>ตัวเลือก</th>

                    </tr>
                </thead>
            <tbody>
                      @foreach ($roles as $role)
                <tr>

                <td>
                        {{ $role->name }}
                </td>

                <td>

                        {{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}

                </td>

                        {{-- Retrieve array of permissions associated to a role and convert to string --}}

                <td>
            <div class="template-demo"> 
                <div class="btn-group" role="group" aria-label="Basic example">
                         <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-gradient-dark btn-icon-text" style="margin-right: 10px;">แก้ไข</a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
                            {!! Form::submit('ลบ', ['class' => 'btn btn-gradient-danger btn-icon-text']) !!}
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
        <a href="{{ URL::to('roles/create') }}" class="btn btn-success">Add Role</a>

              @endsection