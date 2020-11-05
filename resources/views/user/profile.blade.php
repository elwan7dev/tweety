@extends('layouts.app')

@section('content')

    <header class="relative mb-4">
        <img src="/images/default-profile-banner.jpg"
             alt="profile-banner"
             class="rounded-xl mb-4">

{{--        user description--}}
        <div class="flex justify-between mb-4 items-center">
            <div>
                <h2 class="font-bold text-xl ">{{$user->name}}</h2>
                <p class="text-sm text-gray-800">Joined {{$user->created_at->diffForHumans() }}</p>
            </div>
            <div>
                <a href="#" class="rounded-full border border-gray-500 bg-white  p-2 mr-2 text-black" >Edit Profile</a>
                <a href="#" class="rounded-full bg-blue-500  p-2 text-white">Follow Me</a>
            </div>
        </div>

{{--        user image profile--}}
        <div>
            <a href="#"
               class="absolute bottom-0  translate-x-1/2 translate-y-1/2"
               style="left: calc(50% - 75px );">
                <img src="{{$user->avatar}}"
                     alt="avatar"
                     class="rounded-full mr-2 "
                     width="150"
                     height="150"
                >
            </a>
        </div>
    </header>

    {{-- timeline --}}
    @include('_timeline', [
        'tweets' => $user->tweets,
    ])
@endsection

