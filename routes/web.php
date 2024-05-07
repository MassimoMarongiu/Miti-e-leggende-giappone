<?php

use App\Http\Controllers\Admin\MitiELeggendeController;
use App\Http\Controllers\Admin\MitiELeggendeControllerList;
use App\Http\Controllers\Admin\SardegnaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UploadController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/home', function () {
    return view('/home');
});
Route::get('/', function () {
    return view('/welcome');
});

Route::resource('/mitieleggendegiappone',MitiELeggendeController::class);
Route::resource('/mlg',MitiELeggendeControllerList::class);
Route::resource('/sardegnalayout',SardegnaController::class);
// Route::get('/sardegnalayout/{sardegna}', 'SardegnaController@show');
// Route::get('/sardegnalayout/id',[SardegnaController::class,'show']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/upload',function(){
    return view('upload');
});

Route::post('/upload',[UploadController::class,'upload']);

Route::middleware('auth')->group(function () {
    // Route::resource('/photos',PhotoController::class);
    // Route::resource('/giappones',GiapponeController::class);
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Auth::routes();

