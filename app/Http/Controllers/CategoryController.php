<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

    function index()
    {

        $cats = ["test"=>"<h1>Foods</h1>", "Drinks", "Electronics"];

        return view("cats", ["categories" =>  $cats ,"name"=> "Doaa"]);

        // return view("cats")
        //     ->with("name", "Doaa")
        //     ->with("categories", $cats);

        // return view("cats")
        //     ->with("name", "Doaa")
        //     ->with(compact("cats"));

        // $name= "ahmed";
        // dd(compact("name"));

    }
}
