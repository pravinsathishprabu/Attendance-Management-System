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
                <div class="p-6 bg-white border-b border-gray-200">
                    <center>
                <form action="{{ route('staff.getatt') }}" method="post">
                    @csrf
                       <select name="subject" class="col-16" style="font-size: 14px;">
                        @foreach ($subjectrep as $sub)
                          <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                        @endforeach
                        </select>
                        <button class="btn btn-warning" type="submit">Load</button>
                </form>
                </center>
            </div>
        </div>
    </div>
    </div>

</x-staff-layout>
