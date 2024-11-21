<div class=" relative bg-white w-full z-0" id="advantages">
    <div class="absolute w-[3013.42px] h-[1377.31px] -top-[220px]  z-10">
        <img class="relative " src="{{asset("assets/img/home/Advantage/back.svg")}}" alt="background">
    </div>
    <div class="container flex  justify-between bg-transparent w-full py-20 relative z-20" >
        <div class="flex flex-col justify-between md:w-[762px]">
            <div>
                <h3 class="text-xl leading-[30px] font-normal text-secondary-800">{{__("advantage.title")}}</h3>
                <h1 class="text-[30px] leading-[45px] font-semibold text-dark-800">{{__("advantage.subtitle")}}</h1>
            </div>
            <ul class="flex flex-col gap-3">
                @for ($i=1;$i<=6;$i++)
                        
                    <li>
                        <div class="flex gap-2 items-center">
                            <div class="w-3 h-[15px] bg-primary-800"></div>
                            <h4 class="text-2xl leading-[43px] text-primary-800 font-semibold">{{__("advantage.Adv$i.title")}}</h4>
                        </div>
                        <p class="text-xl leading-[36px] text-[#525459] font-semibold">{{__("advantage.Adv$i.details")}}</p>
                    </li>
                    
                @endfor
            </ul>

            <a href="#contact" class="block w-[293px] text-center  py-3  z-10  rounded-[25px]   font-bold text-lg  text-white bg-secondary-800">
                {{__("front.actions.order")}}
            </a>
            
        </div>
        <div class="relative h-full w-[702px] rounded-[30px] self-end ">
            <img class="relative z-0 h-full w-full object-cover rounded-[30px]" src="{{asset("assets/img/home/Advantage/image.png")}}" alt="rectangle image">
            <!-- <img class="absolute w-[426px] h-[484px] -top-[150px] left-[90px] z-20" src="{{asset("assets/img/home/who/logo.svg")}}" alt="logo"> -->
        </div>
    </div>
</div>
