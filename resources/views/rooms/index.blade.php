@extends('layouts.app-admin')

@section('content')

    <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h3>รายละเอียดห้องประชุม</h3>
                  <hr>
                    <div align="right">
                      
                @can('Edit Post')                 
                <a class="btn btn-success" href="{{ route('rooms.create') }}">เพิ่มห้อง</a>
                @endcan

            </div>
                    </p>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif

                    <table class="table table-striped">
                      <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>ชื่อห้อง</th>
                            <th>รายละเอียดห้อง</th>
                            @can('Edit Post')
                            <th width="280px">แก้ไข</th>
                            @endcan
                        </tr>
                      </thead>
                      
                      <tbody>
                      <?php $i = 0; ?>
                      @foreach ($rooms as $room)
                      <?php $i++?>
            <tr>
                        <td scope="row">{{$i}}</td>
                        <td>{{ $room->name }}</td>
                        <td>{{ $room->detail }}</td>
                        <td>
                        <form action="{{ route('rooms.destroy',$room->id) }}" method="POST">

                        {{-- <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a> --}}
                        @can('Edit Post')
                        <a class="btn btn-primary" href="{{ route('rooms.edit',$room->id) }}">แกไข</a>
                        @endcan

                        @can('Delete Post')
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">ลบ</button>
                        @endcan

                        </form>
                        </td>
            </tr>
        @endforeach
    </table>

    {!! $rooms->links() !!}


                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection