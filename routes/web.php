<?php
use App\http\Controllers\CobaController;
use App\http\Controllers\jobController;
use App\http\Controllers\PendidikanController;
use App\http\Controllers\tarifController;
use Illuminate\Support\Facades\Route;

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
route::get('/beranda', function(){
    return view ('welcome');
});
route::get('', [CobaController::class, "index"]);
route::get('', [jobController::class, "index"]);
route::get('', [PendidikanController::class, "index"]);
route::get('', [tarifController::class, "index"]);

route::resource('lokers', CobaController::class);
route::resource('jobs', jobController::class);  
route::resource('educations', PendidikanController::class);      
route::resource('tarifs', tarifController::class);   