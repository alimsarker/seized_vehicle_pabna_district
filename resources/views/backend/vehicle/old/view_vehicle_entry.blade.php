@extends('admin.admin_master')
@section('admincontent')



<div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
<div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0" style="text-align: right;"><span>PABNA DISTRICT POLICE SEIZED VEHICLE  ENTRY LIST</span></h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Vehicle Management</a>
                  </li>
                  <li class="breadcrumb-item active"> Vehicle  Entry
                  </li>
                </ol>
              </div>
            
            </div>
          </div>
        </div>
<div class="section">
  <!-- ---------------------------------------------------------------------------------------- -->
    
      

  <!-- -------------------------------------------------------------------------------------------------- -->

      <div class="section section-data-tables">
      
         <div class="row">
            
            <div class="col s12">
               <div class="card">
               <div class="card-content">
                  <h4 class="card-title">Seized Vehicle List</h4>
                  <a href="{{ route('seized.vehicle.add') }}" style="float: right;" class="btn cyan waves-effect waves-light right mb-5">Add Seized Vehicle</a>
                  <div class="row">
                     <div class="col s12">

     
                  
                     <table id="page-length-option" class="display">
                        <thead>
                           <tr>
                         
                           <th>SL</th>
                           <th>Name</th>
                      
                           <th>mobile </th>
                           
                           <th>vehicle_no </th>
                           <th>chesis_no </th>
                        
                          
                           <th>seized_officer </th>
                           <th> 	seized_unite  </th>
                           <th> 	 	cs_or_gd_no  </th>
                           <th>status  </th>
                           <th>Action</th>
                         
                       
                      
                           </tr>
                        </thead>
                        <tbody>
                      
                        @foreach($policestation as $key=> $station) 
                        @if($station->usertype!="Admin")
                           <tr>
                         
                           <td>{{ $key+1 }}</td>
                           <td>{{$station->name}}</td>
                           
                           <td>{{$station->mobile}}</td>
                           <td>{{$station->vehicle_no}}</td>
                           <td>{{$station->chesis_no}}</td>
                          
                           <td>{{$station->seized_officer}}</td>
                           <td>{{$station->seized_unite}}</td>
                           <td>{{$station->cs_or_gd_no}}</td>
                           <td>
                           {{  $station->status == 1 ?'Release':'Seized'  }}
                           </td>
                           <td>
                           @if($station->status !== 1)
                          <a class="btn btn-warning" href="{{ route('seized.vehicle.release', $station->id) }}">Release</a>
                          @endif

                           </td>
                         
                           </tr>
                           @endif
                         @endforeach
                         
                        </tbody>
                        
                     </table>
                    

     
                           
              

                     </div>
                  </div>
               </div>
               </div>
            </div>

         </div>

      </div>



   
</div>


@endsection






