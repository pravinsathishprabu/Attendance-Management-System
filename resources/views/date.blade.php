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
                    	CHOOSING DATE : &nbsp;<b class="text-dark"> {{ $date }}</b>
                       </div>

            </div>
        </div>
    </div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <h5 class="text-warning">Attendance</h5>
                 <table class="table">
					  <tr>
                        <th class="text-success" scope="col">Subject</th>
                        <th class="text-success" scope="col">Period</th>
					    <th class="text-success" scope="col">Attendance Status</th>
					    <th class="text-success" scope="col">Staff</th>
					  </tr>
					 @foreach ($date_att as $date)
					 	<tr>
						 	<td>{{ $date->subject }}</td>
						 	<td>{{ $date->period }}</td>
						    <td>{{$date->status}}</td>
						    <td>{{ $date->staff }}</td>
					 	</tr>
					 @endforeach
                     </table>
                </div>
            </div>
        </div>
    </div>
</x-student-layout>
