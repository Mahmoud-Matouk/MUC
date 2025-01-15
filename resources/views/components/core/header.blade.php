@php
    $links = ['index','who', 'services','contact'];
    //dd(request()->is("offer"));

@endphp

<!-- <nav x-data="{ showNav: false }" class="fixed top-0 left-0 z-50 w-full py-12 bg-transparent bg-primary-100" id="nav"> -->
<nav x-data="{ showNav: false }" class="sticky top-0 left-0 z-50 w-full h-[80px] container bg-transparent pt-5" id="nav">
    <div class=" flex items-center content-center md:justify-between justify-center gap-4 ">
        {{-- hidden hamburger button--}}
        <div class="px-2 cursor-pointer hamburger bg-secondary-800 rounded-xl" @click="showNav = !showNav"
            :class="[showNav ? 'active' : '']">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>

        <div class="inline-flex items-center gap-3 lg:gap-5 ">
            <a href="{{ route('index') }}" >
                <img src="{{ asset('assets/img/logo.svg') }}" class="block my-auto w-[156px] h-[55px]" alt="Uniform logo" />
            </a>
        </div>
        <ul class="flex items-center content-center mr-6 gap-5 navbar-nav max-h-fit  " :class="[showNav ? 'active-nav nav-scroll max-h-fit' : '']">
            @foreach ($links as $item)

                @if ($item !== 'index')
                    <li class="text-dark-800 font-normal text-base   transition ease-in-out duration-200 hover:text-primary-400"
                        @click="showNav = !showNav; scrollToElement('{{ $item }}')">
                        <button>
                            {{ __("front.nav.$item.name") }}
                        </button>
                    </li>
                @else
                    <li class="text-dark-800 font-normal text-base  transition ease-in-out duration-200 hover:text-primary-400 {{request()->is("$item")?'text-primary-800':'text-dark-950'}}" @click="showNav = !showNav">
                        <a href="{{route($item)}}">
                            {{ __("front.nav.$item.name") }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
        <div class="hidden lg:flex items-center  gap-6">
            <div class="relative z-10 flex items-center justify-start gap-8 social">

                <a href="{{ Config::get('site.social.Pinterest') }}" target="_blank">
                    <img src="{{ asset('assets/img/home/header/Pinterest.svg') }}" alt="Pinterest icon"
                        class="w-6 h-6" />
                </a>

                <a href="{{ Config::get('site.social.linkedin') }}" target="_blank">
                    <img src="{{ asset('assets/img/home/header/linkedin.svg') }}" alt="Facebook icon"
                        class="w-6 h-6 grayscale" />
                </a>

                <a href="{{ Config::get('site.social.x') }}" target="_blank">
                    <img src="{{ asset('assets/img/home/header/Twitter.svg') }}" alt="twitter icon"
                        class="w-6 h-6" />
                </a>
                
            </div>
            
            <a href="#contact"
            class="py-3 px-4 xl:px-[31px] z-10 overflow-hidden rounded-[25px]  font-bold text-sm justify-center items-center text-primary-800
              bg-secondary-800
            ">
            {{__("front.actions.call")}}
            
            </a>
        </div>
    </div>
</nav>
