<x-staff-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div class="container">
                <div class="subject row">
                    <div class="col">{{ __('Attendance') }}</div>
                <div class="col">
                <form action="{{ route('staff.subject') }}" method="post">
                    @csrf
                  <select name="subject" class="col-8" style="font-size: 14px;">
                      <option  class="text-center" style="font-size:14px" value="{{ Auth::guard('staff')->user()->sub1}}">{{ Auth::guard('staff')->user()->sub1}}</option>
                      <option  class="text-center" style="font-size:14px" value="{{ Auth::guard('staff')->user()->sub2}}">{{ Auth::guard('staff')->user()->sub2}}</option>
                      <option  class="text-center" style="font-size:14px" value="{{ Auth::guard('staff')->user()->sub3}}">{{ Auth::guard('staff')->user()->sub3}}</option>
                  </select>
                    <button class="btn btn-warning" type="submit">Load</button></form>
                    </div>
                </div>
            </div>
           
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200">
                    <form action="{{ route('staff.store') }}" method="post">
                        @csrf
                        <h6 class="text-primary text-center" style="font-style: bold;">SUBJECT : {{ $subject->sub_name }}</h6>
                        <hr/>
                        <h6 class="text-primary text-center" style="font-style: bold;">
                            LAST UPDATED ON : 
                       <b class="text-dark">
                            @foreach ($last_update as $lupdate)
                            {{ $lupdate->update }}
                            <b class="text-primary ml-2"> Period : </b>{{ $lupdate->period }}
                        @endforeach
                    </b>
                    </h6>
                        <hr/>

                        
                        <input type="hidden" name="subject" value="{{ $subject->sub_name }}">
                    <div class="row" style="border-bottom:2px dashed brown;padding: 10px;">

                    <div class="col"><strong class="text-primary">STUDENTS NAME </strong>
                       <!-- <input type="date" name="date" style="float:right;margin-left: 10px;">-->
                        <select  style="float:right" name="period">
                            <option selected disabled hidden value="none">Period</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>
                    <div class="col-4">
                        
                      <b class="bg-success text-light btn ml-2" onclick="select()" >P</b>
                      <b class="bg-danger text-light btn ml-2" onclick="leave()" >A</b>
                   
                    </div>
                    </div>
                 <br/>
                        
                        @foreach ($students_fetch as $students)
                         <div class="row">
                            <div class="col"><h5 style="font-size: 16px">
                                <b class="border p-2">{{$students->sno}}</b><b style="margin-left: 10px">{{ $students->name }}</b></h5></div>
                            <div class="col">
                                <center>
                                    <input type="checkbox" name="checkbox[]"  style="width:20px;height:20px;margin-left: 20px" value="{{ $students->rollno }}">
                                    <input type="checkbox" name="leave[]" style="width:20px;height:20px;margin-left: 20px" value="{{ $students->rollno }}">
                                <div class="od" style="float:right">
                                <input type="checkbox" name="od[]" value="{{$students->rollno }}" />&nbsp;<label class="text-warning">OD</label>&nbsp;&nbsp;
                                 <input type="checkbox" name="late[]" value="{{$students->rollno }}"/>&nbsp;<label class="text-danger">LATE</label></div>
                            </center>
                            </div>

                            <br/>
                        </div><hr style="background-color: black;color: black;">
                        @endforeach
                        <hr/>
                        <center>
                            <button class="btn btn-primary" type="submit">Save & Finalize</button>
                        </center>
                    </form>
                         
            </div>
        </div>
    </div>
    <script type="text/javascript">
      function select(){  
                var ele=document.getElementsByName('checkbox[]');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=true;  
                }  
            }   
</script>

</x-staff-layout>
