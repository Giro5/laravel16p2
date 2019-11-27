<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function page()
    {
        return view("auth");
    }

    public function action(Request $request)
    {
        $auth = $request->all();

        $validator = Validator::make($auth, [
            "login" => "required|min:3|max:10",
            "password" => "required|min:6"
        ]);

        if ($validator->fails()) {
            return "validation error";
        }

        $user = DB::table("users")
            ->where([
                ["login", "=", $auth["login"]],
                ["password", "=", md5($auth["password"])]
            ])->get();

        if ($user->count() != 1) {
            return "sign in error";
        }

        Session::put("login", $auth["login"]);
        Session::put("auth", true);

        return redirect("/");
    }
}
