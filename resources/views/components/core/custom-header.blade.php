@php
    $links = ['index', 'about', 'services', 'devices', 'team', 'blog', 'contact'];
@endphp

<nav x-data="{ showNav: false }" class="fixed top-0 left-0 z-50 w-full py-5 bg-white " id="nav">
    <div class="container flex items-center content-center justify-between">
        <div class="px-2 cursor-pointer hamburger bg-primary-200 rounded-xl" @click="showNav = !showNav"
            :class="[showNav ? 'active' : '']">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>

        <a href="{{ route('index') }}" class="inline-flex items-center gap-3 lg:gap-5">
            <img src="{{ asset('assets/img/logo.svg') }}" class="block my-auto" alt="express Labs logo" />

            {{-- <img src="{{ asset('assets/img/sbc.jpg') }}" class="w-20 h-12 logo" alt="sbc logo')" /> --}}
        </a>

        {{-- <ul class="flex items-center content-center navbar-nav" :class="[showNav ? 'active-nav' : '']">
            @foreach ($links as $item)
                @if ($item !== 'blog')
                    <li class="text-dark rtl:ml-6 ltr:mr-6 hover:text-primary-500"
                        @click="showNav = !showNav; scrollToElement('{{ $item }}')">
                        <button>
                            {{ __("front.nav.$item.name") }}
                        </button>
                    </li>
                @else
                    <li class="text-dark rtl:ml-6 ltr:mr-6 hover:text-primary-500" @click="showNav = !showNav">
                        <a href="{{ route('blog') }}" class="flex items-center justify-center">
                            {{ __("front.nav.$item.name") }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul> --}}

        <div class="flex items-center justify-end">
            <div
                class="flex items-center justify-center px-10 py-2 text-sm font-bold border cursor-pointer md:px-4 bg-primary-100 rounded-xl text-primary-500 ltr:mr-2 rtl:ml-2">
                <a href="{{ switchLangPath(app()->getLocale() === 'ar' ? 'en' : 'ar') }}"
                    class="flex flex-row-reverse items-center justify-center">
                    <span class="font-bold">{{ app()->getLocale() === 'ar' ? 'EN' : 'AR' }}</span>
                </a>
            </div>

            <x-core.call-action type="primary" hide />
        </div>
    </div>
</nav>
