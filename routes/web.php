<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});



Route::get('user',['middleware'=>'auth',function (){
	return view('home');}])->middleware('verified');

Route::get('admin',['middleware'=>'auth',function (){
    return view('admin');}])->middleware('verified');






// Route::get('admin', function () {
//      $user = Auth::user();
//      if($user != null){
//          if(($user->is_admin)==1){
//              return view('admin');
//          }else{
//              return view('home');
//          }
//      }else{
//          return view('admin');
//      }
// });














Route::get('logout',function()
{
auth()->logout();
Session()->flush();
return Redirect::to('/home');})->name('logout');










Auth::routes();