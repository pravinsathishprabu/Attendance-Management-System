<x-staff-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div class="container">
            	Attendance Report
            </div>
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-dark border-b border-gray-200">
                    <button class="btn btn-primary mb-2" onclick="window.print()" style="float: right;">Export Pdf</button>
                    <table class="table bg-light">
  <thead>
    <tr>
      <th scope="col" class="text-light text-center bg-dark">Roll Number</th>
      <th scope="col" class="text-light text-center bg-dark">Status</th>
      <th scope="col" class="text-light text-center bg-dark">Subject</th>
      <th scope="col" class="text-light text-center bg-dark">Staff</th>
      <th scope="col" class="text-light text-center bg-dark">Period</th>
    </tr>
  </thead>                     
  <tbody>
     @foreach($att_rep as $report)
    <tr>
      <th scope="row">{{ $report->rollno }}</th>
      <td>{{ $report->status }}</td>
      <td>{{ $report->subject }}</td>
      <td>{{ $report->staff }}</td>
      <td>{{ $report->period }}</td>
    </tr>
    @endforeach
  </tbody>
</table>            
            </div>
        </div>
    </div>
    </div>

</x-staff-layout>
