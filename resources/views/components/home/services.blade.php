<div class="bg-[#F2F3FA] w-full py-20 relative z-30" id="services">
    <div class="w-full container  ">
        <div class="space-y-2 ">
            <h3 class="text-base md:text-lg  font-normal text-secondary-800">{{__("services.head")}}</h3>
            <h1 class="text-lg md:text-xl md:w-[65%] font-semibold text-dark-800">{{__("services.description")}}</h1>
        </div>

        <div class=" w-full grid grid-cols-1 md:grid-cols-4  py-6  gap-4  md:py-12">
            @for ($i = 1; $i <= 6; $i++)
                @if ($i == 6)
                    <div
                        class="min-h-[200px] md:col-span-3 flex flex-col items-center justify-between gap-2  rounded-[30px] relative bg-[#0A1138]/[83%]">
                        <img class="absolute  -z-10 inset-0 h-full w-full object-cover rounded-[30px]"
                            src="{{asset("assets/img/home/services/image-min.webp")}}" alt="contact image">
                        <div class="mx-auto my-auto flex flex-col justify-between gap-2 ">
                            <h2 class="text-xl text-white text-center font-semibold w-[334px]">
                                {{__("services.services.contact")}}</h2>
                            <a href="#contact" class=" py-3 px-[31px] z-10 overflow-hidden rounded-[25px] mx-auto w-[270px] font-bold text-base text-center text-white
                                bg-secondary-800">
                                {{__("front.actions.call")}}
                            </a>
                        </div>
                    </div>
                @else
                    <div
                        class="min-h-[200px] md:col-span-1 flex flex-col items-start justify-between gap-2 py-6 px-3   relative rounded-[30px] group  bg-white">
                        <img class="w-[74px] h-[80px]" src="{{asset("assets/img/home/services/icon$i.png")}}" alt="icon">
                        <div class="space-y-2">
                        <h3 class="text-base text-dark-800 font-semibold">{{__("services.services.service$i.title")}}</h3>
                        <p class="text-xs text-dark-500 font-noraml">{{__("services.services.service$i.details")}}</p>
                        </div>
                    </div>
                @endif

            @endfor
        </div>


    </div>
</div>