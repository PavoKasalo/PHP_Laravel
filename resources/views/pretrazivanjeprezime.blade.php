@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
 <head>
        <link rel="stylesheet" type="text/css" href="css/pozadina.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 id="naslov" align="center">Pretraživanje po prezimenu pacijenta</h3><br />
   <div class="panel panel-default">
    <!--<div class="panel-heading">Pretrazivanje po prezimenu pacijenta</div>-->
    <div class="panel-body">
     <div class="form-group">
      <input type="text" name="search" id="search" class="form-control" placeholder="Search Customer Data" />
     </div>
     <div class="table-responsive">
      <h3 align="center">Ukupno pacijenata : <span id="total_records"></span></h3>
      <table class="table-responsive table-striped table-bordered">
       <thead>
        <tr>
         <th>Ime</th>
         <th>Prezime</th>
         <th>Broj_telefona</th>
         <th>Datum_rodjenja</th>
         <th>Grad</th>
         <th>Adresa</th>
         <th>Pocetak_osiguranja</th>
         <th>Zavrsetak_osiguranja</th>
         <th>Vrsta_alergije</th>
         <th>Krvna_grupa</th>
         <th>Tlak</th>
         <th>Pusenje</th>
         <th>Droge</th>
        </tr>
       </thead>
       <tbody>

       </tbody>
      </table>
     </div>
    </div>    
   </div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('pretrazivanjeprezime.action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});
</script>
@endsection