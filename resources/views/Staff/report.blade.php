<x-staff-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div class="container">
                Report
            </div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
               <div class="container p-6 text-center text-light">
                <div class="row">
                   <div class="col">
                   <a href="{{ url('staff/attrep') }}"><h4 style="border:2px solid white;border-radius: 10px;background-color: #0e163a;padding: 30px;">Attendance</h4></a>
                    <a href="{{ url('staff/ttable') }}"><h4 style="border:2px solid white;border-radius: 10px;background-color: #0e163a;padding: 30px;">Time table</h4></a>
                    <!-- <a href=""><h4 style="border:2px solid white;border-radius: 10px;background-color: #0e163a;padding: 30px;">Student profile</h4></a> -->
                   </div>
                   <div class="col">
                    <a href="{{ url('staff/trans_rep') }}"><h4 style="border:2px solid white;border-radius: 10px;background-color: #aa223a;padding: 30px;">Transport</h4></a>
                    <!-- <a href="{{ url('staff/fees') }}"><h4 style="border:2px solid white;border-radius: 10px;background-color: #aa223a;padding: 30px;">Fees payment</h4></a> -->
                    <a href="{{ url('staff/faculty') }}"><h4 style="border:2px solid white;border-radius: 10px;background-color: #aa223a;padding: 30px;">Faculty profile</h4></a>
                   </div>
                   
               </div>
        </div>
    </div>
    

</x-staff-layout>
