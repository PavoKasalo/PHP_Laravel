@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
 <head>
 <link rel="stylesheet" type="text/css" href="/css/pozadina.css">
 </head>
 <body>
<div class="row">
    <div class="col-md-12">
     <br />
     <h3 id="naslov">Uređivanje podataka o pacijentu</h3>
     <br />
     @if(count($errors) > 0)
   
     <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
             <li>{{$error}}</li>
            @endforeach
            </ul>
     @endif
     <form method="post" action="{{action('UpdateController@update', $ID_pacijenta)}}">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="PATCH" />
      <div class="form-group">
          <input type="text" name="Ime" class="form-control" value="{{$pacijent->Ime}}" placeholder="Unesite ime" />
         </div>
         <div class="form-group">
          <input type="text" name="Prezime" class="form-control" value="{{$pacijent->Prezime}}" placeholder="Unesite prezime" />
         </div>
         <div class="form-group">
           <input type="text" name="Broj_telefona" class="form-control" value="{{$pacijent->Broj_telefona}}" placeholder="Unesite broj telefona" />
          </div>
          <div class="form-group">
           <input type="text" name="Datum_rodjenja" class="form-control" value="{{$pacijent->Datum_rodjenja}}" placeholder="Unesite datum rodjenja" />
          </div>
          <div class="form-group">
           <input type="text" name="Grad" class="form-control" value="{{$pacijent->Grad}}" placeholder="Unesite grad" />
          </div>
          <div class="form-group">
           <input type="text" name="Adresa" class="form-control" value="{{$pacijent->Adresa}}" placeholder="Unesite adresu" />
          </div>
          <div class="form-group">
           <input type="text" name="Pocetak_osiguranja" class="form-control" value="{{$pacijent->Pocetak_osiguranja}}" placeholder="Unesite pocetak osiguranja" />
          </div>
          <div class="form-group">
           <input type="text" name="Zavrsetak_osiguranja" class="form-control" value="{{$pacijent->Zavrsetak_osiguranja}}" placeholder="Unesite zavrsetak osiguranja" />
          </div>
          <div class="form-group">
           <input type="text" name="Vrsta_alergije" class="form-control" value="{{$pacijent->Vrsta_alergije}}" placeholder="Unesite vrstu alergije" />
          </div>
          <div class="form-group">
           <input type="text" name="Krvna_grupa" class="form-control" value="{{$pacijent->Krvna_grupa}}" placeholder="EUnesite krvbu grupu" />
          </div>
          <div class="form-group">
           <input type="text" name="Tlak" class="form-control" value="{{$pacijent->Tlak}}" placeholder="Unesite tlak" />
          </div>
          <div class="form-group">
           <input type="text" name="Pusenje" class="form-control" value="{{$pacijent->Pusenje}}" placeholder="Unesite pusenje" />
          </div>
          <div class="form-group">
           <input type="text" name="Droge" class="form-control" value="{{$pacijent->Droge}}" placeholder="Unesite droge" />
          </div>
      <div class="form-group">
       <input type="submit" class="btn btn-primary" value="Edit" />
      </div>
     </form>
    </div>
   </div>
</body>
@endsection