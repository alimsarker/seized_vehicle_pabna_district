<?php

namespace App\Http\Controllers;

use App\PabnaPs;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;

class PabnaPsDaterangeController extends Controller
{
    function index(Request $request)
    {
     if(request()->ajax())
     {
      if(!empty($request->from_date)) 
      {
		 
        $data = DB::table('pabna_ps')
         ->whereBetween('date', array($request->from_date, $request->to_date))
         ->get(); 
      }
      else
      {
       $data = DB::table('pabna_ps')
         ->get();
      }
      return datatables()->of($data)->make(true);
     }
     return view('backend.vehicle.pabnaps.seized_vehicle_monthly_report');
    }
}

?>
