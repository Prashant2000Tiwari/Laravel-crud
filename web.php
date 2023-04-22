<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
// use App\Models\Customer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/demo/{name}/{id?}',function($name,$id=null){
//     echo $name." ";
//     echo $id;
// });

// Route::post('/test',function(){
//     echo "Testing the route";
// });

// Route::any('/test',function(){
//     echo "Testing the route";
// });

// Route::get('/customer',function (){
//     $customers = Customer::all();
//     print_r($customers -> toArray());
// });

Route::get('/customer',[CustomerController::class,'index']);
Route::post('/customer',[CustomerController::class,'store']);
Route::get('/customer/view',[CustomerController::class,'view']);
Route::get('/customer/delete/{id}',[CustomerController::class,'delete']);
Route::get('/customer/edit/{id}',[CustomerController::class,'edit']);
Route::post('/customer/update/{id}',[CustomerController::class,'update']);