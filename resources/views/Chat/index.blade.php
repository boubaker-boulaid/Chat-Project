@extends('layouts.app')
@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" text-gray-900 ">
                    <h1 class="text-lg w-full text-center m-4">
                        Select a user to and start a chat :
                    </h1>
                    <table  class="p-0 m-0 text-center w-full ">
                        <thead class="">
                            <tr class="text-red-600 text-xl">
                                <th>name</th>
                                <th>click to chat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($users)
                                @foreach ($users as $user)
                                    <tr>
                                        <th>{{ $user->name }}</th>
                                        <th>
                                            <a href="{{ route('') }}" class="text-blue-500">chat</a>
                                        </th>
                                    </tr>
                                @endforeach                                
                            @endisset
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
