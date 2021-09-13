<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;

use App\Http\Controllers\Backend\Vehicle\PabnaPsController;
use App\Http\Controllers\Backend\Vehicle\VehicleEntryController;
use App\Http\Controllers\Backend\Vehicle\ReportPabnaPsController;


use App\Http\Controllers\PabnaPsDaterangeController;
/*
|--------------------------------------------------------------------------
| Web Routes            
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');


Route::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');


// Users Management  All Route  
Route::prefix('users')->group(function(){

    Route::get('/view', [UserController::class, 'ViewUser'])->name('user.view');

    Route::get('/add', [UserController::class, 'ViewAdd'])->name('users.add');

    Route::post('/store', [UserController::class, 'StoreUser'])->name('user.store');

    Route::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('users.edit');
    
    Route::post('/update/{id}', [UserController::class, 'UserUpdate'])->name('users.update');  

    Route::get('/delete/{id}', [UserController::class, 'UserDelete'])->name('users.delete');

});

//User Profile and Chenge Password  

Route::prefix('profile')->group(function(){

    Route::get('/view', [ProfileController::class, 'ViewProfile'])->name('profile.view');

    Route::get('/setting', [ProfileController::class, 'ProfileSetting'])->name('profile.setting');

    Route::post('/profile', [ProfileController::class, 'ProfileUpdate'])->name('profile.update');

    Route::post('/password/update', [ProfileController::class, 'PasswordUpdate'])->name('password.update');
   
});






        //vehicles MANAGEMENT ROUTE 

        Route::prefix('vehicles')->group(function(){

            // ************ Student Registration **************
            
            Route::get('/list/view', [VehicleEntryController::class, 'ViewVehicleEntry'])->name('vehicle.entry.view');

            Route::get('/seized/add', [VehicleEntryController::class, 'AddSeizedVh'])->name('seized.vehicle.add');

            Route::post('/seized/store', [VehicleEntryController::class, 'StoreSeizedVh'])->name('seized.vehicle.store');

            Route::get('/seized/release/{id}', [VehicleEntryController::class, 'ReleaseVh'])->name('seized.vehicle.release');

            
            
        });

        //PABNA POLICE STATION vehicles MANAGEMENT ROUTE 

        Route::prefix('pabnaps')->group(function(){

            // ************ Student Registration **************
            
            Route::get('/vehicle/list/view', [PabnaPsController::class, 'ViewVehiclePabnaPs'])->name('pabnaps.vehicle.view');

            Route::get('/seized/vehicle/add', [PabnaPsController::class, 'AddSeizedVhPabnaPs'])->name('pabnaps.seized.vehicle.add');

            Route::post('/seized/vehicle/store', [PabnaPsController::class, 'StoreSeizedVhPabnaPs'])->name('pabnaps.seized.vehicle.store');
            Route::get('/seized/list', [PabnaPsController::class, 'ListVhPabnaPs'])->name('pabnaps.seized.vehicle.list');

            Route::get('/seized/release/{id}', [PabnaPsController::class, 'ReleaseVhPabnaPs'])->name('pabnaps.seized.vehicle.release');

            

            Route::get('/seized/vehicle/edit/{id}', [PabnaPsController::class, 'EditVhPabnaPs'])->name('pabnaps.seized.vehicle.edit');

            Route::post('/seized/vehicle/update/{id}', [PabnaPsController::class, 'UpdateVhPabnaPs'])->name('pabnaps.seized.vehicle.update');

            
           Route::get('/seized/vehicle/delete/{id}', [PabnaPsController::class, 'PabnaPsVhDelete'])->name('pabnaps.seized.vehicle.delete'); 
           
           
           Route::get('/seized/vehicle/date/report', [ReportPabnaPsController::class, 'PabnaPsVhDtReport'])->name('pabnaps.seized.vehicle.group.date');
           Route::get('/seized/vehicle/details/{date}', [ReportPabnaPsController::class, 'DetailsPabnaPsVhDtReport'])->name('pabnaps.seized.vehicle.details');

           Route::get('/seized/vehicle/group/search', [ReportPabnaPsController::class, 'PabnaPsVhGroupReportSearch'])->name('pabnaps.seized.vehicle.search');
         

        //    Route::get('/seized/vehicle/monthly/report', [ReportPabnaPsController::class, 'ViewPabnaPsVhGroupReport'])->name('pabnaps.seized.vehicle.monthly.report');
        
         

    
        });

        Route::get('/pabnaps/daterange', [PabnaPsDaterangeController::class,'index'])->name('pabnaps.seized.vehicle.monthly.report');
        