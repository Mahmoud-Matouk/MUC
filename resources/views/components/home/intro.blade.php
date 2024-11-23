<div class="container bg-[#F2F3FA] w-full pt-16 pb-16 md:pt-28 md:pb-20">
    <div class=" flex   bg-transparent items-center  relative pb-10">
        <div class="relative z-20 flex flex-col gap-2 w-full mx-4 md:w-[600] ">
            <div class="flex flex-col gap-4">
                <h2 class="text-2xl  md:text-[70px] md:leading-[105px] font-semibold text-primary-800">
                    {{__("front.home.intro.head")}}</h2>
                <h2 class="text-2xl md:text-[70px] md:leading-[105px] font-semibold text-dark-800">
                    {{__("front.home.intro.captions.caption1")}}</h2>

            </div>
            <p class="mt-4 text-base  md:text-lg md:leading-[32px] font-normal text-dark-500 md:w-[500px]">
                {{__("front.home.intro.captions.caption2")}}</p>
            <a href="#contact" class="py-3 px-[31px] z-10 overflow-hidden rounded-[25px] self-start  font-bold text-sm md:text-lg justify-center items-center text-white
            bg-secondary-800
        ">
                {{__("front.actions.call")}}

            </a>
        </div>
        <div class="absolute top-0 left-0 z-10 w-full h-full md:opacity-100 opacity-20">

            <img class="relative  md:w-[600px] h-full mr-auto "
                src="{{asset("assets/img/home/intro/image.png")}}" alt="image">
        </div>
    </div>

    <div class="w-full md:h-[241px] bg-white shadow-md rounded-[30px] p-6 md:px-[58px] md:py-[46px] flex md:gap-6 gap-3 md:flex-nowrap flex-wrap items-center text-center ">
        <div class="flex flex-col gap-2 items-center justify-center mx-auto">
            <img class="md:w-[70px] md:h-[70px] w-[40px] h-[40px]" src="{{asset("assets/img/home/intro/icon1.svg")}}" alt="icon">
            <h3 class=" text-base md:text-lg text-dark-800 font-semibold">{{__("front.home.intro.sections.sec1.title")}}</h3>
            <p class="text-sm text-dark-500 font-normal">{{__("front.home.intro.sections.sec1.details")}}</p>
        </div>
        <div class="flex flex-col gap-2 items-center justify-center mx-auto">
            <img class="md:w-[70px] md:h-[70px] w-[40px] h-[40px]" src="{{asset("assets/img/home/intro/icon2.svg")}}" alt="icon">
            <h3 class="text-base md:text-lg text-dark-800 font-semibold">{{__("front.home.intro.sections.sec2.title")}}</h3>
            <p class="text-sm text-dark-500 font-normal">{{__("front.home.intro.sections.sec2.details")}}</p>
        </div>
        <div class="flex flex-col gap-2 items-center justify-center mx-auto">
            <img class="md:w-[70px] md:h-[70px] w-[40px] h-[40px]" src="{{asset("assets/img/home/intro/icon3.svg")}}" alt="icon">
            <h3 class="text-base md:text-lg text-dark-800 font-semibold">{{__("front.home.intro.sections.sec3.title")}}</h3>
            <p class="text-sm text-dark-500 font-normal">{{__("front.home.intro.sections.sec3.details")}}</p>
        </div>
        <div class="flex flex-col gap-2 items-center justify-center mx-auto">
            <img class="md:w-[70px] md:h-[70px] w-[40px] h-[40px]" src="{{asset("assets/img/home/intro/icon4.svg")}}" alt="icon">
            <h3 class="text-base md:text-lg text-dark-800 font-semibold">{{__("front.home.intro.sections.sec4.title")}}</h3>
            <p class="text-sm text-dark-500 font-normal">{{__("front.home.intro.sections.sec4.details")}}</p>
        </div>
    </div>
</div>