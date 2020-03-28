@extends('layouts.app-admin')

@section('content')
<br />
  <div class="container box">
   <h3 align="center">Ajax Autocomplete Textbox in Laravel using JQuery</h3><br />
   
   <div class="form-group">
    <input type="text" name="coure_name" id="coure_name" class="form-control input-lg" placeholder="Enter Country Name" />
    <div id="countryList">
    </div>
   </div>
   {{ csrf_field() }}
  </div>


<script>
$(document).ready(function(){

 $('#coure_name').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#countryList').fadeIn();  
                    $('#countryList').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#coure_name').val($(this).text());  
        $('#countryList').fadeOut();  
    });  

});
</script>
@endsection