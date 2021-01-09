<?php

use Illuminate\Http\Request;
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
    return view('welcome');
});


Route::get("/hello/{name}" , function ($n){
    echo "<h1>Hello $n</h1>";
});

// Route::get("/add/{x}/{y}/{z}" , function ($n1 ,$n2 ,$n3){
//     echo  "$n1 + $n2 +$n3 = " , ($n1+$n2 +$n3);
// });

Route::get("/add/{x}/{y}/{z}" , function (Request $request){
   echo  $request->x ," + " ,$request->y ," + " ,$request->z ," = " , ( $request->x +  $request->y + $request->z);
});

