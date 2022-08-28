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
                </br><br>
               <div class="container p-6  text-light bg-dark">
                <h1 class='text-center text-primary'>Passanger Name</h1>
                <hr/>            
                    @foreach($bus_student as $bus)
                        <b class="text-center">Bus Number : {{ $bus->Bus_no }}</b></br>
                        <h5 class="text-center border">{{ $bus->Student1 }}</h5>
                        <h5 class="text-center border">{{ $bus->Student2 }}</h5>
                        <h5 class="text-center border">{{ $bus->Student3 }}</h5>
                        <h5 class="text-center border">{{ $bus->Student4 }}</h5>
                        <h5 class="text-center border">{{ $bus->Student5 }}</h5>
                        <h5 class="text-center border">{{ $bus->Student6 }}</h5>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
    

</x-staff-layout>
