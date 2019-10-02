<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacijent extends Model
{
    protected $fillable = ['Ime', 'Prezime','Broj_telefona','Datum_rodjenja','Grad','Adresa','Pocetak_osiguranja','Zavrsetak_osiguranja','Vrsta_alergije','Krvna_grupa','Tlak','Pusenje','Droge'];
    protected $table = 'pacijent';
    public $timestamps = false;
    protected $primaryKey = 'ID_pacijenta';
}
