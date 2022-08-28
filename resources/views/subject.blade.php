<x-student-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div class="container">
                <div class="row">
                    <div class="col">{{ __('Attendance') }}</div>
                <div class="col">
                    </div>
                </div>
            </div>
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto  sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-warning border-b border-gray-200">
               <a href='attendance' class="btn btn-info">Back</a>
                    <div class="row p-2 text-light" style="float: right;">
                    	SUBJECT NAME : &nbsp;<b class="text-dark"> {{ $subject }}</b>
                       </div>
            </div>
        </div>
    </div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <h3 class="text-warning bg-dark text-center" style="font-size:20px;border-radius:10px;padding: 10px;">Attendance</h3>
                 <table class="table">
					  <tr>
                        <th class="text-success" scope="col">Date</th>
					    <th class="text-success" scope="col">Attendance Status</th>
					    <th class="text-success" scope="col">Staff</th>
                        <th class="text-success" scope="col">Period</th>
					  </tr>
					   @foreach ($sub_att as $attendance)
					  <tr>
                        <td>{{ $attendance->date }}</td>
					    <td>{{$attendance->status}}</td>
					    <td>{{ $attendance->staff }}</td>
                        <td>{{ $attendance->period }}</td>
					  </tr>
					  @endforeach
                     </table>
                </div>
            </div>
        </div>
    </div>    

</x-student-layout>

