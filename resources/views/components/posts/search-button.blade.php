<div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
    <svg width="24px" height="24px" viewBox="0 0 24 24" stroke-width="1.5" fill="none"
        xmlns="http://www.w3.org/2000/svg" color="#000000">
        <path d="M17 17L21 21" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
        <path
            d="M3 11C3 15.4183 6.58172 19 11 19C13.213 19 15.2161 18.1015 16.6644 16.6493C18.1077 15.2022 19 13.2053 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11Z"
            stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
    </svg>
    <form method="GET" action="" wire:model.live.debounce.800ms="search">
        <input type="text" name="search" placeholder="Search Posts" value="{{ request('search') ?? '' }}"
            class="bg-transparent placeholder-black font-semibold text-sm border-0 focus:outline-none focus:ring-0">
    </form>
</div>
