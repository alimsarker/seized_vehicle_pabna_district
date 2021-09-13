<?php

namespace App\Http\Controllers\Backend\Vehicle;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VehicleEntryController extends Controller
{
    public function ViewVehicleEntry(){

        $data['policestation'] = User::all();
        return view('backend.vehicle.view_vehicle_entry',$data);

    }

    public function AddSeizedVh(){

        return view('backend.vehicle.add_vehicle_entry');
    }

    public function StoreSeizedVh(Request $request){

      
            $user = new User();
            $user->usertype = $request->store_unite;
            $user->name  = $request->name;
            $user->fname = $request->fname;
            $user->address  = $request->address;
            $user->mobile = $request->mobile;
            $user->vehi_descript = $request->vehi_descript;
            $user->color = $request->color;
            $user->vehicle_no = $request->vehicle_no;
            $user->chesis_no = $request->chesis_no;
            $user->engine_no = $request->engine_no;
            $user->seized_officer = $request->seized_officer;
            $user->seized_unite = $request->seized_unite;
            $user->store_unite = $request->store_unite;
            $user->cs_or_gd_no = $request->cs_or_gd_no;
            $user->gd_date = date('Y-m-d',strtotime($request->gd_date));
        
        $user->save();
        $notification = array(
            'message' => 'Designations Title Inserted Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('vehicle.entry.view')->with($notification); 

        
    }

    public function ReleaseVh($id){
        $status = User::find($id);
        $status->status = 1;
        $status->update();
        $notification = array(
            'message' => 'Designations Title Inserted Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('vehicle.entry.view')->with($notification); 

    }
    
}
