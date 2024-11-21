<div class="w-full bg- pt-24 pb-12" id="clients">

    <div class="container bg-transparent py-6">
        <div class="text-center self-center space-y-4">
            <div class="text-2xl leading-9 relative font-bold -left-1/2 translate-x-1/2 text-secondary-800 w-fit">
                <span class=" text-primary-900">{{ explode(' ', __('clients.head'), 2)[0] }} </span>
                <img class="absolute   bottom-1/2 translate-y-1/2 text-primary-800"
                    src="{{ asset('assets/img/home/strength/Remotely- 1.svg') }}" alt="word background">
                {{ explode(' ', __('clients.head'), 2)[1] }}
            </div>
            <p class="text-lg leading-[27px] font-normal text-[#808080] mx-auto w-3/4">{{ __('clients.description') }}
            </p>
        </div>


        <div class=" relative my-6  ">
            <div class="swiper bg-clientsBack bg-contain bg-center" dir="ltr">
                <div class="swiper-wrapper  pb-12 ">
                    @for ($i = 0; $i < 6; $i++)
                        <div class="swiper-slide relative md:min-w-[590px] h-[307px] bg-white rounded-[24px] cursor-grab"
                            dir="rtl">
                            <div class="flex flex-col justify-between gap-[10px] m-6">
                                <h3
                                    class="text-base md:text-xl md:leading-[30px]  font-bold text-secondary-800">
                                    {{ __('clients.s1.head') }}</h3>
                                <p class="text-sm md:text-base  font-[500] text-[#909090]">
                                    {{ __('clients.s1.description') }}
                                </p>
                                <div class="flex gap-2 items-center mt-6">
                                    <img class="rounded-full" src="{{ asset('assets/img/home/clients/img.png') }}"
                                        alt="profile image">
                                    <div class="flex flex-col gap-1">
                                        <h3 class="text-sm md:text-base font-bold   text-secondary-800">
                                            {{ __('clients.s1.name') }}</h3>
                                        <p class="text-[#909090] text-xs leading-[18px]  font-[500]">
                                            {{ __('clients.s1.position') }} <span
                                                class="text-primary-900 font-bold">{{ __('clients.s1.company') }}</span>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endfor

                </div>

                <div class="swiper-pagination"></div>

            </div>


        </div>
    </div>
</div>
