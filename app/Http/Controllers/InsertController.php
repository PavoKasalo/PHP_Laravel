<?php

namespace App\Http\Controllers;
use App\Pacijent;
use Illuminate\Http\Request;

class InsertController extends Controller
{
    public function index()
    {
        return view('insert');
        $pacijent = Pacijent::all()->toArray();
        return view('pacijent.index', compact('pacijent'));
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'Ime'    =>  'required',
            'Prezime'     =>  'required',
            'Broj_telefona'     =>  'required',
            'Datum_rodjenja'     =>  'required',
            'Grad'     =>  'required',
            'Adresa'     =>  'required',
            'Pocetak_osiguranja'     =>  'required',
            'Vrsta_alergije'     =>  'required',
            'Krvna_grupa'     =>  'required',
            'Tlak'     =>  'required',
            'Pusenje'     =>  'required',
            'Droge'     =>  'required'
        ]);
        $pacijent = new Pacijent([
            'Ime'    =>  $request->get('Ime'),
            'Prezime'     =>  $request->get('Prezime'),
            'Broj_telefona'     =>  $request->get('Broj_telefona'),
            'Datum_rodjenja'     =>  $request->get('Datum_rodjenja'),
            'Grad'     =>  $request->get('Grad'),
            'Adresa'     =>  $request->get('Adresa'),
            'Pocetak_osiguranja'     =>  $request->get('Pocetak_osiguranja'),
            'Zavrsetak_osiguranja'     =>  $request->get('Zavrsetak_osiguranja'),
            'Vrsta_alergije'     =>  $request->get('Vrsta_alergije'),
            'Krvna_grupa'     =>  $request->get('Krvna_grupa'),
            'Tlak'     =>  $request->get('Tlak'),
            'Pusenje'     =>  $request->get('Pusenje'),
            'Droge'     =>  $request->get('Droge')



            
        ]);
        $pacijent->save();
        return redirect()->route('insert.store')->with('success', 'Podatak spremljen');
    }
    public function edit($id)
    {
        $pacijent = Pacijent::find($id);
        return view('pacijent.edit', compact('pacijent', 'ID_pacijenta'));
    }
    public function update(Request $request, $ID_pacijenta)
    {
        $this->validate($request, [
            'Ime'    =>  'required',
            'Prezime'     =>  'required',
            'Broj_telefona'     =>  'required',
            'Datum_rodjenja'     =>  'required',
            'Grad'     =>  'required',
            'Adresa'     =>  'required',
            'Pocetak_osiguranja'     =>  'required',
            'Vrsta_alergije'     =>  'required',
            'Krvna_grupa'     =>  'required',
            'Tlak'     =>  'required',
            'Pusenje'     =>  'required',
            'Droge'     =>  'required'
        ]);
        $pacijent = Pacijent::find($ID_pacijenta);
        $pacijent->Ime = $request->get('Ime');
        $pacijent->Prezime = $request->get('Prezime');
        $pacijent->Broj_telefona = $request->get('Broj_telefona');
        $pacijent->Datum_rodjenja = $request->get('Datum_rodjenja');
        $pacijent->Grad = $request->get('Grad');
        $pacijent->Adresa = $request->get('Adresa');
        $pacijent->Pocetak_osiguranja = $request->get('Pocetak_osiguranja');
        $pacijent->Zavrsetak_osiguranja = $request->get('Zavrsetak_osiguranja');
        $pacijent->Vrsta_alergije = $request->get('Vrsta_alergije');
        $pacijent->Krvna_grupa = $request->get('Krvna_grupa');
        $pacijent->Tlak = $request->get('Tlak');
        $pacijent->Pusenje = $request->get('Pusenje');
        $pacijent->Droge = $request->get('Droge');
        $pacijent->save();
        return redirect()->route('update.index')->with('success', 'Pacijent dodan');
    }
    
}

