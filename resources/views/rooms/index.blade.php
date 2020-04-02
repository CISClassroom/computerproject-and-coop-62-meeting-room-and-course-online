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
                        <!-- <button type="submit" class="btn btn-danger">ลบ</button> -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-gradient-danger btn-icon-text" data-toggle="modal" data-target="#exampleModal">ลบ</button>

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
    <div class="modal-body">คุณยืนยันที่จะลบ รายการห้องประชุมนี่</div>
    <div class="modal-footer">
        <button type="button" class="btn btn-gradient-secondary btn-icon-text" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" class="btn btn-danger">ลบ</button>
    </div>
    </div>
</div>
</div>


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