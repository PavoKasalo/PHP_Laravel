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
<div class="row">
    <div class="col-md-12">
     <br />
     <h3 id="naslov" align="center">Pacijenti</h3>
     <br />
     <!--
     @if($message = Session::get('success'))
     <div class="alert alert-success">
      <p>{{$message}}</p>
     </div>
     @endif
    -->
     <div align="right">
      
      <br />
      <br />
     </div>
     <div class="container box">
        <div class="panel panel-default">
        
         <div class="panel-body">
         
          <div class="table-responsive">
     <table class="table-responsive table-bordered table-striped">
      <tr>
       <<th>Ime</th>
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
      @foreach($pacijent as $row)
      <tr>
           
     <td>   {{$row['Ime']}}</td>
       <td>{{$row['Prezime']}}</td>
       <td>{{$row['Broj_telefona']}}</td>
       <td>{{$row['Datum_rodjenja']}}</td>
       <td>{{$row['Grad']}}</td>
       <td>{{$row['Adresa']}}</td>
       <td>{{$row['Pocetak_osiguranja']}}</td>
       <td>{{$row['Zavrsetak_osiguranja']}}</td>
       <td>{{$row['Vrsta_alergije']}}</td>
       <td>{{$row['Krvna_grupa']}}</td>
       <td>{{$row['Tlak']}}</td>
       <td>{{$row['Pusenje']}}</td>
       <td>{{$row['Droge']}}</td>
       <td><a href="{{action('UpdateController@edit', $row['ID_pacijenta'])}}" class="btn btn-warning">Uredi</a></td>
       <td>
        <form method="post" class="delete_form" action="{{action('UpdateController@destroy', $row['ID_pacijenta'])}}">
          {{csrf_field()}}
          <input type="hidden" name="_method" value="DELETE" />
          <button type="submit" class="btn btn-danger">Izbriši</button>
         </form>
       </td>
      </tr>
      @endforeach
     </table>
    </div>
   </div>
  </div>
</div>
</div>
</div>
</body>
   <script>
    $(document).ready(function(){
     $('.delete_form').on('submit', function(){
      if(confirm("Jeste li sigurni da želite izbrisati pacijenta?"))
      {
       return true;
      }
      else
      {
       return false;
      }
     });
    });
    </script>
@endsection