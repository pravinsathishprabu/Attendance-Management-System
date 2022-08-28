<x-staff-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div class="container">
            	Timetable Report
            </div>
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-dark border-b border-gray-200 text-center text-dark">
                    <form action="{{ route('staff.tablerep') }}" method="post">
                        @csrf
                    <select name="table" class="col-4">
                        <option value="1">I year</option>
                        <option value="2">II year</option>
                        <option value="3">III year</option>
                        <option value="4">IV year</option>
                    </select>
                    <button class="btn btn-warning">submit</button> 
                    
                </div>
            </div>
        </div>
    </div>

</x-staff-layout>