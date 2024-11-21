<div class="bg-[#FCFCFC] w-full pt-24 ">
    <div class="w-full container  ">
        <div class="text-center self-center space-y-4">
            <div class="text-2xl leading-9 relative font-bold -left-1/2 translate-x-1/2 text-secondary-800 w-fit">
                <span class=" text-primary-900">{{ explode(' ', __('services.head'), 2)[0] }} </span>
                <img class="absolute   bottom-1/2 translate-y-1/2 text-primary-800"
                    src="{{ asset('assets/img/home/strength/Remotely- 1.svg') }}" alt="word background">
                {{ explode(' ', __('services.head'), 2)[1] }}
            </div>
            <p class="text-base font-normal text-[#808080] mx-auto w-3/4">{{ __('services.description') }}</p>
        </div>

        <section class="relative w-full">
            <div class="absolute  left-1/2 top-1/2 w-full h-full -translate-x-1/2 -translate-y-1/2 ">
                <img src="{{ asset('assets/img/home/services/background.png') }}" alt="background">
            </div>

            <div class=" w-full grid grid-cols-2 md:grid-cols-4  py-6  gap-4  md:py-12">
                @for ($i = 1; $i <= 10; $i++)
                    <div
                        class="group h-[100] md:h-[160px] w-full md:w-[282px] px-2 {{ $i == 9 ? 'md:col-span-2 md:mr-auto ' : '' }} {{ $i == 10 ? 'md:col-span-2 md:ml-auto ' : '' }}">
                        <div
                            class="
                        flex flex-col items-center justify-between gap-2 py-4  relative rounded-2xl group  bg-white
                        transition group-hover:-translate-y-[10px] group-hover:bg-primary-900  duration-300  ">
                            <div class="bg-primary-900 group-hover:bg-white  rounded-full   relative w-8 h-8 md:w-16 md:h-16 ">
                                <img src='{{ asset("assets/img/home/services/icon$i.svg") }}'
                                    class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 group-hover:hidden h-[15px] w-[15px] md:h-[29px] md:w-[29px]">
                                <img src='{{ asset("assets/img/home/services/icon$i-red.svg") }}'
                                    class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 hidden group-hover:inline-block h-[15px] w-[15px] md:h-[29px] md:w-[29px]">
                            </div>
                            <h3 class="text-sm md:text-lg  font-bold text-secondary-800 group-hover:text-white">
                                {{ __("services.services.service$i") }}</h3>

                        </div>
                        <div
                            class="relative  w-full h-[10px] bg-[radial-gradient(ellipse_at_center_top,_var(--tw-gradient-stops))] from-black/100  to-black/0 rounded-full blur-md opacity-50  hidden group-hover:inline-block">
                        </div>
                    </div>
                @endfor

            </div>
        </section>

    </div>
</div>
</div>
