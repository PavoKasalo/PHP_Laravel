<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DrogeController extends Controller
{
    function index()
    {
     return view('droge');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('Da');
      if($query != '')
      {
       $data = DB::table('pacijent')
         ->where('Droge', 'like', '%'.$query.'%')
         ->get();
         
      }
      else
      {
       $data = DB::table('pacijent')
         ->orderBy('ID_pacijenta', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->Ime.'</td>
         <td>'.$row->Prezime.'</td>
         <td>'.$row->Broj_telefona.'</td>
         <td>'.$row->Datum_rodjenja.'</td>
         <td>'.$row->Grad.'</td>
         <td>'.$row->Adresa.'</td>
         <td>'.$row->Pocetak_osiguranja.'</td>
         <td>'.$row->Zavrsetak_osiguranja.'</td>
         <td>'.$row->Vrsta_alergije.'</td>
         <td>'.$row->Krvna_grupa.'</td>
         <td>'.$row->Tlak.'</td>
         <td>'.$row->Pusenje.'</td>
         <td>'.$row->Droge.'</td>

        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">Nema podataka</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}
