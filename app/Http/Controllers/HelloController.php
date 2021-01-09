<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function hello($name){
        echo "<h1>Hello $name</h1>";
    }
}
