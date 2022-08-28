<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use Carbon\Carbon;

class StudentController extends Controller
{
    public function subject(Request $req){
        $subject = DB::table('subject')->where('sub_name',$req->subject)->get();
        $last_update = DB::table('lupdate')
                        ->where('subject',$req->subject)
                        ->orderByDesc('update')->limit(1)->get();
        foreach ($subject as $subject) {
                   $students_fetch = DB::table('users')->where([
                    ['sem','=',$subject->sem],
                    ['dept','=',$subject->dept]
                   ])->get();
                   return view('staff.students',compact('students_fetch','subject','last_update'));
               }
    }
    public function store(Request $req){
       
        $period = $req->period;
        $subject = $req->subject;
        $date = Carbon::now()->toDateString();
            if (!empty($req->input('checkbox'))) {
                if (empty($period)) {
                    return view('staff.failure');
                }
                else{
                $insert = [];
                
                foreach($req->input('checkbox') as $key=>$value){
                    array_push($insert, [
                            'rollno'=>$value,
                            'status'=>'Present',
                            'period'=>$period,
                            'staff'=>Auth::guard('staff')->user()->name,
                            'subject'=>$subject,
                            'value'=>'1',
                            'date'=>$date
                        ]);
            }  
                DB::table('attendance')->insert($insert);
             
             $reqlate = $req->input('late');
             $reqod = $req->input('od');
             $abs = $req->input('leave');
               $a = $this->late($reqlate,$period,$subject,$date);
               $b = $this->od($reqod,$period,$subject,$date);
               $c = $this->update($period,$subject);
               $d = $this->absent($abs,$subject,$period,$date);
               $e = $this->day($subject,$date);

             if (!empty($reqlate and $reqod)) {
                 return $a and $b and $c and $d and $e ;
             }
             elseif (!empty($reqlate)) {
                  return $a and $c and $d and $e;
             }
             elseif (!empty($reqod)) {
                  return $b and $c and $d and $e;
             }
             else{
                echo "<script>window.open('success','_self')</script>";
             }
             //$a = $this->late($reqlate,$period,$subject,$date);
            // $b = $this->od($reqod,$period,$subject,$date);

            // return$a and $b;

             echo "<script>window.open('success','_self')</script>";
             //return $this->late($reqlate,$period,$subject,$date);
             //return $this->od($reqod,$period,$subject,$date);
            }
        }
}
public function late($reqlate,$period,$subject,$date){
   if(!empty($reqlate)){
            $late =[];
                foreach($reqlate as $lateip){
                   array_push($late, [
                            'rollno'=>$lateip,
                            'status'=>'Late',
                            'period'=>$period,
                            'staff'=>Auth::guard('staff')->user()->name,
                            'subject'=>$subject,
                            'value'=> '1',
                            'date'=>$date
                        ]);
            }
            //dd($late);
            DB::table('attendance')->insert($late);
            echo "<script>window.open('success','_self')</script>";
        }

     }

     public function od($reqod,$period,$subject,$date){       
        if(!empty($reqod)){
            $od =[];
                foreach($reqod as $odip){
                   array_push($od, [
                            'rollno'=>$odip,
                            'status'=>'OD',
                            'period'=>$period,
                            'staff'=>Auth::guard('staff')->user()->name,
                            'subject'=>$subject,
                            'value'=> '1',
                            'date'=>$date
                        ]);
            }
            //dd($od);
            DB::table('attendance')->insert($od);
            echo "<script>window.open('success','_self')</script>";
        }
     }
public function day($subject){
        $subject_data = DB::table('day')->where('subject',$subject)->get();
        
         if ($subject_data == null) {
            $update_sub=array("subject"=>$subject,"total_hours"=>'1');
            DB::table('day')->insert($update_sub);
        }
        else{
           foreach($subject_data as $data){
               $update_sub=array("subject"=>$subject,"total_hours"=>$data->total_hours+1);
               DB::table('day')->update($update_sub);
            }
     }
}
     public function update($period,$subject)
     {
        $update_data=array("period"=>$period,"update"=>Carbon::now(),"subject"=>$subject);
         DB::table('lupdate')->insert($update_data);

     }
     public function absent($abs,$subject,$period,$date){
        $absent = [];
            if(!empty($abs)){
                foreach($abs as $a){
                    array_push($absent, [
                            'rollno'=>$a,
                            'status'=>'Absent',
                            'period'=>$period,
                            'staff'=>Auth::guard('staff')->user()->name,
                            'subject'=>$subject,
                            'value'=> '0',
                            'date'=>$date
                        ]);
            }  
                DB::table('attendance')->insert($absent);
            }
     }

     public function repatt()
     {
         $subjectrep = DB::table('subject')->get();
         return view('staff/attrep',compact('subjectrep'));
     }
     public function getatt(Request $req)
     {
        $date = Carbon::now()->toDateString();
        $att_rep = DB::table('attendance')->where([
                    ['subject','=',$req->subject],
                    ['date','=',$date]
                   ])->get();
      return view('staff/getreport',compact('att_rep'));  
    }
    public function reptrans()
    {
        $transrep = DB::table('bus')->get();
        return view('staff/transport_rep',compact('transrep'));    
    }
    public function getbus(Request $req)
    {
        $bus = DB::table('bus')->where('Bus_No',$req->transport)->get();
        foreach($bus as $bus){
            $bus_student = DB::table('studentbus')->where('Bus_no',$bus->Bus_No)->get();
        
        return view('staff/getbus',compact('bus_student','bus'));
        }

    }
}

