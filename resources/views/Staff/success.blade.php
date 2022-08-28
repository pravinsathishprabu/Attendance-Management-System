<x-staff-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div class="container">
            	<div class="subject row">
            		<div class="col">{{ __('Attendance') }}</div>
            	<div class="col">
                <form action="{{ route('staff.subject') }}" method="post">
                    @csrf
            	  
                  <select name="subject" class="col-8" style="font-size: 14px;">
                      <option  class="text-center" style="font-size:14px" value="{{ Auth::guard('staff')->user()->sub1}}">{{ Auth::guard('staff')->user()->sub1}}</option>
                      <option  class="text-center" style="font-size:14px" value="{{ Auth::guard('staff')->user()->sub2}}">{{ Auth::guard('staff')->user()->sub2}}</option>
                      <option  class="text-center" style="font-size:14px" value="{{ Auth::guard('staff')->user()->sub3}}">{{ Auth::guard('staff')->user()->sub3}}</option>
                  </select>
                    
                  
                    <button class="btn btn-warning" type="submit">Load</button></form>
            		</div>
            	</div>
            </div>
           
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-success text-light text-center border-b border-gray-200">
                   Success
                  
            </div>
        </div>
    </div>
    

</x-staff-layout>
