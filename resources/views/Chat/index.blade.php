@extends('layouts.app')
@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-lg text-center">
                    <h1>
                        Select a user to and start a chat :
                    </h1>
                    <table border="1" class="border-1 border-solid border-black">
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>chat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($users)
                                @foreach ($users as $user)
                                    <tr>
                                        <th>{{ $user->name }}</th>
                                        <th>
                                            <button>chat</button>
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
