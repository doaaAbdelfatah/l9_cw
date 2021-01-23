<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get("/cats" ,[CategoryController::class , "index"])->name("cats.index");
Route::post("/cats/add" ,[CategoryController::class , "store"]);
Route::get("/cats/show" ,[CategoryController::class , "show"]);

Route::get("/welcome/{name}" , function ($name){
    return "Welcome $name";
})->where("name" ,"[A-Z]{1}[a-z ]+");

Route::view('/hi', 'hello' ,["name" =>"ahmed"]);

Route::get('/add/{x}/{y}', function (Request $request) {
        $n1 = $request->x;
        $n2 = $request->y;
        echo "$n1 + $n2 = " , ($n1 +$n2);
       dd( $request->routeIs("add.*"));
})->name("add.index");

Route::prefix("/product")->group(function(){
    Route::get("/" ,[ProductController::class , "index"])->name("product.index");
    Route::get("/add" ,[ProductController::class , "create"]);
    Route::post("/add" ,[ProductController::class , "store"]);
    Route::get("/edit/{id}" ,[ProductController::class , "edit"]);
    Route::post("/edit/{id}" ,[ProductController::class , "update"]);
    Route::post("/delete/{id}" ,[ProductController::class , "destroy"]);
    // Route::get("/{id}/order/{order}" ,[ProductController::class , "show"])
    //     ->where("id" , "[0-9]{1}")
    //     ->where("order" , "[0-9]{2}");
     Route::get("/{id}/order/{order}" ,[ProductController::class , "show"])
        ->where(["id" => "[0-9]{1}" , "order" => "[0-9]{2}"]);
});

Route::get('/search/{key}', function ($key) {
    return $key;
})->where('key', '.*');



// Route::get("/brands" ,function(){
//     // dd(Brand::all());
// //    dd( DB::table('brands')->get());
// });


Route::prefix("/brands" )->group(function(){
    Route::get("/" , [BrandController::class , "index"])->name("brands.index");
    Route::post("/" , [BrandController::class , "store"]);
    Route::get("/delete/{id}" , [BrandController::class , "destroy"]);
});




