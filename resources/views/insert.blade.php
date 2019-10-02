@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
 <head>
 <link rel="stylesheet" type="text/css" href="css/pozadina.css">
 </head>
 <body>
<div class="row">
<div class="col-md-12">
 <br />
 <h3 id="naslov" aling="center">Insert</h3>
 <br />
 @if(count($errors) > 0)
 <div class="alert alert-danger">
  <ul>
  @foreach($errors->all() as $error)
   <li>{{$error}}</li>
  @endforeach
  </ul>
 </div>
 @endif
 @if(\Session::has('success'))
 <!--<div class="alert alert-success">
    <p>{{ \Session::get('success') }}</p>
   </div>-->
 @endif

 <form method="post" action="{{url('/insert')}}">
  {{csrf_field()}}
  <div class="form-group">
   <input type="text" name="Ime" class="form-control" placeholder="Ime" />
  </div>
  <div class="form-group">
   <input type="text" name="Prezime" class="form-control" placeholder="Prezime" />
  </div>
  <div class="form-group">
    <input type="text" name="Broj_telefona" class="form-control" placeholder="Broj_telefona" />
   </div>
   <div class="form-group">
    <input type="text" name="Datum_rodjenja" class="form-control" placeholder="Datum_rodjenja" />
   </div>
   <div class="form-group">
    <input type="text" name="Grad" class="form-control" placeholder="Grad" />
   </div>
   <div class="form-group">
    <input type="text" name="Adresa" class="form-control" placeholder="Adresa" />
   </div>
   <div class="form-group">
    <input type="text" name="Pocetak_osiguranja" class="form-control" placeholder="Pocetak_osiguranja" />
   </div>
   <div class="form-group">
    <input type="text" name="Zavrsetak_osiguranja" class="form-control" placeholder="Zavrsetak_osiguranja" />
   </div>
   <div class="form-group">
    <input type="text" name="Vrsta_alergije" class="form-control" placeholder="Vrsta_alergije" />
   </div>
   <div class="form-group">
    <input type="text" name="Krvna_grupa" class="form-control" placeholder="Krvna_grupa" />
   </div>
   <div class="form-group">
    <input type="text" name="Tlak" class="form-control" placeholder="Tlak" />
   </div>
   <div class="form-group">
    <input type="text" name="Pusenje" class="form-control" placeholder="Pusenje" />
   </div>
   <div class="form-group">
    <input type="text" name="Droge" class="form-control" placeholder="Droge" />
   </div>
  <div class="form-group">
   <input type="submit" class="btn btn-primary" />
  </div>
 </form>
</div>
</div>
</body>
@endsection
