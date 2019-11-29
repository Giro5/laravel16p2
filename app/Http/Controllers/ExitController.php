<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ExitController extends Controller
{
    public function page()
    {
        Session::put("auth", false);
        session::put("login", null);

        return redirect("/");
    }
}
