@extends('admin.adminLayout.main')
@section('title', 'Home')


@section('crumb')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{url('admin')}}"><i class="material-icons"></i> {{ __('Home') }} </a>
    </li>
    <li class="breadcrumb-item active" aria-current="page"> {{ __('Rounds') }} </li>
  </ol>
</nav>

@endsection

@section('content')
<div class="row">

  <div class="col-md-12">


    <div class="ms-panel">
      <div class="ms-panel-header d-flex justify-content-between">
        <h6>Round</h6>
        <a href="{{ route('round.create') }}" class="btn btn-dark"> add Round </a>
      </div>
      <div id="state" class="ms-panel-body">
        @include('admin.rounds.preIndex')
      </div>
    </div>




  </div>

</div>
</div>
@endsection
@section('scripts')
<script>
  function myFunction() {
    // var input, filter, table, tr, td, i, txtValue;
    // input = document.getElementById("myInput");
    // filter = input.value.toUpperCase();
    // table = document.getElementById("courseEvalRound");
    // tr = table.getElementsByTagName("tr");
    // for (i = 0; i < tr.length; i++) {
    //   td = tr[i].getElementsByTagName("td")[2];
    //   if (td) {
    //     txtValue = td.textContent || td.innerText;
    //     if (txtValue.toUpperCase().indexOf(filter) > -1) {
    //       tr[i].style.display = "";
    //     } else {
    //       tr[i].style.display = "none";
    //     }
    //   }       
    // }
    var nameD= $('#myInput').val();

    $.ajax({
      url: "{{route('dynamic_round.fetch')}}",
      method: "get",
      data: {
        name: $('#myInput').val(),


      },
      success: function(result) {

        $('#state').html(result);
        alert(name);
        $('#myInput').val(nameD);
      }

    })

  }

  $(document).ready(function() {



//pagination
$(document).on('click', '#category .pagination a', function(event){
  event.preventDefault(); 
  var page = $(this).attr('href').split('page=')[1];
 
  fetch_data(page);
 });
 
 
 function fetch_data(page)
 {
  var nameD= $('#myInput').val();

  $.ajax({
	
    url:"{{ URL::to('fetch_dataPage') }}?page="+page,
	data:
		{
		
		  name: $('#myInput').val(),
		
        } ,
   
   success:function(result)
   {
    $('#state').html(result);
        
        $('#myInput').val(nameD);
   }
  });
 }
});
</script>

@endsection