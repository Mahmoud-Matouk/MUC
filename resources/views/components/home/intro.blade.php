<div class="container bg-[#F2F3FA] w-full pt-28 pb-20">
    <div class=" flex   bg-transparent items-center  relative pb-10">
        <div class="relative z-20 flex flex-col gap-2 w-[600] mr-4 ">
            <div class="flex flex-col gap-4">
                <h2 class="text-[70px] leading-[105px] font-semibold text-primary-800">
                    {{__("front.home.intro.head")}}</h2>
                <h2 class="text-[70px] leading-[105px] font-semibold text-dark-800">
                    {{__("front.home.intro.captions.caption1")}}</h2>

            </div>
            <p class="text-lg leading-[32px] font-normal text-dark-500 md:w-[500px]">
                {{__("front.home.intro.captions.caption2")}}</p>
            <a href="#contact" class="py-3 px-[31px] z-10 overflow-hidden rounded-[25px] self-start  font-bold text-lg justify-center items-center text-white
            bg-secondary-800
        ">
                {{__("front.actions.call")}}

            </a>
        </div>
        <div class="absolute top-0 left-0 z-10  h-full ">

            <img class="relative  w-[655px] h-full mr-auto "
                src="{{asset("assets/img/home/intro/image.png")}}" alt="image">
        </div>
    </div>
    <div class="w-full h-[241px] bg-white shadow-md rounded-[30px] px-[58px] py-[46px] flex gap-6  items-center text-center ">
        <div class="flex flex-col gap-2 items-center justify-center">
            <img src="{{asset("assets/img/home/intro/icon1.svg")}}" alt="icon">
            <h3 class="text-lg text-dark-800 font-semibold">{{__("front.home.intro.sections.sec1.title")}}</h3>
            <p class="text-sm text-dark-500 font-noraml">{{__("front.home.intro.sections.sec1.details")}}</p>
        </div>
        <div class="flex flex-col gap-2 items-center justify-center">
            <img src="{{asset("assets/img/home/intro/icon2.svg")}}" alt="icon">
            <h3 class="text-lg text-dark-800 font-semibold">{{__("front.home.intro.sections.sec2.title")}}</h3>
            <p class="text-sm text-dark-500 font-noraml">{{__("front.home.intro.sections.sec2.details")}}</p>
        </div>
        <div class="flex flex-col gap-2 items-center justify-center">
            <img src="{{asset("assets/img/home/intro/icon3.svg")}}" alt="icon">
            <h3 class="text-lg text-dark-800 font-semibold">{{__("front.home.intro.sections.sec3.title")}}</h3>
            <p class="text-sm text-dark-500 font-noraml">{{__("front.home.intro.sections.sec3.details")}}</p>
        </div>
        <div class="flex flex-col gap-2 items-center justify-center">
            <img src="{{asset("assets/img/home/intro/icon4.svg")}}" alt="icon">
            <h3 class="text-lg text-dark-800 font-semibold">{{__("front.home.intro.sections.sec4.title")}}</h3>
            <p class="text-sm text-dark-500 font-noraml">{{__("front.home.intro.sections.sec4.details")}}</p>
        </div>
    </div>
</div>