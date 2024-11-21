@php
    $id = 1;
@endphp
<div class="w-full bg-[#FCFCFC]">
    <div class="container pb-12 pt-32 flex flex-col relative bg-transparent z-0" id="solutions">

        <div class="text-center self-center space-y-4 mb-4">
            <div class="text-2xl leading-9 relative font-bold -left-1/2 translate-x-1/2 text-secondary-800 w-fit">
                <span class=" text-primary-900">{{ explode(' ', __('solutions.head'), 2)[0] }} </span>
                <img class="absolute   bottom-1/2 translate-y-1/2 text-primary-800"
                    src="{{ asset('assets/img/home/strength/Remotely- 1.svg') }}" alt="word background">
                {{ explode(' ', __('solutions.head'), 2)[1] }}
            </div>
            <p class="text-[#808080] mx-auto w-full md:w-[65%] ">{{ __('solutions.description') }}
            </p>
        </div>

        <div class="md:w-[1200px] relative w-full ">
            <div class="absolute w-full h-full -z-20 flex gap-x-24">
                <img src="{{ asset('assets/img/home/solutions/solutions.png') }}" alt="bg" class="w-full h-full">
                {{-- @for ($i = 0; $i < 16; $i++)
                    <div class=" w-[1px] border-r-2 border-dotted border-black bg-black h-full opacity-15"></div>
                @endfor --}}
            </div>
            <div class="md:w-[1200px] flex  flex-wrap md:flex-nowrap justify-center md:justify-between  mt-4 relative z-20 "
                id="sol1">
                <div class=" flex flex-col gap-4 w-full md:w-[558px] text-center md:text-start self-center ">
                    <h2 class="text-2xl md:text-[32px] md:leading-[48px] font-bold text-secondary-800"><span
                            class="text-primary-900">{{ explode(' ', __('solutions.s1.head'), 2)[0] }} </span>
                        {{ explode(' ', __('solutions.s1.head'), 2)[1] }}</h2>
                    <p
                        class="text-sm md:text-[16px] md:leading-[30px] md:w-[500px] text-justify font-normal text-[#909090]">
                        {{ __('solutions.s1.description') }}</p>
                    <div class=" flex gap-4 justify-stretch text-center w-2/3 mx-auto md:mx-0 md:w-[350px] text-base font-bold ">
                        <a href="/register"
                            class="group relative py-2 w-full md:py-3  z-10 overflow-hidden rounded-[150px] cursor-pointer  h-full font-bold text-base  justify-center items-center text-white border-primary-800 border-2 bg-primary-800 transition-all">

                            <span> {{ __('front.actions.register') }}</span>
                        </a>
                        <a href="/solutions/{{ $id }}"
                            class="group relative py-2  md:py-3  z-10 overflow-hidden rounded-[150px] cursor-pointer w-full h-full font-bold text-base  justify-center items-center text-primary-800 border-primary-800 border-2 bg-white transition-all">

                            <span> {{ __('front.actions.discover') }}</span>
                        </a>
                    </div>
                </div>
                <div class="drop-shadow-md rounded-2xl">
                    <div
                        class="relative z-20 md:self-end w-[90%] mx-auto md:w-[453px] rounded-[10px]  bg-vec bg-contain md:bg-auto bg-no-repeat bg-center md:bg-left h-[460px] overflow-y-auto overscroll-contain no-scrollbar scroll-smooth ">
                        <img class="md:float-right"
                            src="{{ asset('assets/img/home/solutions/image1.svg') }}" alt="solution1">
                    </div>
                </div>
            </div>



            <div class="md:w-[1200px] gap-4  flex  flex-wrap md:flex-nowrap justify-center md:justify-between  mt-[72px] relative z-20 "
                id="sol2">
                <div class="w-[90%] mx-auto md:float-right md:mx-0 md:w-[533px] bg-[#FCFCFC]  rounded-2xl order-2 md:order-1">
                    <img class="float-right object-cover drop-shadow-md  md:h-[426px]"
                        src="{{ asset('assets/img/home/solutions/image2.png') }}" alt="solution2">
                </div>
                <div
                    class="flex flex-col gap-4 w-full md:w-[435px] text-center md:text-start self-center order-1 md:order-2">
                    <h2 class="text-2xl md:text-[32px] md:leading-[48px] tracking-normal font-bold text-secondary-800">
                        <span
                            class="text-primary-900 tracking-wider ">{{ explode(' ', __('solutions.s2.head'), 2)[0] }}
                        </span>
                        {{ explode(' ', __('solutions.s2.head'), 2)[1] }}
                    </h2>

                    <p class="text-sm md:text-[16px] md:leading-[30px] font-normal text-center md:text-justify text-[#909090]">
                        {{ __('solutions.s2.description') }}<br />
                        {{ __('solutions.s2.description2') }}</p>
                    <div
                        class=" flex gap-4 justify-stretch text-center w-2/3 text-base font-bold mx-auto md:mx-0 md:w-[350px]">
                        <a href="/register"
                            class="group relative py-2 w-full md:py-3  z-10 overflow-hidden rounded-[150px] cursor-pointer  h-full font-bold text-base  justify-center items-center text-white border-primary-800 border-2 bg-primary-800 transition-all">

                            <span> {{ __('front.actions.register') }}</span>
                        </a>
                        <a href="/solutions/{{ $id }}"
                            class="group relative py-2  md:py-3  z-10 overflow-hidden rounded-[150px] cursor-pointer w-full h-full font-bold text-base  justify-center items-center text-primary-800 border-primary-800 border-2 bg-white transition-all">

                            <span> {{ __('front.actions.discover') }}</span>
                        </a>
                    </div>
                </div>
            </div>



            <div class="md:w-[1200px] gap-4 flex flex-wrap md:flex-nowrap justify-center md:justify-between  mt-[72px] "
                id="sol3">
                <div class="float-right flex flex-col gap-4 w-full md:w-[506px] text-center md:text-start self-center">
                    <h2 class="text-2xl md:text-[32px] md:leading-[48px] font-bold text-secondary-800"><span
                            class="text-primary-900">{{ explode(' ', __('solutions.s3.head'), 2)[0] }} </span>
                        {{ explode(' ', __('solutions.s3.head'), 2)[1] }}</h2>
                    <p class="text-sm md:text-[16px] md:leading-[30px] text-justify font-normal text-[#909090]">
                        {{ __('solutions.s3.description') }}</p>
                    <div
                        class=" flex gap-4 justify-stretch text-center w-2/3 text-base font-bold mx-auto md:mx-0 md:w-[350px]">
                        <a href="/register"
                            class="group relative py-2 w-full md:py-3  z-10 overflow-hidden rounded-[150px] cursor-pointer  h-full font-bold text-base  justify-center items-center text-white border-primary-800 border-2 bg-primary-800 transition-all">

                            <span> {{ __('front.actions.register') }}</span>
                        </a>
                        <a href="/solutions/{{ $id }}"
                            class="group relative py-2  md:py-3  z-10 overflow-hidden rounded-[150px] cursor-pointer w-full h-full font-bold text-base  justify-center items-center text-primary-800 border-primary-800 border-2 bg-white transition-all">

                            <span> {{ __('front.actions.discover') }}</span>
                        </a>
                    </div>
                </div>
                <div class="bg-[#FCFCFC] w-[90%] float-left mx-auto rounded-2xl">
                    <div class="float-left  bg-vec bg-contain md:bg-[length:341px_auto]  bg-no-repeat  bg-center  ">
                        <img class="float-left object-cover drop-shadow-md md:w-[460px]"
                            src="{{ asset('assets/img/home/solutions/image3.png') }}" alt="solution3">
                    </div>
                </div>
            </div>


            <div class="md:w-[1200px] gap-4 flex flex-wrap md:flex-nowrap justify-center md:justify-between mt-[72px] mb-6 "
                id="sol4">
                <div class="bg-[#FCFCFC] w-[90%] mx-auto md:float-right rounded-2xl order-2 md:order-1">
                    <div class=" float-right  bg-vec bg-contain  bg-no-repeat bg-center p-4    ">
                        <img class="float-right w-fit md:w-[536px] drop-shadow-md"
                            src="{{ asset('assets/img/home/solutions/image4.png') }}" alt="solution4">
                    </div>
                </div>
                <div
                    class="float-right flex flex-col gap-4 w-full md:w-[435px] text-center md:text-start self-center order-1 md:order-2">
                    <h2 class="text-2xl md:text-[32px] md:leading-[48px] font-bold text-secondary-800"><span
                            class="text-primary-900">{{ explode(' ', __('solutions.s4.head'), 2)[0] }} </span>
                        {{ explode(' ', __('solutions.s4.head'), 2)[1] }}</h2>
                    <p class="text-sm md:text-[16px] md:leading-[30px] font-normal text-[#909090]">
                        {{ __('solutions.s4.description') }}</p>
                    <div
                        class=" flex gap-4 justify-stretch text-center w-2/3 text-base font-bold mx-auto md:mx-0 md:w-[350px]">
                        <a href="/register"
                            class="group relative py-2 w-full md:py-3  z-10 overflow-hidden rounded-[150px] cursor-pointer  h-full font-bold text-base  justify-center items-center text-white border-primary-800 border-2 bg-primary-800 transition-all">

                            <span> {{ __('front.actions.register') }}</span>
                        </a>
                        <a href="/solutions/{{ $id }}"
                            class="group relative py-2  md:py-3  z-10 overflow-hidden rounded-[150px] cursor-pointer w-full h-full font-bold text-base  justify-center items-center text-primary-800 border-primary-800 border-2 bg-white transition-all">

                            <span> {{ __('front.actions.discover') }}</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>
