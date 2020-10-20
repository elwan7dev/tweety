<div class="bg-blue-100 rounded-lg p-4">
    <h3 class="font-bold text-xl mb-4">Friends</h3>
    <ul>
        @foreach (range(1,8) as $idnex)
        <li class="mb-3">
            <div class="flex items-center text-lg">
                <img src="images/avatar.svg" alt="avatar" class="h-10 w-10 inline rounded-full mr-2">
                John Doe
            </div>
        </li>
        @endforeach
    </ul>
</div>