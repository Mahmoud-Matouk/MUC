<div class=" relative bg-white w-full z-0" id="advantages">
    <div class="absolute  h-[1377.31px] -top-[190px]  z-10">
        <img class="relative object-center" src="{{asset("assets/img/home/Advantage/back.png")}}" alt="background">
    </div>
    <div class="absolute inset-0 w-full h-28 bg-[#F2F3FA] z-0">

    </div>
    <div class="container flex justify-between  bg-transparent md:flex-nowrap flex-wrap w-full pb-20 relative z-20" >
        <div class="flex flex-col gap-8 justify-between md:w-[500px] self-center mt-14 md:mt-0">
            <div class="md:mb-6">
                <h3 class="text-lg md:text-xl font-semibold text-dark-800">{{__("advantage.subtitle")}}</h3>
            </div>
            <ul class="flex flex-col gap-y-4 md:gap-y-8 ">
                @for ($i=1;$i<=4;$i++)
                    @if($i !== 3)    
                    <li>
                        <div class="flex gap-2 items-center">
                            <div class="flex-shrink-0 w-3 h-[12px] bg-secondary-800"></div>
                            <h4 class="text-lg md:text-lg text-secondary-800 font-semibold">{{__("advantage.Adv$i.title")}}</h4>
                        </div>
                        <p class="mr-5 text-sm md:text-sm text-[#525459] font-normal">{{__("advantage.Adv$i.details")}}</p>
                    </li>
                    @else
                    <li>
                        <div class="flex gap-2 items-center">
                            <div class="w-3 h-[12px] bg-secondary-800"></div>
                            <h4 class="text-lg md:text-lg text-secondary-800 font-semibold">{{__("advantage.Adv$i.title")}}</h4>
                        </div>
                        <ul class="space-y-1 md:space-y-2">
                            @for ($j=1;$j<=4;$j++)
                                <li class="flex gap-2 items-center pr-6">
                                <div class="w-3 h-[12px] rounded-full bg-secondary-800"></div>
                                <h4 class="text-lg md:text-lg text-secondary-800 font-semibold">{{__("advantage.Adv$i.subtitle$j")}} <span class="text-sm md:text-sm text-[#525459] font-normal"> {{__("advantage.Adv$i.details$j")}}</span></h4>
                                </li>
                            @endfor
                        </ul>
                    </li>
                    @endif
                    
                @endfor
            </ul>

            <a href="#contact" class="block md:w-[293px] mt-6 w-full text-center  py-3  z-10  rounded-[25px]   font-bold text-sm  text-white bg-primary-800">
                {{__("front.actions.order")}}
            </a>
            
        </div>
        <div class="relative h-full w-[550px] rounded-[30px] self-end ">
            <img class="relative z-0 h-full w-full object-cover rounded-[30px]" src="{{asset("assets/img/home/Advantage/image.webp")}}" alt="rectangle image">
            <!-- <img class="absolute w-[426px] h-[484px] -top-[150px] left-[90px] z-20" src="{{asset("assets/img/home/who/logo.svg")}}" alt="logo"> -->
        </div>
    </div>
</div>
