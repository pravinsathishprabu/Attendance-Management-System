<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class TtableController extends Controller
{
   public function staff(Request $req){
    $Year = $req->year;
    $sem = $req->sem; 
    $dept = $req->dept;

     $fetch_sub = DB::table('subject')->where([
            ['yos','=',$Year],
            ['sem','=',$sem],
            ['dept','=',$dept]
        ])->get();
    return view('admin.staff',compact('Year','sem','dept','fetch_sub'));
   }
   public function update(Request $req){
     $sub = $req->subject;
     $time= $req->time;
     $day = $req->day;
        dd($sub);
        dd($time);
        dd($day);
   }
}
