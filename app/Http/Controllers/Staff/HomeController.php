<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\Staff;
//use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('staff.dashboard');
    }
    public function attendance()
    {
        
        $user = DB::table('staff')->where('email',Auth::guard('staff')->user()->email)->get();

        
       return view('staff.attendance');
    }
    public function student()
    {
        // code...
        return view('staff.students');
    }                 
    }

