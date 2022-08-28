<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('TimeTable') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                 <div class="bg-white border-b border-gray-200">
                   <div class="container" style="border: 5px double black;">
                       
                        <form action="{{ route('admin.staff') }}" method="post" class="row">
                            @csrf
                           <div class="col p-3">
                            <label class="text-primary">Year</label><br/>
                                <select name="year" id="year" class="form-control ml-3 dynamic" style="width:300px;float:right;">
                                    <option disabled selected value>Select Year</option>
                                    <option value='II'>II Year</option>
                                    <option value="III">III Year</option>
                                    <option value="IV">IV Year</option>
                                </select>
                           </div>
                           <div class="col p-3">
                               <label class="text-primary">Semester</label>
                                <select name="sem" id="sem" class="form-control ml-3 dynamic" style="width:300px;float: right;">
                                    <option disabled selected value>Select Semester</option>
                                    <option value="III">III</option>
                                    <option value="IV">IV</option>
                                    <option value='V'>V</option>
                                    <option value='VI'>VI</option>
                                    <option value="VII">VII</option>
                                    <option value="VIII">VIII</option>
                                </select>
                       </div>
                       <div class="col p-3">
                               <label class="text-primary">Department</label>
                                <select name="dept" id="dept" class="form-control ml-3 dynamic" style="width:300px;float: right;">
                                    <option disabled selected value>Select department</option>
                                    <option value="IT">IT</option>
                                    <option value="CSE">CSE</option>
                                </select>
                       </div>
                       <div class="col" style="padding: 10px;">
                        <center>
                       <button class="btn btn-info" style="margin-top: 30px;">Load</button></center>
                        </div>
                   </form>
                   </div>

                   <br/>
                   <table class="table">
                       <tr>
                           <th>Time</th>
                           <th>Monday</th>
                           <th>Tuesday</th>
                           <th>Wednesday</th>
                           <th>Thursday</th>
                           <th>Friday</th>
                           <th>Saturday</th>
                           <th>Sunday</th>
                       </tr>
                       <tr>
                           <th>09.10-10.00</th>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                       </tr>
                       <tr>
                           <th>10.00-10.50</th>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                       </tr>
                    <tr>
                           <th>10.50-11.00</th>
                           <th colspan="7" class="text-center bg-dark text-light">First Break</th>
                       </tr>
                       <tr>
                           <th>11.00-11.50</th>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                       </tr>
                       <tr>
                           <th>11.50-12.40</th>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                       </tr>
                       <tr>
                           <th>12.40-1.30</th>
                           <th colspan="7" class="text-center bg-dark text-light">Lunch Break</th>
                       </tr>
                       <tr>
                           <th>01.30-02.15</th>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                       </tr>
                       <tr>
                           <th>02.15-03.00</th>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                       </tr>
                       <tr>
                           <th>03.00-3.15</th>
                           <th colspan="7" class="text-center bg-dark text-light">Second Break</th>
                       </tr>
                       <tr>
                           <th>03.15-04.00</th>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                       </tr>
                       <tr>
                           <th>04.00-4.45</th>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                       </tr>
                   </table>
                </div>
            </div>
        </div>
    </div>
<!--script-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>


</x-admin-layout>
