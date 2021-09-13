
@php


$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp

<!-- BEGIN: SideNav-->
  <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
      <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img class="hide-on-med-and-down" src="{{ asset('backend/app-assets/images/logo/police.png') }}" alt="materialize logo"/><img class="show-on-medium-and-down hide-on-med-and-up" src="{{ asset('backend/app-assets/images/logo/police.png') }}" alt="materialize logo"/><span class="logo-text hide-on-med-and-down">Pabna District </span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
      </div>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <li class="bold"><a class="{{ ($route == 'dashboard') ? 'active' : '' }}"" href="{{  route('dashboard') }}"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
        </li>

        <!-- ---------View Profile-------------------------------------------------------------------------------------------------- -->
        
        <li class="navigation-header"><a class="navigation-header-text">Pages </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        @if(Auth::user()->role=='Admin')
        <li class="bold"><a class="waves-effect waves-cyan  {{ ($route == 'profile.view') ? 'active' : '' }}" href="{{  route('profile.view') }}"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="User Profile">View Profile</span></a>
        </li>
        <!-- ---------------------------------Account Setting-------------------------------------------------------------------------- -->
        
        <li class="bold"><a class="waves-effect waves-cyan {{ ($route == 'profile.setting') ? 'active' : '' }}" href="{{ route('profile.setting')}}"><i class="material-icons">settings_applications</i><span class="menu-title" data-i18n="User Profile">Account Setting</span></a>
        </li>
      
        <!-- ---------------------------------User Setting-------------------------------------------------------------------------- -->
      
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan {{ ($prefix == '/users') ? 'active' : '' }}" href="JavaScript:void(0)"><i class="material-icons">face</i><span class="menu-title" data-i18n="User">User Management</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="{{ ($route == 'users.add') ? 'active' : '' }}" href="{{  route('users.add') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Add">Add</span></a>
              </li>
              <li><a class="{{ ($route == 'user.view') ? 'active' : '' }}" href="{{  route('user.view') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="View">View</span></a>
              </li>
    
              <!-- <li><a href="page-users-edit.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Edit">Edit</span></a>
              </li> -->
            </ul>
          </div>
        </li>
        @endif
           <!-- ---------------------------------START STUDENT MANAGEMENT-------------------------------------------------------------------------- -->
        
         <li class="bold"><a class="collapsible-header waves-effect waves-cyan {{ ($prefix == '/vehicles') ? 'active' : '' }}" href="JavaScript:void(0)"><i class="material-icons">motorcycle</i><span class="menu-title" data-i18n="motorcycle">Vehicle Management</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="{{ ($route == 'vehicle.entry.view') ? 'active' : '' }}" href="{{ route('vehicle.entry.view') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Add">View Vehicles </span></a>
              </li>
              <li><a class="" href=""><i class="material-icons">radio_button_unchecked</i><span data-i18n="Add">Add</span></a>
              </li>
              <!-- <li><a href="page-users-edit.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Edit">Edit</span></a>
              </li> -->
            </ul>
          </div>
        </li>
         <!-- ---------------------------------END STUDENT MANAGEMENT-------------------------------------------------------------------------- -->
        
      <!-- ---------------------------------START PABNA PS MANAGEMENT-------------------------------------------------------------------------- -->
        
      <li class="bold"><a class="collapsible-header waves-effect waves-cyan {{ ($prefix == '/pabnaps') ? 'active' : '' }}" href="JavaScript:void(0)"><i class="material-icons">motorcycle</i><span class="menu-title" data-i18n="motorcycle">Pabna PS Management</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="{{ ($route == 'pabnaps.vehicle.view') ? 'active' : '' }}" href="{{ route('pabnaps.vehicle.view') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Add">View Vehicles List </span></a>
              </li>
              <li><a class="{{ ($route == 'pabnaps.seized.vehicle.list') ? 'active' : '' }}" href="{{ route('pabnaps.seized.vehicle.list') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Add">View Status Vehicles </span></a>
              </li>
              <li><a class="{{ ($route == 'pabnaps.seized.vehicle.group.date') ? 'active' : '' }}" href="{{ route('pabnaps.seized.vehicle.group.date') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Add">groupBy Date </span></a>
              </li>
              <li><a class="{{ ($route == 'pabnaps.seized.vehicle.monthly.report') ? 'active' : '' }}" href="{{ route('pabnaps.seized.vehicle.monthly.report') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Add">Monthly Report Seized Vehicles</span></a>
              </li>
              <!-- <li><a href="page-users-edit.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Edit">Edit</span></a>
              </li> -->
            </ul>
          </div>
        </li>
         <!-- ---------------------------------END PABNA PS MANAGEMENT-------------------------------------------------------------------------- -->
        
        
       
      
      
       
      </ul>
      <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: SideNav-->