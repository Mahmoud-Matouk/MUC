@props(['postsToShow'])

<x-layouts.custom>
    <x-posts.header />

    <div class="flex flex-row max-w-6xl p-8 mx-auto mt-20 bg-gray-800 shadow-md rounded-3xl">
        <div class="flex flex-col justify-center w-24">
            <img class="mt-4 mb-4 border border-blue-500 rounded-full outline-offset-8"
                src="{{ $author->avatar ? url($author->avatar) : url(config('app.fallback.anonymous')) }}"
                alt="{{ $author->name }}" />
        </div>
        <div class="flex flex-col justify-center w-full ml-8">
            <h3 class="mb-2 text-xl font-medium text-gray-200">{{ $author->name }}</h3>
            <h6 class="mb-2 text-xs font-bold text-gray-500 uppercase">Author</h6>
            <p class="mb-2 text-base leading-6 text-gray-400">Laravel Developer</p>
            <p class="mb-2 text-base leading-6 text-gray-400">{{ count($postsToShow) }} Posts</p>
            <div class="flex justify-end mt-4">
                <button class="px-4 py-2 font-medium text-white bg-blue-500 rounded-md hover:bg-opacity-75">Message
                </button>
                <button class="px-4 py-2 font-medium text-blue-500 rounded-md hover:text-opacity-75">Following</button>
            </div>
        </div>
    </div>

    <x-posts.other-posts :postsToShow="$postsToShow" />
</x-layouts.custom>
