<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminMenuController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminTableController;
use App\Http\Controllers\AdminReservationController;


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

Route::get('/', Home::class)->name('home');


Route::get('/order/all',[OrderController::class,'index'])->name('order');
Route::get('/order/{category:category}', [OrderController::class,'show']);


Route::get('/reservation',[TableController::class,'index']);
Route::get('/reservationfilter',[TableController::class,'create']);


Route::get('/reservation/confirm',[CustomerController::class,'create']);
Route::post('/confirmreservation',[CustomerController::class,'store']);


Route::post('/checkout', [StripeController::class, 'checkout'])->name('checkout');
Route::get('/success', [StripeController::class, 'success'])->name('success');


Route::get('/admin/login',[AdminLoginController::class,'index']);
Route::post('/adminlogin',[AdminLoginController::class,'store']);
Route::get('/adminlogout',[AdminLoginController::class,'destroy']);

//-----------------------Admin Controllers--------------------------
Route::get('/admin/menu/category/all',[AdminMenuController::class,'index'])->middleware('auth');
Route::get('/admin/menu/category/{category:category}',[AdminMenuController::class,'show'])->middleware('auth');
Route::get('/admin/menu/create',[AdminMenuController::class,'create'])->middleware('auth');
Route::post('/admincreatemenuitem',[AdminMenuController::class,'store'])->middleware('auth');
Route::patch('/update/{item:name}',[AdminMenuController::class,'update'])->middleware('auth');
Route::delete('/delete/{item:name}',[AdminMenuController::class,'destroy'])->middleware('auth');
Route::get('/edit/{item:name}',[AdminMenuController::class,'edit'])->middleware('auth');


Route::get('/admin/table',[AdminTableController::class,'index'])->middleware('auth');
Route::get('/admin/table/create',[AdminTableController::class,'create'])->middleware('auth');
Route::post('/createtable',[AdminTableController::class,'store'])->middleware('auth');
Route::get('/admin/edit/table/{table:tablenumber}',[AdminTableController::class,'edit'])->middleware('auth');
Route::patch('/update/table/{table:tablenumber}',[AdminTableController::class,'update'])->middleware('auth');
Route::delete('/delete/table/{table:tablenumber}',[AdminTableController::class,'destroy'])->middleware('auth');


Route::get('/admin/reservations',[AdminReservationController::class,'index'])->middleware('auth');
Route::delete('/delete/reservation/{customer:email}',[AdminReservationController::class,'destroy'])->middleware('auth');




