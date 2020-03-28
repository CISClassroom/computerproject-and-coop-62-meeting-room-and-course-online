@extends('layouts.app-admin')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">รายการจองห้องประชุม</h4>
                <table class="table table-striped">
        <thead>
                <tr>
                            <th scope="col">ลำดับที่</th>
                            <th scope="col">Title</th>
                            <th scope="col">Start-Time</th>
                            <th scope="col">Start-End</th>
                            <th scope="col">Operation</th>
                </tr>
        </thead>
    <tbody>           
        <?php $i = 0; ?>

           @foreach ($events as $row)
              <?php $i++?>

              <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$row['event_name']}}</td>
                <td>{{$row['start_date']}}</td>
                <td>{{$row['end_date']}}</td>
              </tr>

    @endforeach

            </tbody>
         </table>
      </div>
   </div>
</div>

    @endsection


    