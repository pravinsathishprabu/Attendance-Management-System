<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ReportController extends Controller
{
   public function faculty()
   {
   	$faculty = DB::table('staff')->get();
   	return view('staff.facultyrep',compact('faculty'));
   }
   public function getstaff(Request $req)
   {
   	  $details = DB::table('staff')->where('name',$req->faculty)->get();
   	  return view('staff.facdetails',compact('details'));
   }  
   
   public function ttable()
   {
   	 return view('staff.ttable');
   }
   public function reptable(Request $req){
   	  switch ($req->get('table')) {
        case '1':
            echo "string";
            break;
        case '2':
            echo "string2";
            break;
    }
   }
}
