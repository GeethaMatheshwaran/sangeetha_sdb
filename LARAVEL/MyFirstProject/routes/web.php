<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MiniProject\RegisterController;
use App\Http\Controllers\MiniProject\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('home_uri','MiniProject/home');

Route::view('register_uri','MiniProject/register');

Route::view('user_details_list_uri','MiniProject/user_details_list');

Route::view('login_uri','MiniProject/login');

Route::view('logout',[LoginController::class,'logoutss']);

Route::view('welcome_uri','MiniProject/welcome');

Route::view('home','pages.home');

Route::view('about','pages.about');






// Route::post('store_user_details_uri',function(Request $request ){   //class - variable
//     //dd($request->all());   //dd-helper - Dump & Die
//     $get_name= $request->input('name');   //input - method
//     $get_password= $request->input('password');
//     //$get_phone_no= $request->input('phone_no');

//     return "Hi , I'm ".$get_name."  & My password is ".$get_password ;
// });

Route::post('store_user_details_uri',[RegisterController::class,'store_method']);
Route::post('check_user_details_uri',[LoginController::class,'check_method']);

