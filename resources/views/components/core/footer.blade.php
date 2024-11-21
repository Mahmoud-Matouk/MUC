@php
    $links = ['index', 'solutions', 'clients', 'prices', 'why'];
@endphp

<footer class="w-full h-full relative pt-48  bg-transparent">
    <div class="absolute w-full h-full   inset-0 -z-10 ">
        <img class="w-full h-full " src="{{ asset('assets/img/home/footer/background.png') }}" alt="background">
    </div>
    <div class="px-4 md:pr-[119px] md:pl-[71px]  bg-transparent">
        <div
            class="grid   md:text-start   grid-cols-1 grid-rows-4 gap-3  pt-2 pb-6 mt-2 md:grid-cols-[2fr_1fr_1.5fr_1fr] md:grid-rows-1">
            <!-- First row with 3 columns -->
            <div class="lg:col-start-1 lg:col-end-1 md:flex md:flex-col ">
                <a href="{{ route('index') }}" class="self-start">
                    <img src="{{ asset('assets/img/home/footer/logo.svg') }}"
                        class="object-contain w-[192px] h-[59px] logo " loading="lazy" alt="{{ __('front.title') }}" />
                </a>
                <p class="self-start mt-[28px] md:w-[325px] mb-6 text-base  leading-[27px] font-normal text-[#909090]">
                    {{ __('front.home.footer.description') }}
                </p>

                <div class="relative z-10 flex items-center justify-start gap-8 social">

                    <a href="{{ Config::get('site.social.whatsapp') }}" target="_blank">
                        <img src="{{ asset('assets/img/home/footer/whatsapp.svg') }}" alt="whatsapp icon"
                            class="w-6 h-6" />
                    </a>

                    <a href="{{ Config::get('site.social.instagram') }}" target="_blank">
                        <img src="{{ asset('assets/img/home/footer/instagram.svg') }}" alt="instagram icon"
                            class="w-6 h-6" />
                    </a>

                    <a href="{{ Config::get('site.social.x') }}" target="_blank">
                        <img src="{{ asset('assets/img/home/footer/twitter.svg') }}" alt="twitter icon"
                            class="w-6 h-6" />
                    </a>
                    <a href="{{ Config::get('site.social.facebook') }}" target="_blank">
                        <img src="{{ asset('assets/img/home/footer/facebook.svg') }}" alt="facebook icon"
                            class="w-6 h-6" />
                    </a>
                </div>
            </div>

            <div class="lg:col-start-2 lg:col-end-2 md:flex md:flex-col  ">

                <h2 class="mb-4 text-base leading-[27px] font-bold text-secondary-800">
                    {{ __('front.home.footer.heads.head_1') }}
                </h2>
                <ul class="flex flex-col flex-wrap data gap-y-4  text-[#909090]">
                    @foreach ($links as $item)
                        @if ($item !== 'index')
                            <li onclick="scrollToElement('{{ $item }}')">
                                <button
                                    class=" text-[#909090] relative z-10 text-base leading-[27px] cursor-pointer nav-link transition ease-in-out duration-200 hover:text-primary-400">
                                    {{ __("front.nav.$item.name") }}
                                </button>
                            </li>
                        @else
                            <li
                                class="relative z-10 text-base leading-[27px] cursor-pointer nav-link duration-300 ease-in-out ">
                                <a href="{{ route($item) }}"
                                    class=" text-[#909090] transition ease-in-out duration-200 hover:text-primary-400">
                                    {{ __("front.nav.$item.name") }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>

            </div>
            <div class="lg:col-start-3 lg:col-end-3 md:flex md:flex-col  ">

                <h2 class="mb-4 text-base leading-[27px] font-bold text-secondary-800">
                    {{ __('front.home.footer.heads.head_2') }}
                </h2>
                <ul class="flex flex-col flex-wrap data gap-y-4  text-[#909090]">
                    @for ($i = 1; $i <= 4; $i++)
                        <li onclick="scrollToElement('sol{{ $i }}')">
                            <button
                                class="relative z-10 text-base leading-[27px] text-[#909090] cursor-pointer nav-link transition ease-in-out duration-200 hover:text-primary-400">
                                {{ __("front.home.footer.solutions.sol$i") }}
                            </button>
                        </li>
                    @endfor
                </ul>

            </div>
            <div class="lg:col-start-4 lg:col-end-4 md:flex md:flex-col  ">
                <h2 class="mb-4 text-base leading-[27px] font-bold text-secondary-800 ">
                    {{ __('front.home.footer.heads.head_3') }}
                </h2>
                <div class="flex flex-col mb-4 gap-4 text-base  leading-[27px] font-normal text-[#909090]">
                    <button onclick="mailto({{ Config::get('site.contacts.email') }})"
                        class="flex flex-row  h-8 gap-x-2 cursor-pointer ">
                        <img src="{{ asset('assets/img/home/footer/mail.svg') }}" alt="Email icon"
                            class="w-5 my-auto" />
                        <p class="text-base  leading-[27px] font-normal text-[#909090] hover:text-primary-400">
                            {{ __('front.home.footer.email') }}</p>
                    </button>
                    <button class="flex flex-row  h-8 gap-x-2 cursor-pointer "
                        onclick="callus({{ Config::get('site.contacts.mobile') }})">
                        <img src="{{ asset('assets/img/home/footer/call.svg') }}" alt="call icon"
                            class="w-5 my-auto" />
                        <p dir="ltr"
                            class="text-base  leading-[27px] font-normal text-[#909090] hover:text-primary-400">
                            {{ __('front.home.footer.phoneNum') }}</p>
                    </button>
                    <a href="{{ Config::get('site.contacts.location') }}" target="_blank"
                        class="flex flex-row  h-8 gap-x-2 ">
                        <img src="{{ asset('assets/img/home/footer/location.svg') }}" alt="location icon"
                            class="w-5 my-auto" />
                        <p class="text-base  leading-[27px] font-normal text-[#909090] hover:text-primary-400">
                            {{ __('front.home.footer.locationPlace') }}</p>
                    </a>
                </div>


            </div>

        </div>

        <!-- Second row -->
    </div>


</footer>
<div class="bg-[#F0F0F0] h-[49px] flex flex-col justify-center">
    <h2 class="text-center text-xs leading-[21px] font-normal  text-[#909090]">
        {{ __('front.home.footer.rights1') }}
        <span>
            {{ getdate()['year'] }}
        </span>
        {{ __('front.home.footer.rights2') }}
    </h2>
</div>
