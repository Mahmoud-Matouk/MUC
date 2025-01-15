@php
    $links = ['index','products','services','advantages','who', 'contact','terms'];
@endphp

<footer class="w-full h-full relative   bg-[#0E83CC] border-b-[1px] border-white/20 ">
    
    <div class="px-4 pt-10 md:pr-[119px] md:pl-[71px] md:pt-10  bg-transparent">
        <div
            class="grid   md:text-start   grid-cols-1 grid-rows-3 gap-3 md:gap-[5.75rem] md:grid-cols-[2.5fr_1.5fr_1.5fr] md:grid-rows-1 pb-6">
            <!-- First row with 3 columns -->
            <div class="lg:col-start-1 lg:col-end-1 md:flex md:flex-col ">
                <div>
                    <a href="{{ route('index') }}" class="self-start">
                        <img src="{{asset("assets/img/home/footer/logo.svg")}}"
                            class="object-contain w-[171px] h-[32px] logo " alt="{{ __('front.title') }}" />
                    </a>
                    <h3 class="self-start mt-5  md:w-[415px]  text-base   text-justify  font-semibold  text-primary-700">{{__('front.home.footer.subtitle')}}</h3>
                    <p class="self-start mt-1  md:w-[415px] mb-8 text-xs leading-[25px]  text-justify  font-light  text-white">
                        {{ __('front.home.footer.description') }}
                    </p>
                </div>
                <div class="relative z-10 flex items-center justify-start gap-8 social">

                    <a href="{{ Config::get('site.social.Pinterest') }}" target="_blank">
                        <img src="{{ asset('assets/img/home/footer/pinterest.svg') }}" alt="facebook icon"
                            class="w-[35px] h-[35px]" />
                    </a>

                    <a href="{{ Config::get('site.social.linkedin') }}" target="_blank">
                        <img src="{{ asset('assets/img/home/footer/linkedin.svg') }}" alt="youtube icon"
                            class="w-[40px] h-[40px]" />
                    </a>

                    <a href="{{ Config::get('site.social.x') }}" target="_blank">
                        <img src="{{ asset('assets/img/home/footer/twitter.svg') }}" alt="twitter icon"
                            class="w-[35px] h-[35px]" />
                    </a>
                </div>
            </div>

            <div class="lg:col-start-2 lg:col-end-2 md:flex md:flex-col   pt-10 ">

                <h2 class="mb-3 text-base font-bold tracking-[1.5px] text-white ">
                    {{ __('front.home.footer.heads.head_1') }}
                </h2>
                <ul class=" data space-y-1  text-white columns-2 ">
                    @foreach ($links as $item)
                        @if ($item !== 'index')
                            <li onclick="scrollToElement('{{ $item }}')">
                                <button
                                    class="   relative z-10 text-xs cursor-pointer nav-link transition ease-in-out duration-200 hover:text-primary-400">
                                    {{ __("front.nav.$item.name") }}
                                </button>
                            </li>
                        @else
                            <li
                                class="relative z-10 text-xs cursor-pointer nav-link duration-300 ease-in-out ">
                                <a href="{{ route($item) }}"
                                    class="   transition ease-in-out duration-200 hover:text-primary-400">
                                    {{ __("front.nav.$item.name") }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>

            </div>
            <div class="lg:col-start-3 lg:col-end-4 md:flex md:flex-col pt-10 ">
                <h2 class="mb-3 text-base font-bold tracking-[1.5px] text-white ">
                    {{ __('front.home.footer.heads.head_2') }}
                </h2>
                <button class="flex flex-row  h-8 gap-x-2 cursor-pointer items-center "
                        onclick="whatsapp({{ Config::get('site.contacts.whats') }})">
                        <img  src="{{ asset('assets/img/home/footer/whatsapp.svg') }}" alt="whatsapp icon"
                            class="w-5 my-auto" />
                        <p dir="ltr"
                            class="text-[14px] leading-[21px] font-bold  text-white hover:text-primary-400">
                            {{ Config::get('site.contacts.whats') }}</p>
                </button>
                    
                <button onclick="mailto({{ Config::get('site.contacts.email') }})"
                        class="flex flex-row  h-8 gap-x-2 cursor-pointer items-center ">
                        <img src="{{ asset('assets/img/home/footer/mail.svg') }}" alt="Email icon"
                            class="w-5 my-auto" />
                        <p class="text-[14px] leading-[21px] font-bold  text-white hover:text-primary-400">
                            {{ Config::get('site.contacts.email') }}</p>
                </button>



            </div>
        </div>
        
        <h3 class=" md:col-span-4 mb-3 text-center text-bold text-white text-xl content-center">
            {{__('front.home.footer.cap2')}}
        </h3>
        
    </div>


</footer>

<div class="bg-[#0E83CC] h-[49px] flex flex-col justify-center">
    <h2 class="text-center text-[10px] font-normal  text-white">
        {{ __('front.home.footer.rights1') }}
        <span>
            {{ getdate()['year'] }}
        </span>
    </h2>
</div>
