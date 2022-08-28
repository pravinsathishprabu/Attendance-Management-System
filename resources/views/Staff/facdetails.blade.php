<x-staff-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div class="container">
                Faculty Report
            </div>
        </h2>
    </x-slot>
    <button class="btn btn-primary mb-2 mt-2 ml-2 mr-2" onclick="window.print()" style="float: right;">Export Pdf</button>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
               <div class="container p-6 bg-dark text-light">
                    @foreach($details as $details)
                        <h3 class="text-center text-warning">Faculty Details</h3>
                        <hr/>
                         <center><img src="{{ asset('asset/img/graduated.png')}}" style="border-radius: 10px;width:150px;height: 150px;background-color: white;padding:10px"></center><br>
                        <h6 class="text-center border p-6">FACULTY NAME : {{ $details->name }}</h6>
                        <h6 class="text-center border p-6">EMAIL ADDRESS : {{ $details->email }}</h6>
                        <h6 class="text-center border p-6">DEPARTMENT : {{ $details->dept }}</h6>
                        <h6 class="text-center border p-6">DESIGNATION  : {{ $details->designation }}</h6>
                        <div class="border p-6">
                        <h6 class="text-center text-warning">HANDLING SUBJECT</h6>
                        <h6 class="text-center">{{ $details->sub1 }}</h6>
                        <h6 class="text-center">{{ $details->sub2 }}</h6>
                        <h6 class="text-center">{{ $details->sub3 }}</h6>
                    </div>
                    @endforeach<br><br>
                  </div> 
               </div>
        </div>
    </div>
    

</x-staff-layout>
