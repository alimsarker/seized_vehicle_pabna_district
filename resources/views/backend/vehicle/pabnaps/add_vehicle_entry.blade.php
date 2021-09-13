@extends('admin.admin_master')
@section('admincontent')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
<div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
              <h5 class="breadcrumbs-title mt-0 mb-0" style="text-align: right;"><span>PABNA DISTRICT POLICE SEIZED VEHICLE  ENTRY</span></h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Vehicle Management</a>
                  </li>
                  <li class="breadcrumb-item active">  Vehicle  Entry
                  </li>
                </ol>
              </div>
            
            </div>
          </div>
        </div>

<div class="section">
<div class="col s12 m12">
      <div id="Form-advance" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Add Seized Vehicle </h4>
          <form method="POST" action="{{ route('pabnaps.seized.vehicle.store') }}"> @csrf
                <div class="row">
                      
                        
                        <div class="input-field col m4 s12">
                            <input   type="text" name="name" class="block mt-1 w-full" required="">
                            <label for="name"> Name </label>
                          
                        </div>

                        <div class="input-field col m4 s12">
                            <input   type="text" name="fname" class="block mt-1 w-full" required="">
                            <label for="fname">Father's Name </label>
                          
                        </div>

                        <div class="input-field col m4 s12">
                            <input   type="text" name="address" class="block mt-1 w-full" required="">
                            <label for="address">Address</label>
                          
                        </div>
                    </div><!--  //end 1st row -->
                <div class="row">  <!--  //start 2nd row -->
                     
                        
                        <div class="input-field col m3 s12">
                            <input   type="text" name="mobile" class="block mt-1 w-full" required="">
                            <label for="mobile">Mobile Number </label>
                          
                        </div>

                       
                        <div class="input-field col m3 s12">
                          <select name="vehi_descript" id="vehi_descript"  class="block mt-1 w-full">
                            <option value="" disabled selected>Choose Vehicle Company Name</option>
                            @foreach($pabnaps as $value)
                    <option value="{{ $value->id }}"> {{ $value->vehi_descript }}</option>
                    @endforeach
                            <option value="0">Add New Company Name</option>
                            </select>
                            
                            <input type="text" name="vehi_descript" id="add_another_vehi_descript" class="block mt-1 w-full" placeholder="Write Company Name" style="display: none;"> 
                           
                            <label>Select Vehicle Company Name </label>
                        </div>
                       
                            <!-- ------------------------------------------- -->

                            <div class="input-field col m3 s12">
                          <select name="color"  id=color class="block mt-1 w-full">
                            <option value="" disabled selected>Choose Color</option>
                            @foreach($pabnaps as $value)
                    <option value="{{ $value->id }}"> {{ $value->color }}</option>
                    @endforeach
                            <option value="0">Add New Color</option>
                            </select>
                            
                            <input type="text" name="color" id="add_another_color" class="block mt-1 w-full" placeholder="Write Color" style="display: none;"> 
                            <label>Select Color </label>             
                </div>
                            <!-- --------------------------------------------------------- -->
                            
                          
                        <div class="input-field col m3 s12">
                            <input   type="text" name="vehicle_no" class="block mt-1 w-full" required="">
                            <label for="vehicle_no">Vehicle Number</label>
                          
                        </div>

                        
                </div>  <!--  //end 2nd row --> 

                <div class="row">  <!--  //start 3rd row --> 	 

                
                
                     
                        

                        <div class="input-field col m3 s12">
                            <input id="chesis_no" type="text" name="chesis_no" class="block mt-1 w-full" required="">
                            <label for="chesis_no">Chesis No</label>
                          
                        </div>
                        <div class="input-field col m3 s12">
                            <input id="engine_no" type="text" name="engine_no" class="block mt-1 w-full" required="">
                            <label for="engine_no">Engine No</label>
                          
                        </div>
                        <div class="input-field col m3 s12">
                            <input id="discount" type="text" name="seized_officer" class="block mt-1 w-full" required="">
                            <label for="seized_officer">Seized Officer's Name</label>
                          
                        </div>

                        <div class="input-field col m3 s12">
                          <select name="seized_unite"   class="block mt-1 w-full">
                            <option value="" disabled selected>Choose Officer's Unite</option>
                            <option value="SadarT">Sadar Traffic</option>
                            <option value="IshurdiT">Ishurdi Traffic</option>
                            <option value="KashinathpurT">Kashinathpur Traffic</option>
                            <option value="Pabna">Pabna PS</option>
                            <option value="Ishurdi">Ishurdi PS</option>
                            <option value="Atghoria">Atghoria PS</option>
                            
                            
                            </select>
                            <label>Select Officer's Unite</label>
                        </div>




                </div>  <!--  //end 3rd row -->

                <div class="row">  <!--  //start 4th row -->

                
               
                     
                       
                        <div class="input-field col m3 s12">
                            <input id="cs_or_gd_no" type="text" name="cs_or_gd_no" class="block mt-1 w-full" required="">
                            <label for="cs_or_gd_no">CS NO And GD NO</label>
                          
                        </div>
                
                        <div class="input-field col m3 s12">
                            <input type="date" name="date" class="block mt-1 w-full" required="">
                            <label for="date" class="">Date Of GD</label>
                            </div>
                

                </div>  <!--  //end 4th row -->

          
            
              <div class="row">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  </div>     
</div>
</div>

<script type="text/javascript">
   $(document).ready(function(){
        $('#image').change(function(e){
           var reader = new FileReader();
           reader.onload = function(e){
               $('#showAdminImage').attr('src',e.target.result);
           }
           reader.readAsDataURL(e.target.files['0']);
       });
   });

</script>

<script type="text/javascript">
   $(document).ready(function(){
     $(document).on('change','#color',function(){

      var color = $(this).val();
        if (color == '0') {
          $('#add_another_color').show();

        }else{
          $('#add_another_color').hide();
        }

     });
    
   });

</script>

<script type="text/javascript">
   $(document).ready(function(){
     $(document).on('change','#vehi_descript',function(){

      var color = $(this).val();
        if (color == '0') {
          $('#add_another_vehi_descript').show();

        }else{
          $('#add_another_vehi_descript').hide();
        }

     });
    
   });

</script>

@endsection