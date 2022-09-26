<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

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
    if(auth::user()){
    return redirect('dashboard');
    }
    return view('welcome');
});

//login

route::post('/login',[loginController::class,'login'])->name('login');
route::get('/logout',[loginController::class,'logout'])->name('logout');


//google auth


Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/google',[GoogleController::class,'redirectToGoogle']);
Route::get('auth/google/callback',[GoogleController::class,'handleGoogleCallback']);

// register user
route::view('register','register');
route::post('/register_user',[loginController::class,'register'])->name('register');
route::view('partner','partner');
route::post('/partner_info',[loginController::class,'partner_info'])->name('partner_info');



//protect pages

route::group(['middleware'=>['protectpage']],function(){

    route::get('dashboard',[dashboardController::class,'dashboard']); 
    route::post('addPlan',[dashboardController::class,'addPlan']);
    route::post('editPlan',[dashboardController::class,'editPlan']);
    route::post('updatePlan',[dashboardController::class,'updatePlan']);
    route::post('deletePlan',[dashboardController::class,'deletePlan']); 

    // sort by filter//
    route::get('sort_by_male',[dashboardController::class,'sort_by_male'])->name('sort_by_male'); 
    route::get('sort_by_female',[dashboardController::class,'sort_by_female']); 
    route::get('sort_by_nuclear',[dashboardController::class,'sort_by_nuclear']);
    route::get('sort_by_joint',[dashboardController::class,'sort_by_joint']);
    route::get('sort_by_yes',[dashboardController::class,'sort_by_yes']);
    route::get('sort_by_no',[dashboardController::class,'sort_by_no']);
    route::post('income_range',[dashboardController::class,'income_range']);
    route::post('age',[dashboardController::class,'age']);
    
    
});

