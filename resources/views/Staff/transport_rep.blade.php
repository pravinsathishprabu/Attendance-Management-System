<x-staff-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div class="container">
                Transport Report
            </div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <button class="btn btn-primary mb-2" onclick="window.print()" style="float: right;">Export Pdf</button>

                <form action="{{ route('staff.getbus') }}" method="post">
                    @csrf
                    <select name="transport" >
                        @foreach($transrep as $rep)
                        <option>{{ $rep->Bus_No }}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-primary">Submit</button>
                </form>
                
               <div class="container p-6 text-center text-light">
                    <table class="table bg-dark">
                      <thead>
                        <tr>
                          <th scope="col" class="text-light text-center bg-dark">Bus Number</th>
                          <th scope="col" class="text-light text-center bg-dark">Pickup Point</th>
                          <th scope="col" class="text-light text-center bg-dark">Student Count</th>
                          <th scope="col" class="text-light text-center bg-dark">
                          Bus Coordinator</th>
                          <th scope="col" class="text-light text-center bg-dark">Pickup Time</th>
                        </tr>
                      </thead>                     
                      <tbody>
                         @foreach($transrep as $report)
                        <tr>
                          <th scope="row">{{ $report->Bus_No }}</th>
                          <td>{{ $report->Pickup_point }}</td>
                          <td>{{ $report->student_count }}</td>
                          <td>{{ $report->bus_coordinate }}</td>
                          <td>{{ $report->time }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>            


                </div>
            </div>
        </div>
    </div>
    

</x-staff-layout>
