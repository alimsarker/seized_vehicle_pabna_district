<?php

namespace App\Http\Controllers\Backend\Vehicle;

use Carbon\Carbon;
use App\Models\PabnaPs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ReportPabnaPsController extends Controller
{

    public function PabnaPsVhDtReport(){
        $data['allData'] = PabnaPs::select('date')->groupBy('date')->orderBy('id','DESC')->get();
        
        return view('backend.vehicle.pabnaps.report_view_vehicle_entry_date',$data);
    }
    
    

    public function DetailsPabnaPsVhDtReport($date){

        $data['details'] = PabnaPs::where('date',$date)->get();
        return view('backend.vehicle.pabnaps.report_gd_entry_date_details',$data);

    }


    public function ViewPabnaPsVhGroupReport(Request $request){ 

     
                        
            $startDate = Carbon::createFromFormat('d-m-Y',  '01-09-2021')->startOfDay();
            $endDate = Carbon::createFromFormat('d-m-Y', '30-09-2021')->endOfDay();


            $allData = PabnaPs::query()
            ->whereDate('date', '>=', $startDate)
            ->whereDate('date', '<=', $endDate)
            ->get();


        

        return view('backend.vehicle.pabnaps.seized_vehicle_monthly_report',compact('allData'));
    }

    
   




}
