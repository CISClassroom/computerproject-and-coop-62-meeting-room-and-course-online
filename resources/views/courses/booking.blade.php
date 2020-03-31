@extends('layouts.app-admin')

@section('content')

<!-- <h4 class="card-title">รายการจองคอร์สอบรม</h4>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ชื่อ-นามสกุล</th>
                <th>คอร์สอบรม</th>
                <th>หมายเหตุ</th>
            </tr>
           </thead>
           <tbody>

        @foreach($bookingRoom as $row)
            <tr>
                <td>{{ auth()->user()->name }}</td>
                <td>{{ $row->coure_name }}</td>
               </tr>
              @endforeach
              </tbody>
          </table>
</div> -->
   

   
 {{-- ************************************************************************************************ --}}

{{-- <div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <form class="forms-sample">
                <h4 class="card-title">รายการจองคอร์สอบรม</h4> --}}
                
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                      <h3>รายละเอียดห้องประชุม</h3>
                      <hr>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ลำดับ</th>
                                <th scope="col">ชื่อ</th>
                                <th>ชื่อคอร์สคอร์สอบรม</th>
                                @can('Delete Post')
                                <th>ตัวเลือก</th>
                                @endcan
                            </tr>
                        </thead>

                        <tbody>
        <?php $i = 0; ?>
        @foreach($bookingRoom as $row)
        <?php $i++?>

                        <tr>
                            <td scope="row">{{$i}}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->coure_name }}</td>

                            @can('Edit Post')
                            <td>
                            <form method="post" action="{{route('bookingRoom.destroy')}}">
                                @csrf
                                <input type="hidden" name="id" value={{$row->id}}>
                                <button type="submit" class="btn btn-outline-danger btn-sm">ลบ</button>
                            </form>
                            </td>
                            @endcan

                        </tr>                        
                        @endforeach
                        </tbody>
                        
                    </table>
                    <br>
                    @can('Edit Post')
                    <div class="text-center">{!! $bookingRoom->links() !!}</div>
                    @endcan
                    
                   

                </div>
                    </form>
                  </div>
                </div>
              </div>
              
                </tbody>

               

                    </table>
                  </div>
                </div>
              </div>
              {{-- {!! $bookingRoom->links() !!} --}}


              
                   
             
@endsection