<x-student-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div class="container">
                <div class="row">
                    <div class="col">{{ __('Attendance') }}</div>
                <div class="col">
                    </div>
                </div>
            </div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div style="float:left">
                    <form action="{{ route('date') }}" method="post">
                        @csrf
                        <input type="date" name="date"/>&nbsp;
                        <button class="btn btn-warning" type="submit">
                            Load
                        </button>
                    </form>
                </div>
                    <div class="row" style="float:right;">
                        <form action="{{ route('subject') }}" method="post">
                            @csrf
                        <select name="subject" class="col-16" style="font-size: 14px;">

                        @foreach ($user_sub as $sub)
                          <option class="text-center" style="font-size:14px" value="{{ $sub->sub_name }}">{{ $sub->sub_code }}-{{ $sub->sub_name }}</option>
                      @endforeach
                  </select>
                    
                    <button class="btn btn-warning" type="submit">Load</button>
                    </div><br/><br/>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  
                </div>
            </div>
        </div>
    </div>
</x-student-layout>
