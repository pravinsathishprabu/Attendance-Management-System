<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tablecontroller extends Controller
{
    public function gettable()
    {
        return view('staff.ttable');
    }
    public function getrep(Req $req)
    {
        echo $req->table;
    }
}
