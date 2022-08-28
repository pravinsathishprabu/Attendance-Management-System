<x-staff-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div class="container">
                Faculty Report
            </div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
               <div class="container p-6 text-center text-dark">
                <form action="{{ route('staff.getdetails') }}" method="post">
                    @csrf
                <select name="faculty">
                    @foreach($faculty as $faculty)
                    <option value="{{ $faculty-> name }}">{{ $faculty-> name }}</option>
                    @endforeach
                </select>
                <button class="btn btn-warning">Load</button>
            </form>
            </div>
           </div>
        </div>
    </div>
    

</x-staff-layout>
