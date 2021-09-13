@extends('admin.admin_master')
@section('admincontent')  

@php 

 

      $policestation = App\Models\PabnaPs::all();
      $pabna = count(($policestation->where('status','0')->where('store_unite','Pabna')));
      $pabnarelease = count(($policestation->where('status','1')->where('store_unite','Pabna')));
      $ishurdi = count(($policestation->where('status','0')->where('store_unite','Ishurdi')));
      
 
@endphp 

  
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="col s12">
          <div class="container">
            <div class="section">
            <div id="card-stats" class="pt-0">
         <div class="row">
            <div class="col s12 m6 l6 xl3">
               <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text animate fadeLeft">
                  <div class="padding-4">
                
                     <div class="row">
                        <div class="col s7 m7">
                           <i class="material-icons background-round mt-5">traffic</i>
                           <p>PABNA POLICE STATION</p>
                        </div>
                       
                        <div class="col s5 m5 right-align">
                      
                           <P class="mb-0 white-text">জব্দ- {{ $pabna }}</P>
                           <p class="no-margin">মুক্ত- {{ $pabnarelease }}</p>
                           <p>মোট-{{ $pabna+$pabnarelease }}</p>
                     
                        </div>
                      
                     </div> 
                   
                  </div>
               </div>
            </div>
            <div class="col s12 m6 l6 xl3">
               <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text animate fadeLeft">
                  <div class="padding-4">
                     <div class="row">
                        <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">traffic</i>
                           <p>ISHURDI POLICE STATION</p>
                        </div>
                        <div class="col s5 m5 right-align">
                           <h5 class="mb-0 white-text">{{ $ishurdi }}</h5>
                           <p class="no-margin">New</p>
                           <p>1,12,900</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col s12 m6 l6 xl3">
               <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text animate fadeRight">
                  <div class="padding-4">
                     <div class="row">
                        <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">traffic</i>
                           <p>ATGHORIA POLICE STATION</p>
                        </div>
                        <div class="col s5 m5 right-align">
                           <h5 class="mb-0 white-text">80%</h5>
                           <p class="no-margin">Growth</p>
                           <p>3,42,230</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col s12 m6 l6 xl3">
               <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text animate fadeRight">
                  <div class="padding-4">
                     <div class="row">
                        <div class="col s7 m7">
                           <i class="material-icons background-round mt-5">attach_money</i>
                           <p>Profit</p>
                        </div>
                        <div class="col s5 m5 right-align">
                           <h5 class="mb-0 white-text">$890</h5>
                           <p class="no-margin">Today</p>
                           <p>$25,000</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col s12 m6 l6 xl3">
               <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text animate fadeLeft">
                  <div class="padding-4">
                
                     <div class="row">
                        <div class="col s7 m7">
                           <i class="material-icons background-round mt-5">add_shopping_cart</i>
                           <p>Orders</p>
                        </div>
                       
                        <div class="col s5 m5 right-align">
                      
                           <h5 class="mb-0 white-text">{{ $pabna }}</h5>
                           <p class="no-margin">New</p>
                           <p>00000</p>
                     
                        </div>
                      
                     </div> 
                   
                  </div>
               </div>
            </div>
            <div class="col s12 m6 l6 xl3">
               <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text animate fadeLeft">
                  <div class="padding-4">
                     <div class="row">
                        <div class="col s7 m7">
                           <i class="material-icons background-round mt-5">perm_identity</i>
                           <p>Clients</p>
                        </div>
                        <div class="col s5 m5 right-align">
                           <h5 class="mb-0 white-text">{{ $ishurdi }}</h5>
                           <p class="no-margin">New</p>
                           <p>1,12,900</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col s12 m6 l6 xl3">
               <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text animate fadeRight">
                  <div class="padding-4">
                     <div class="row">
                        <div class="col s7 m7">
                           <i class="material-icons background-round mt-5">timeline</i>
                           <p>Sales</p>
                        </div>
                        <div class="col s5 m5 right-align">
                           <h5 class="mb-0 white-text">80%</h5>
                           <p class="no-margin">Growth</p>
                           <p>3,42,230</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col s12 m6 l6 xl3">
               <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text animate fadeRight">
                  <div class="padding-4">
                     <div class="row">
                        <div class="col s7 m7">
                           <i class="material-icons background-round mt-5">attach_money</i>
                           <p>Profit</p>
                        </div>
                        <div class="col s5 m5 right-align">
                           <h5 class="mb-0 white-text">$890</h5>
                           <p class="no-margin">Today</p>
                           <p>$25,000</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col s12 m6 l6 xl3">
               <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text animate fadeLeft">
                  <div class="padding-4">
                
                     <div class="row">
                        <div class="col s7 m7">
                           <i class="material-icons background-round mt-5">add_shopping_cart</i>
                           <p>Orders</p>
                        </div>
                       
                        <div class="col s5 m5 right-align">
                      
                           <h5 class="mb-0 white-text">{{ $pabna }}</h5>
                           <p class="no-margin">New</p>
                           <p>00000</p>
                     
                        </div>
                      
                     </div> 
                   
                  </div>
               </div>
            </div>
            <div class="col s12 m6 l6 xl3">
               <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text animate fadeLeft">
                  <div class="padding-4">
                     <div class="row">
                        <div class="col s7 m7">
                           <i class="material-icons background-round mt-5">perm_identity</i>
                           <p>Clients</p>
                        </div>
                        <div class="col s5 m5 right-align">
                           <h5 class="mb-0 white-text">{{ $ishurdi }}</h5>
                           <p class="no-margin">New</p>
                           <p>1,12,900</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col s12 m6 l6 xl3">
               <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text animate fadeRight">
                  <div class="padding-4">
                     <div class="row">
                        <div class="col s7 m7">
                           <i class="material-icons background-round mt-5">timeline</i>
                           <p>Sales</p>
                        </div>
                        <div class="col s5 m5 right-align">
                           <h5 class="mb-0 white-text">80%</h5>
                           <p class="no-margin">Growth</p>
                           <p>3,42,230</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col s12 m6 l6 xl3">
               <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text animate fadeRight">
                  <div class="padding-4">
                     <div class="row">
                        <div class="col s7 m7">
                           <i class="material-icons background-round mt-5">attach_money</i>
                           <p>Profit</p>
                        </div>
                        <div class="col s5 m5 right-align">
                           <h5 class="mb-0 white-text">$890</h5>
                           <p class="no-margin">Today</p>
                           <p>$25,000</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
   </div>

      <div class="section section-data-tables">
      
         <div class="row">
            <div class="col s12">
               <div class="card">
               <div class="card-content">
                  <h4 class="card-title">Page Length Options</h4>
                  <div class="row">
                     <div class="col s12">
                     <table id="page-length-option" class="display">
                        <thead>
                           <tr>
                           <th>Name</th>
                           <th>Position</th>
                           <th>Office</th>
                           <th>Age</th>
                           <th>Start date</th>
                           <th>Salary</th>
                           </tr>
                        </thead>
                        <tbody>
                        @foreach($policestation as $key=> $police) 
                           <tr>
                           <td>{{$police->name}}</td>
                           <td>{{$police->name}}</td>
                           <td>{{$police->name}}</td>
                           <td>{{$police->name}}</td>
                           <td>{{$police->name}}</td>
                           <td>{{$police->name}}</td>
                           </tr>
                           @endforeach
                           
                        </tbody>
                        <tfoot>
                           <tr>
                           <th>Name</th>
                           <th>Position</th>
                           <th>Office</th>
                           <th>Age</th>
                           <th>Start date</th>
                           <th>Salary</th>
                           </tr>
                        </tfoot>
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
        </div>
   
@endsection

  
