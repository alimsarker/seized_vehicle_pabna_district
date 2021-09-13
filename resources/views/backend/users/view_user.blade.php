@extends('admin.admin_master')
@section('admincontent')
<div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
<div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>User View</span></h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">User Management</a>
                  </li>
                  <li class="breadcrumb-item active"> View  
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
                  <h4 class="card-title">User View</h4>
                  <a href="{{ route('users.add') }}" style="float: right;" class="btn cyan waves-effect waves-light right mb-5">Add User</a>
                  <div class="row">
                     <div class="col s12">
                     <table id="page-length-option" class="display">
                        <thead>
                           <tr>
                           <th style="width:5%">SL</th>
                           <th>Image</th>
                           <th>Role</th>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Code</th>
                           <th style="width:15%">Action</th>
                         
                       
                         
                           </tr>
                        </thead>
                        <tbody>
                        @foreach($allData as $key=> $data) 
                           <tr>
                           <td>{{ $key+1 }}</td>
                           <td>
<img style="width:100px; height:100px;" class="responsive-img" alt="" src="{{ (!empty($data->profile_photo_path))? url('/storage/profile-photos/'.$data->profile_photo_path) : url('/storage/profile-photos/no_image.jpg') }}">
                       
                           </td> 
                           <td>{{ $data->role }}</td>
                           <td>{{ $data->name }}</td>
                           <td>{{ $data->email }}</td>
                           <td>{{ $data->code }}</td>
                           <td>
                           <a href="{{ route('users.edit', $data->id) }}" class="btn cyan waves-effect waves-light" type="submit">Edit</a>
                    
                           <a href="{{ route('users.delete', $data->id) }}" class="btn btn-danger" id="delete" type="submit">Delete</a>
                           </td>
                       
                          
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






