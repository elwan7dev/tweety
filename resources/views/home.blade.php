@extends('layouts.app')

@section('content')
    {{-- tweet-panel --}}
    @include('_publish-tweet-panel')

    {{-- timeline --}}
    @include('_timeline')
@endsection
