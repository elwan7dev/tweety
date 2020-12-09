<div class="border border-blue-500 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
        @csrf

        <textarea
            name="body"
            class="w-full"
            placeholder="What's up doc?"
        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between">
            <a href="{{route('profile', auth()->user())}}">
                <img
                    src="{{auth()->user()->avatar}}"
                    alt="{{auth()->user()->name }}'s avatar"
                    class="rounded-full mr-2"
                    width="40"
                    height="40"
                ></a>
            <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">Tweet-a-roo!</button>
        </footer>
    </form>

    @error('body')
        <p class="font-bold text-red-600 text-sm mt-2 ">{{$message}}</p>
    @enderror
</div>
