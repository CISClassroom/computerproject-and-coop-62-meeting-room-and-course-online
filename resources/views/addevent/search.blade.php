@extends('layouts.app-admin')

@section('content')

<br><br><br><center>

  <div align="right">
    <a href="{{ action('EventController@show') }}" class="btn btn-inverse-danger btn-fw">Back</a>
  </div>

      <nav>
        <form method="GET" action="{{ url('searchs') }}">

        <div class="form-group row nav justify-content-center ">
              <div class="col-sm-3 ">
                <input type="search" name="word" class="form-control" placeholder="ค้นหาการจองห้องประชุม" value="{{ old('search') }}">
            </div>
          <button class="btn btn-primary col-sm-1" type="submit">
            ค้นหา
          </button>
      </div>
        </form>
      </nav>
    </center><br><br>

    <div class="row d-flex justify-content-center ">
        <div class="col-8">



    @if($event_name!=null)
    <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-body">
    <div class="container">
      <h4>รายละเอียดที่พบ</h4>
      <table class="table table-striped">
        <thead>
          <center>
            <tr>
                <th scope="col">ลำดับที่</th>
                <th scope="col">Title</th>
                {{-- <th scope="col">Start-Time</th>
                <th scope="col">Start-End</th> --}}
            </tr>
          </center>
        </thead>
        <tbody> <?php $i = 0; ?>
            
          @foreach ($word as $key)
    
                <?php $i++?>
          <tr>
                  <th scope="row">{{$i}}</th>
                  <td>{{ $key->event_name }}</td>
                  {{-- <td>{{ $key['start_date'] }}</td>
                  <td>{{ $key['end_date']   }}</td> --}}
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  </div></div>
  @endif
  
      </div>
    </div>


@endsection