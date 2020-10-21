@extends('layouts.app')

@section('content')
{{-- Content wrapper --}}
<div class="lg:flex lg:justify-between">
    {{-- sidebar --}}
    <div class="lg:w-32 ml-4">
        @include('_sidebar-links')
    </div>

    {{-- feeds --}}
    <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
        {{-- tweet-panel --}}
        @include('_publish-tweet-panel')

        {{-- timeline --}}
        <div class="border border-gray-300 rounded-lg px-1" >
            @foreach ($tweets as $tweet)
                @include('_tweet')
            @endforeach
        </div>
    </div>

    {{-- friends-list --}}
    <div class="lg:w-1/6">
        @include('_friends-list')
    </div>
</div>

@endsection