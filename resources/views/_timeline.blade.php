<div class="border border-gray-300 rounded-lg px-1" >
    @foreach ($tweets as $tweet)
        @include('_tweet')
    @endforeach
</div>
