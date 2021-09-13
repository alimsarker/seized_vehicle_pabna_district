@extends('admin.admin_master')
@section('admincontent')
<div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
<div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Vehicle  Entry</span></h5>
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
                  <h4 class="card-title">Student Registration List</h4>
                  <a href="" style="float: right;" class="btn cyan waves-effect waves-light right mb-5">Add Student Registration</a>
                  <div class="row">
                     <div class="col s12">

     

                     <table id="page-length-option" class="display">
                        <thead>
                           <tr>
                           <th style="width:5%">SL</th>
                           <th>Name</th>
                           <th> 	fname </th>
                           <th> 	address </th>
                           <th>mobile </th>
                           <th>vehi_descript </th>
                           <th>vehicle_no </th>
                           <th>chesis_no </th>
                           <th> 	engine_no  </th>
                           <th> 	color  </th>
                           <th>seized_officer </th>
                           <th> 	seized_unite  </th>
                           <th> 	 	cs_or_gd_no  </th>
                           <th>status  </th>
                           <th style="width:15%">Action</th>
                         
                       
                         
                           </tr>
                        </thead>
                        <tbody>
                       
                           <tr>
                           <td></td>
                           <td>
            
                           </td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td>
            
                           </td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                          
                          
                          
                        
                           
                           <td>
                           </td>
                       
                          
                           </tr>
                         
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






