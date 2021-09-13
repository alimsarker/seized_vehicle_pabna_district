@extends('admin.admin_master')
@section('admincontent')



<div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
<div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
              <h5 class="breadcrumbs-title mt-0 mb-0" style="text-align: right;"><span>PABNA DISTRICT POLICE - PABNA POLICE STATION</span></h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Vehicle Management</a>
                  </li>
                  <li class="breadcrumb-item active"> Vehicle GD Entry Details
                  </li>
                </ol>
              </div>
            
            </div>
          </div>
        </div>
<div class="section">
  

      <div class="section section-data-tables">
      
         <div class="row">
            <div class="col s12">
               <div class="card">
               <div class="card-content">
                  <h4 class="card-title">Vehicle GD Entry Details </h4>
                   <div class="row">
                     <div class="col s12">
                     <table id="page-length-option" class="display">
                        <thead>
                           <tr>
                           <th style="width:5%">SL</th>
                           <th>Name</th>
                      
                      <th>Mobile </th>
                      
                      <th>VH. No </th>
                      <th>Chesis No </th>
                   
                     
                      <th>Officer Name </th>
                      <th> 	Seized Unit  </th>
                      <th> CS No OR GD NO </th>
                      <th>  GD Date </th>
                           <th> Status</th>
                         
                           
                        
                         
                       
                         
                           </tr>
                        </thead>
                        <tbody>
                        @foreach($details as $key=> $value) 
                           <tr style="color:blue;">
                           <td>{{ $key+1 }}</td>
                         
                           <td>{{$value->name}}</td>
                           
                           <td>{{$value->mobile}}</td>
                           <td>{{$value->vehicle_no}}</td>
                           <td>{{$value->chesis_no}}</td>
                          
                           <td>{{$value->seized_officer}}</td>
                           <td>{{$value->seized_unite}}</td>
                           <td>{{$value->cs_or_gd_no}}</td>
                           <td>
                           {{ date('d-m-Y',strtotime( $value->date ))  }}
                           </td>
                            <td> {{  $value->status == 1 ?'Release':'Seized'  }}</td>
                            
                         
                          
                           
                           
                          
                           </tr>
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
   
</div>


@endsection






