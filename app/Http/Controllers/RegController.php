<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RegController extends Controller
{
    //
    public function page()
    {
        return view("reg");
    }

    public function action(Request $request)
    {
        $reg = $request->all(); //receveing data from user
        //dd($reg);

        //validation - check user data currection
        $validator = Validator::make($reg, [
            "email" => "required|email",
            "login" => "required|min:3|max:10",
            "password" => "required|min:6"
        ]);

        if ($validator->fails()) {
            return "validation error";
        }

        $query = DB::table("users")->insert([
            "id" => null,
            "email" => $reg["email"],
            "login" => $reg["login"],
            "password" => md5($reg["password"])
        ]);

        if (!$query) {
            return "registration error";
        }

        //save result of registration
        Session::put("reg", true);

        return redirect("/reg");
    }
}
