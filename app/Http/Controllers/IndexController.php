<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function page()
    {
        $text = "My first page";
        return view("index", [
            "myVar" => $text,
            "text" => "Group 16p-2"
        ]);
    }
}
