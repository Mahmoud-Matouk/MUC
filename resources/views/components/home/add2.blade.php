<div class="bg-[#030E35] w-full relative md:h-[570px]">
    <div class="absolute w-full h-full bg-cubebg3 bg-cover  inset-0    ">
    </div>
    <div
        class="md:container md:py-20 px-6 py-10 flex h-full flex-wrap md:flex-nowrap justify-center items-center   gap-5  md:gap-[120px] ">
        <div class="w-full  flex flex-col gap-2 md:gap-4" data-aos="slide-right" data-aos-duration="1000">
            <img class="h-fit w-fit" src="{{ asset('assets/img/home/add2/image1.svg') }}" alt="background">

            <h2 class="text-lg md:text-5xl md:leading-[77px] text-white font-bold md:w-[448px]">{{ __('add2.sec1.head') }}
            </h2>
            <p class="text-[#CBCBCB] text-sm md:text-lg md:leading-[30px] md:w-[557px] font-normal text-justify ">
                {{ __('add2.sec1.description') }}</p>

        </div>
        <div class="py-2 w-full">
            <div class=" w-full md:w-[517px] flex flex-col justify-between gap-3 md:gap-6 py-4 px-3 md:py-8  md:px-6 bg-white rounded-[24px]"
                data-aos="slide-left" data-aos-duration="1000">
                <div class="flex flex-col gap-1 md:gap-2">
                    <h2 class="text-lg md:text-2xl md:leading-[36px] text-secondary-800 font-bold">
                        {{ __('add2.sec2.head') }}</h2>
                    <p class="text-[#808080] text-sm md:text-base font-normal ">{{ __('add2.sec2.description') }}</p>
                </div>
                <div class="flex flex-col gap-[12px]  ">
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="flex gap-2 items-start">
                            <img src="{{ asset('assets/img/home/add2/Vector.svg') }}" alt="check sign">
                            <p class="text-[10px] md:text-xs md:leading-[18px] font-normal text-[#808080]">
                                {{ __("add2.sec2.bullets.bullet$i") }} </p>
                        </div>
                    @endfor
                </div>
                <a href="/contact"
                    class="mx-auto group relative py-2 px-2 flex-shrink-0 md:px-12 md:py-3   z-10 overflow-hidden rounded-3xl md:rounded-[150px] cursor-pointer w-fit  font-bold  text-xs md:text-base  justify-center items-center text-white border-primary-800 border-2 bg-primary-800 transition-all">
                    <span> {{ __('add2.sec2.button') }}</span>
                </a>
            </div>
        </div>

    </div>
</div>
