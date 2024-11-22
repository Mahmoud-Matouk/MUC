<div class="bg-[#F2F3FA] w-full pt-24 relative z-30" id="services">
    <div class="w-full container  ">
        <div class="space-y-2 ">
            <h3 class="text-lg md:text-xl md:leading-[30px] font-normal text-secondary-800">{{__("services.head")}}</h3>
            <h1 class="text-xl md:text-[30px] md:leading-[45px] font-semibold text-dark-800">{{__("services.description")}}</h1>
        </div>

        <div class=" w-full grid grid-cols-1 md:grid-cols-4  py-6  gap-4  md:py-12">
            @for ($i = 1; $i <= 6; $i++)
                @if ($i == 6)
                    <div
                        class="min-h-[260px] md:col-span-3 flex flex-col items-center justify-between gap-2  rounded-[30px] relative bg-[#0A1138]/[83%]">
                        <img class="absolute  -z-10 inset-0 h-full w-full object-cover rounded-[30px]"
                            src="{{asset("assets/img/home/services/image.jpg")}}" alt="contact image">
                        <div class="mx-auto my-auto flex flex-col justify-between gap-2 w-[334px]">
                            <h2 class="text-[30px] leading-[45px] text-white text-center font-semibold">
                                {{__("services.services.contact")}}</h2>
                            <a href="#contact" class=" py-3 px-[31px] z-10 overflow-hidden rounded-[25px] mx-auto  font-bold text-lg justify-center items-center text-white
                                bg-secondary-800">
                                {{__("front.actions.call")}}
                            </a>
                        </div>
                    </div>
                @else
                    <div
                        class="min-h-[260px] md:col-span-1 flex flex-col items-start justify-between gap-2 p-8  relative rounded-[30px] group  bg-white">
                        <img class="w-[94px] h-[100px]" src="{{asset("assets/img/home/services/icon$i.png")}}" alt="icon">
                        <h3 class="text-lg text-dark-800 font-semibold">{{__("services.services.service$i.title")}}</h3>
                        <p class="text-sm text-dark-500 font-noraml">{{__("services.services.service$i.details")}}</p>
                    </div>
                @endif

            @endfor
        </div>


    </div>
</div>