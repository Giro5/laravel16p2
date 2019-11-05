<?php

namespace App\Http\Controllers;

use App\CatalogModel;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function page()
    {
        return view("catalog", [
            "result" => CatalogModel::_all()
        ]);
    }
}
