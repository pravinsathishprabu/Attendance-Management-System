<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class StudentAttendanceController extends Controller
{
    public function attendance()
    {
        $student = DB::table('users')->where('email',Auth::guard('web')->user()->email)->get();
        foreach ($student as $students) {
           $user_sub = DB::table('subject')->where('sem','=',$students->sem)->get();
            return view('attendance',compact('user_sub'));
            //echo $students->sem;
            //return $this->subject($user_sub);
        }
    }
    public function date(Request $req){
        $date = $req->date;
        $date_att = DB::table('attendance')->where([
           ['rollno','=',Auth::guard('web')->user()->rollno],
           ['date','=',$date]
        ])->orderBy('date','asc')->get();

        return view('date',compact('date_att','date'));
    }

     public function subject(Request $req){
        $subject = $req->subject;
        $sub_att = DB::table('attendance')->where([
            ['rollno','=',Auth::guard('web')->user()->rollno],
            ['subject','=',$subject]
        ])->orderBy('date', 'asc')->get();

        return view('subject',compact('sub_att','subject'));
    }
}
