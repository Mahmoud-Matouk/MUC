<nav x-data="{ showNav: false }" class="fixed top-0 left-0 z-50 w-full py-5 bg-transparent shadow-md" id="nav">
    <div class="container flex items-center content-center justify-between">

        <a href="{{ route('blog') }}" class="inline-flex items-center pl-20">
            <img src="{{ asset('assets/img/logo.png') }}" class="h-12 w-28 logo" alt="fluency logo" />
        </a>

        <div class="cursor-pointer hamburger" @click="showNav = !showNav" :class="[showNav ? 'active' : '']">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>

        <x-posts.search-button />
    </div>
</nav>
