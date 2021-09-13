<?php

namespace App\Http\Controllers\Backend\Vehicle;

use App\Models\PabnaPs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PabnaPsController extends Controller
{
    public function ViewVehiclePabnaPs(){

        $data['pabnaps'] = PabnaPs::all();
        return view('backend.vehicle.pabnaps.view_vehicle_entry',$data);
    }

    public function AddSeizedVhPabnaPs(){

        $data['pabnaps'] = PabnaPs::all();

        return view('backend.vehicle.pabnaps.add_vehicle_entry',$data);
    }


    public function StoreSeizedVhPabnaPs(Request $request){

        $user = new PabnaPs();
       
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
        $user->store_unite = 'Pabna';
        $user->cs_or_gd_no = $request->cs_or_gd_no;
        $user->date = date('Y-m-d',strtotime($request->date));
    
    $user->save();
    $notification = array(
        'message' => 'Pabna Police Station Seized Vehicle Inserted Successfully',
        'alert-type' => 'success'
    );
    return Redirect()->route('pabnaps.vehicle.view')->with($notification); 
    }

    public function ListVhPabnaPs(){

        $data['pabnaps'] = PabnaPs::all();
        return view('backend.vehicle.pabnaps.vehicle_release',$data);


    }

    public function ReleaseVhPabnaPs($id){

        $status = PabnaPs::find($id);
        $status->status = 1;
        $status->update();
        $notification = array(
            'message' => 'Pabna Police Station Seized Vehicle Release Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification); 
    }

   

    public function EditVhPabnaPs($id){

        $editdata = PabnaPs::find($id);
       
        return view('backend.vehicle.pabnaps.edit_vehicle_entry',compact('editdata')); 

    }

    public function UpdateVhPabnaPs(Request $request, $id){


        $user = PabnaPs::find($id);
        
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
        $user->store_unite = 'Pabna';
        $user->cs_or_gd_no = $request->cs_or_gd_no;
        $user->date = date('Y-m-d',strtotime($request->date));
    
        $user->save();
        $notification = array(
            'message' => 'Pabna Police Station Seized Vehicle Updated Successfully',
            'alert-type' => 'info'
        );
        return Redirect()->route('pabnaps.vehicle.view')->with($notification); 
    }



     

    public function PabnaPsVhDelete($id){

        PabnaPs::find($id)->delete();  

        $notification = array(
            'message' => 'Pabna Police Station Seized Vehicle Data Deleted Successfully',
            'alert-type' => 'warning'
        );
        return Redirect()->route('pabnaps.vehicle.view')->with($notification); 
    }
    
         
      
      


}
