<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center" >
            <a href="timetable" class="btn btn-info" style="float: left;">Back</a>
            
            <b class="text-primary">Year </b>: {{ $Year }}&nbsp;&nbsp; <b class="text-primary">Semester </b>: {{ $sem }} &nbsp;&nbsp; <b class="text-primary">Department </b>: {{ $dept }}</b> 
        
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                 <div class="bg-white border-b border-gray-200">
                  <br/>
                  <form action="{{ route('admin.update') }}" method="post">
                    @csrf
                   <table class="table">
                       <tr>
                           <th>Time</th>
                           <th>Monday</th>
                           <th>Tuesday</th>
                           <th>Wednesday</th>
                           <th>Thursday</th>
                           <th>Friday</th>
                       </tr>
                       <tr>
                           <th>09.10-10.00</th>
                           <td>
                            <input type="text" name="time" hidden value="09.10-10.00"/>
                            <input type="text" name="day" hidden value="Monday"/>
                              <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="09.10-10.00"/>
                             <input type="text" name="day" hidden value="Tuesday"/>
                              <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="09.10-10.00"/>
                             <input type="text" name="day" hidden value="Wednesday"/>
                              <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                             </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="09.10-10.00"/>
                             <input type="text" name="day" hidden value="Thursday"/>
                              <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="09.10-10.00"/>
                             <input type="text" name="day" hidden value="Friday"/>
                              <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                             </select>
                           </td>
                       </tr>
                       <tr>
                           <th>10.00-10.50</th>
                           <td>
                             <input type="text" name="time" hidden value="10.00-10.50"/>
                             <input type="text" name="day" hidden value="Monday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="10.00-10.50"/>
                             <input type="text" name="day" hidden value="Tuesday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="10.00-10.50"/>
                             <input type="text" name="day" hidden value="Wednesday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="10.00-10.50"/>
                             <input type="text" name="day" hidden value="Thursday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="10.00-10.50"/>
                             <input type="text" name="day" hidden value="Friday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                       </tr>
                    <tr>
                           <th>10.50-11.00</th>
                           <th colspan="7" class="text-center bg-dark text-light">Tea Break</th>
                       </tr>
                       <tr>
                           <th>11.00-11.50</th>
                           <td>
                             <input type="text" name="time" hidden value="11.00-11.50"/>
                             <input type="text" name="day" hidden value="Monday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="11.00-11.50"/>
                             <input type="text" name="day" hidden value="Tuesday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="11.00-11.50"/>
                             <input type="text" name="day" hidden value="Wednesday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="11.00-11.50"/>
                             <input type="text" name="day" hidden value="Thursday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="11.00-11.50"/>
                             <input type="text" name="day" hidden value="Friday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                       </tr>
                       <tr>
                           <th>11.50-12.40</th>
                           <td>
                             <input type="text" name="time" hidden value="11.50-12.40"/>
                             <input type="text" name="day" hidden value="Monday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="11.50-12.40"/>
                             <input type="text" name="day" hidden value="Tuesday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="11.50-12.40"/>
                             <input type="text" name="day" hidden value="Wednesday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="11.50-12.40"/>
                             <input type="text" name="day" hidden value="Thursday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="11.50-12.40"/>
                             <input type="text" name="day" hidden value="Friday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                       </tr>
                       <tr>
                           <th>12.40-1.30</th>
                           <th colspan="7" class="text-center bg-dark text-light">Lunch Break</th>
                       </tr>
                       <tr>
                           <th>01.30-02.15</th>
                           <td>
                             <input type="text" name="time" hidden value="01.30-02.15"/>
                             <input type="text" name="day" hidden value="Monday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="01.30-02.15"/>
                             <input type="text" name="day" hidden value="Tuesday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="01.30-02.15"/>
                             <input type="text" name="day" hidden value="Wednesday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="01.30-02.15"/>
                             <input type="text" name="day" hidden value="Thursday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="01.30-02.15"/>
                             <input type="text" name="day" hidden value="Friday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                       </tr>
                       <tr>
                           <th>02.15-03.00</th>
                           <td>
                             <input type="text" name="time" hidden value="02.15-03.00"/>
                             <input type="text" name="day" hidden value="Monday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="02.15-03.00"/>
                             <input type="text" name="day" hidden value="Tuesday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="02.15-03.00"/>
                             <input type="text" name="day" hidden value="Wednesday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="02.15-03.00"/>
                             <input type="text" name="day" hidden value="Thursday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="02.15-03.00"/>
                             <input type="text" name="day" hidden value="Friday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                       </tr>
                       <tr>
                           <th>03.00-3.15</th>
                           <th colspan="7" class="text-center bg-dark text-light">Tea Break</th>
                       </tr>
                       <tr>
                           <th>03.15-04.00</th>
                           <td>
                             <input type="text" name="time" hidden value="03.15-04.00"/>
                             <input type="text" name="day" hidden value="Monday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="03.15-04.00"/>
                             <input type="text" name="day" hidden value="Tuesday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="03.15-04.00"/>
                             <input type="text" name="day" hidden value="Wednesday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="03.15-04.00"/>
                             <input type="text" name="day" hidden value="Thursday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="03.15-04.00"/>
                             <input type="text" name="day" hidden value="Friday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                       </tr>
                       <tr>
                           <th>04.00-4.45</th>
                           <td>
                             <input type="text" name="time" hidden value="04.00-4.45"/>
                             <input type="text" name="day" hidden value="Monday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="04.00-4.45"/>
                             <input type="text" name="day" hidden value="Tuesday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="04.00-4.45"/>
                             <input type="text" name="day" hidden value="Wednesday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="04.00-4.45"/>
                             <input type="text" name="day" hidden value="Thursday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                           <td>
                             <input type="text" name="time" hidden value="04.00-4.45"/>
                             <input type="text" name="day" hidden value="Friday"/>
                               <select name="subject" style="font-size: 14px;width:100%">
                                <option selected disabled>Select</option>
                                @foreach ($fetch_sub as $sub)
                                  <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                                @endforeach
                              </select>
                           </td>
                       </tr>
                   </table>
                   <center>
                   <button class="btn btn-primary" type="submit">Update</button></center>
               </form>
                   
                </div>
            </div>
        </div>
    </div>
<!--script-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>


</x-admin-layout>
