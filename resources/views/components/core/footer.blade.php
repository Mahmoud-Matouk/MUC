@php
    $links = ['index','advantages','who', 'services', 'products','contact','terms'];
@endphp

<footer class="w-full h-full relative pt-10  bg-[#162052] border-b-[1px] border-white ">
    
    <div class="px-4 md:pr-[119px] md:pl-[71px]  bg-transparent">
        <div
            class="grid   md:text-start   grid-cols-1 grid-rows-3 gap-3 md:grid-cols-[2fr_2fr_1.5fr] md:grid-rows-1 py-6">
            <!-- First row with 3 columns -->
            <div class="lg:col-start-1 lg:col-end-1 md:flex md:flex-col ">
                <a href="{{ route('index') }}" class="self-start">
                    <img src="{{asset("assets/img/home/footer/logo.png")}}"
                        class="object-contain w-[192px] h-[59px] logo " alt="{{ __('front.title') }}" />
                </a>
                <p class="self-start mt-[28px] md:w-[325px] mb-6 text-base  leading-[27px] font-normal text-white">
                    {{ __('front.description') }}
                </p>

                <div class="relative z-10 flex items-center justify-start gap-8 social">

                    <a href="{{ Config::get('site.social.facebook') }}" target="_blank">
                        <img src="{{ asset('assets/img/home/footer/facebook.pnf') }}" alt="facebook icon"
                            class="w-[35px] h-[35px]" />
                    </a>

                    <a href="{{ Config::get('site.social.youtube') }}" target="_blank">
                        <img src="{{ asset('assets/img/home/footer/youtube.png') }}" alt="youtube icon"
                            class="w-[35px] h-[35px]" />
                    </a>

                    <a href="{{ Config::get('site.social.x') }}" target="_blank">
                        <img src="{{ asset('assets/img/home/footer/x.png') }}" alt="twitter icon"
                            class="w-[35px] h-[35px]" />
                    </a>
                </div>
            </div>

            <div class="lg:col-start-2 lg:col-end-2 md:flex md:flex-col  ">

                <h2 class="mb-4 text-[22px] leading-[34px] font-bold tracking-[2px] text-white ">
                    {{ __('front.home.footer.heads.head_1') }}
                </h2>
                <ul class=" data space-y-4  text-white columns-2">
                    @foreach ($links as $item)
                        @if ($item !== 'index')
                            <li onclick="scrollToElement('{{ $item }}')">
                                <button
                                    class="  h-[35px] relative z-10 text-base leading-[27px] cursor-pointer nav-link transition ease-in-out duration-200 hover:text-primary-400">
                                    {{ __("front.nav.$item.name") }}
                                </button>
                            </li>
                        @else
                            <li
                                class="relative z-10 text-base leading-[27px] cursor-pointer nav-link duration-300 ease-in-out ">
                                <a href="{{ route($item) }}"
                                    class="  h-[35px] transition ease-in-out duration-200 hover:text-primary-400">
                                    {{ __("front.nav.$item.name") }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>

            </div>
            <div class="lg:col-start-3 lg:col-end-4 md:flex md:flex-col  ">
                <h2 class="mb-4 text-[22px] leading-[34px] font-bold tracking-[2px] text-white ">
                    {{ __('front.home.footer.heads.head_2') }}
                </h2>
                
                <h3 class="mb-4 text-[16px] leading-[30px] font-[500px] tracking-[1px] text-white ">
                    {{ __('front.home.footer.cap') }}
                </h3>



            </div>

        </div>

        <!-- Second row -->
    </div>


</footer>

<div class="bg-[#162052] h-[49px] flex flex-col justify-center">
    <h2 class="text-center text-xs leading-[21px] font-normal  text-white">
        {{ __('front.home.footer.rights1') }}
        <span>
            {{ getdate()['year'] }}
        </span>
    </h2>
</div>
