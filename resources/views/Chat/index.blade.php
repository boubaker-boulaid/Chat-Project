@extends('layouts.app')
@section('content')
    {{-- <div class="py-12">
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
                                            <a href="{{ route('chat.show', $user->id) }}" class="text-blue-500">chat</a>
                                        </th>
                                    </tr>
                                @endforeach                                
                            @endisset
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}

    <ul class="list bg-base-100 rounded-box shadow-lg">

        <li class="p-4 pb-2 text-xl opacity-60 tracking-wide">Select a user to and start a chat :</li>
        @isset($users)
            @foreach ($users as $user)
                <li class="list-row">
                    <div class="avatar avatar-online avatar-placeholder">
                        <div class="bg-neutral text-neutral-content w-10 rounded-full">
                            <span class="text-md">AI</span>
                        </div>
                    </div>
                    <div>
                        <div>{{ $user->name }}</div>
                        <div class="text-xs uppercase font-semibold opacity-60">AVALIABLE</div>
                    </div>
                    <div class="">
                      <a href="{{ route('chat.show', $user->id) }}" class="btn bg-[#5EBB2B] text-white border-[#4eaa0c]">
                        <svg aria-label="WeChat logo" width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 32 32">
                            <g fill="white">
                                <path
                                    d="M11.606,3.068C5.031,3.068,0,7.529,0,12.393s4.344,7.681,4.344,7.681l-.706,2.676c-.093,.353,.284,.644,.602,.464l3.173-1.798c1.403,.447,4.381,.59,4.671,.603-.208-.721-.311-1.432-.311-2.095,0-3.754,3.268-9.04,10.532-9.04,.165,0,.331,.004,.496,.011-.965-4.627-5.769-7.827-11.195-7.827Zm-4.327,7.748c-.797,0-1.442-.646-1.442-1.442s.646-1.442,1.442-1.442,1.442,.646,1.442,1.442-.646,1.442-1.442,1.442Zm8.386,0c-.797,0-1.442-.646-1.442-1.442s.646-1.442,1.442-1.442,1.442,.646,1.442,1.442-.646,1.442-1.442,1.442Z">
                                </path>
                                <path
                                    d="M32,19.336c0-4.26-4.998-7.379-9.694-7.379-6.642,0-9.459,4.797-9.459,7.966s2.818,7.966,9.459,7.966c1.469,0,2.762-.211,3.886-.584l2.498,1.585c.197,.125,.447-.052,.394-.279l-.567-2.46c2.36-1.643,3.483-4.234,3.483-6.815Zm-12.73-.81c-.704,0-1.275-.571-1.275-1.275s.571-1.275,1.275-1.275,1.275,.571,1.275,1.275c0,.705-.571,1.275-1.275,1.275Zm6.373,0c-.704,0-1.275-.571-1.275-1.275s.571-1.275,1.275-1.275,1.275,.571,1.275,1.275-.571,1.275-1.275,1.275Z">
                                </path>
                            </g>
                        </svg>
                        CHAT NOW
                    </a>
                    </div>

                    <div class="btn btn-square btn-error w-20 ">
                      <a href="">BLOCK</a>
                    </div>
                    
                </li>
            @endforeach
        @endisset
    </ul>
@endsection
