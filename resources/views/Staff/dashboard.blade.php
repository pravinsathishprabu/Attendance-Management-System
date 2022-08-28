<x-staff-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <center>Welcome <b>{{ Auth::guard('staff')->user()->name}}&nbsp;{{Auth::guard('staff')->user()->designation}}</b></center>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <div class="col">
                            <br/>
                            <center><img src="{{ asset('asset/img/graduated.png')}}" style="border-radius: 10px;width:200px;height: 200px;background-color: white;padding:5px;"></center><br>
                        </div>
                        <div class="col bg-dark text-light" style="border:1px solid black;border-radius: 10px;padding: 10px;">
                            <div>

                       <label class="text-primary">Faculty Name</label>
                       <strong style="float:right">{{ Auth::guard('staff')->user()->name}}</strong>
                   </div>
                   <hr style="color: white;background-color:white;" />
                    <div>
                       <label class="text-primary">Email</label>
                       <strong style="float:right">{{ Auth::guard('staff')->user()->email}}</strong>
                   </div>
                   <hr style="color: white;background-color:white;" />
                   <div>
                       <label class="text-primary">Department</label>
                       <strong style="float:right">{{ Auth::guard('staff')->user()->dept}}</strong>
                   </div>
                   <hr style="color: white;background-color:white;" />
                   <div>
                       <label class="text-primary">Designation</label>
                       <strong style="float:right">{{ Auth::guard('staff')->user()->designation}}</strong>
                   </div>
                   <hr style="color: white;background-color:white;" />
                   <div>
                       <label class="text-primary">Type</label>
                       <strong style="float:right">{{ Auth::guard('staff')->user()->type}}</strong>
                   </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</x-staff-layout>
