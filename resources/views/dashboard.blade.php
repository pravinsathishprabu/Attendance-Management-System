<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                     <center>Welcome <b>{{ Auth::guard('web')->user()->name}}</b></center>
                </div>
                 <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <div class="col"><br><br>
                            <center><img src="{{ asset('asset/img/graduated.png')}}" style="border-radius: 10px;width:200px;height: 200px;padding:5px;" class="bg-primary"></center><br>
                        </div>
                        <div class="col bg-dark text-light" style="border:1px solid black;border-radius: 10px;padding: 10px;">
                            <div>
                       <label class="text-primary">Student Name</label>
                       <strong style="float:right">{{ Auth::guard('web')->user()->name}}</strong>
                   </div>
                   <hr style="color: white;background-color:white;" />
                    <div>
                       <label class="text-primary">Email</label>
                       <strong style="float:right">{{ Auth::guard('web')->user()->email}}</strong>
                   </div>
                   <hr style="color: white;background-color:white;" />
                   <div>
                       <label class="text-primary">Department</label>
                       <strong style="float:right">{{ Auth::guard('web')->user()->dept}}</strong>
                   </div>
                   <hr style="color: white;background-color:white;" />
                   <div>
                       <label class="text-primary">Examination Number</label>
                       <strong style="float:right">{{ Auth::guard('web')->user()->rollno}}</strong>
                   </div>
                   <hr style="color: white;background-color:white;" />
                   <div>
                       <label class="text-primary">Semester</label>
                       <strong style="float:right">{{ Auth::guard('web')->user()->sem}}</strong>
                   </div>
                        </div>
                    </div>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
