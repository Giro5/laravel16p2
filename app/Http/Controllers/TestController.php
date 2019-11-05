<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function page()
    {
        return view("test", [
            "text" => "this is my text in variable"
        ]);
    }
}
