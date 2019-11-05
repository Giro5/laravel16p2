<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CatalogModel extends Model
{
    static public function _all()
    {
        $cards = DB::table("catalog")
            ->select(["*"])
            ->get();
        return $cards->all();
    }

    static public function _sql_all()
    {
        $cards = DB::select("select * from catalog where id = ?", [1]);

        return $cards;
    }
}
