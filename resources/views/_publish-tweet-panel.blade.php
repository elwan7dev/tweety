<div class="border border-blue-500 rounded-lg px-8 py-6 mb-8">
    <form action="">
        <textarea
            name="body"
            class="w-full"
            placeholder="What's up doc?"
        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between">
            <img 
                src="{{auth()->user()->avatar}}" 
                alt="{{auth()->user()->name }}'s avatar" 
                class="rounded-full mr-2">

            <button type="submit" class="bg-teal-400 rounded-lg shadow py-2 px-2 text-white">Tweet-a-roo!</button>
        </footer>
    </form>
</div>