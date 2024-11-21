@props(['postsToShow'])

<div class="mt-6 text-center">
    <button type="button"
            wire:click="loadMore"
            class="select-none m-10 rounded-lg border border-gray-900 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-gray-900 hover:text-[rgba(33,95,253)] transition-all duration-500 hover:opacity-75 focus:ring focus:ring-gray-300 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50"
    >Load More
    </button>
</div>
