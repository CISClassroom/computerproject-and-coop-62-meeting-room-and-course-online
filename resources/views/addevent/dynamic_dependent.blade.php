@extends('layouts.app-admin')

@section('content')
  {{-- <br />
  <div class="container box">
   <h3 align="center">Ajax Dynamic Dependent Dropdown in Laravel</h3><br />
   <div class="form-group">
    <select name="name" id="name" class="form-control input-lg dynamic" data-dependent="state">
     <option value="">เลือกห้องประชุม</option>
     @foreach($country_list as $name)
     <option value="{{ $name->name}}">{{ $name->name }}</option>
     @endforeach
    </select>
   </div>
   <br />


   <div class="form-group">
    <select name="state" id="state" class="form-control input-lg dynamic" data-dependent="city">
     <option value="">Select State</option>
    </select>
   </div>
   <br />
   <div class="form-group">
    <select name="city" id="city" class="form-control input-lg">
     <option value="">Select City</option>
    </select>
   </div> 


   {{ csrf_field() }}
   <br />
   <br />
  </div> --}}

@endsection