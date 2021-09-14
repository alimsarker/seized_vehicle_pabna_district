<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DISTRICT POLICE PABNA | DATABASE-SYSTEMS</title>
  <link rel="apple-touch-icon" href="{{ asset('backend/app-assets/images/favicon/police.jpg') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/app-assets/images/favicon/police - Copy.jpg') }}">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script> -->

    <script src="{{asset('assets/js/jquery.min.js')}}"></script>

   <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
  <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('assets/js/dataTables.bootstrap.min.js')}}"></script>  
  <link rel="stylesheet" href="{{asset('assets/css/dataTables.bootstrap.min.css')}}" />
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker.css')}}" />
        <script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
        <script src="{{asset('assets/js/tableToExcel.js')}}" type="text/javascript"></script>
         
 </head>
 <body>
 <div class="container">    
     <br />
     <h3 align="center"><u><b>  টেবিল</b></u> </h3>
     <br />
            <br />
            <div class="row input-daterange">
                <div class="col-md-4">
                    <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" readonly />
                </div>
                <div class="col-md-4">
                    <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" readonly />
                </div>
                <div class="col-md-4">
                    <button type="button" name="filter" id="filter" class="btn btn-primary">Filter</button>
                    <button type="button" name="refresh" id="refresh" class="btn btn-default">Refresh</button>
                    <a href="http://127.0.0.1:8000/dashboard" class="btn btn-success">BACK</a>
                    <button style="float: right;margin-top: -17px;" class="btn btn-sm btn-danger" onclick="javascript:tableToExcel('order_table', 'W3C Example Table');">Excel export</button>
                    <button style="float: right;margin-top: -17px;" class="btn btn-sm btn-danger"><a target="_blanks" href="">PDF export</a></button>
                                 
                </div>
            </div>
            <br />
   <div class="table-responsive">
    <table class="table table-bordered table-striped" id="order_table">
           <thead>
            <tr>
                         
                           <th>Name</th>
                      
                           <th>Mobile </th>
                           
                           <th>VH. No </th>
                           <th>VH. Color</th>
                           <th>Chesis No </th>
                          
                           <th>Officer Name </th>
                           <th> 	Seized Unit  </th>
                           <th> CS No OR GD NO </th>
                           <th>  GD Date </th>
                           <th>  Status </th>
                
                
                  </tr>
           </thead>
         
       </table>
   </div>
  </div>
 </body>
</html>
<script>
$(document).ready(function(){
 $('.input-daterange').datepicker({
  todayBtn:'linked',
  format:'yyyy-mm-dd',
  autoclose:true
 });

 load_data();

 function load_data(from_date = '', to_date = '')
 {
  $('#order_table').DataTable({
   processing: true,
   serverSide: true,
   ajax: {
    url:"http://127.0.0.1:8000/pabnaps/daterange",
    data:{from_date:from_date, to_date:to_date}
   },
   columns: [
    {
     data:'name',
     name:'name'
    },
    {
     data:'mobile',
     name:'mobile'
    },
   
    {
     data:'vehicle_no',
     name:'vehicle_no'
    },
    {
     data:'color',
     name:'color'
    },
    {
     data:'chesis_no',
     name:'chesis_no'
    },
    {
     data:'seized_officer',
     name:'seized_officer'
    },
    {
     data:'seized_unite',
     name:'seized_unite'
    },
    {
     data:'cs_or_gd_no',
     name:'cs_or_gd_no'
    },
    {
     data:'date',
     name:'date'
    },
    { data: 'status', name: 'status', searchable:false, 
            render: function( data, type, full, meta ) {
                if (data === 0) {
                  return "<span class=\"badge badge-warning\">Seized</span>";
                } else if (data === 1) {
                  return "<span class=\"badge badge-success\">Release</span>";
                }
            }
        }    
    ]
  });
 }

 $('#filter').click(function(){
  var from_date = $('#from_date').val();
  var to_date = $('#to_date').val();
  if(from_date != '' &&  to_date != '')
  {
   $('#order_table').DataTable().destroy();
   load_data(from_date, to_date);
  }
  else
  {
   alert('Both Date is required');
  }
 });

 $('#refresh').click(function(){
  $('#from_date').val('');
  $('#to_date').val('');
  $('#order_table').DataTable().destroy();
  load_data();
 });

});
</script>



