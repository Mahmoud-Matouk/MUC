<div class="container bg-[#F2F3FA] w-full pt-16  md:pt-28 pb-10 md:pb-0">
    <div class=" flex   bg-transparent items-center  relative pb-10">
        <div class="relative z-20 flex flex-col gap-2 w-full pb-12  md:w-[600] ">
            <div class="flex flex-col gap-4 pt-6">
                <h2 class="text-xl  md:text-5xl md:leading-[65px] font-semibold text-primary-800">
                    {{__("front.home.intro.head")}}</h2>
                <h2 class="text-xl md:text-5xl md:leading-[65px] font-semibold text-dark-800">
                    {{__("front.home.intro.captions.caption1")}}</h2>

            </div>
            <p class="my-4 text-xs  md:text-sm   font-normal text-dark-500 md:w-[430px]">
                {{__("front.home.intro.captions.caption2")}}</p>
            <a href="#contact" class="py-3 px-[31px] z-10 overflow-hidden rounded-[25px] self-start  font-bold text-xs md:text-base justify-center items-center text-white
            bg-secondary-800
        ">
                {{__("front.actions.call")}}

            </a>
        </div>
        <div class="absolute top-0 left-0 z-10 w-full h-full lg:opacity-100 opacity-20">

            <img class="relative lg:w-[550px] xl:w-[700px] h-full mr-auto "
                src="{{asset("assets/img/home/intro/image.webp")}}" alt="image">
        </div>
    </div>

    <div class="w-full md:h-[200px] bg-white shadow-md rounded-[30px] p-6 md:px-[38px] md:py-[36px] flex md:gap-6 gap-3 md:flex-nowrap flex-wrap items-center text-center relative z-10 ">
        <div class="flex flex-col gap-2 items-center justify-center mx-auto">
            <img class="md:w-[50px] md:h-[50px] w-[40px] h-[40px]" src="{{asset("assets/img/home/intro/icon1.svg")}}" alt="icon">
            <h3 class=" text-sm md:text-sm text-dark-800 font-semibold">{{__("front.home.intro.sections.sec1.title")}}</h3>
            <p class="text-xs md:text-xs text-dark-500 font-normal">{{__("front.home.intro.sections.sec1.details")}}</p>
        </div>
        <div class="flex flex-col gap-2 items-center justify-center mx-auto">
            <img class="md:w-[50px] md:h-[50px] w-[40px] h-[40px]" src="{{asset("assets/img/home/intro/icon2.svg")}}" alt="icon">
            <h3 class="text-sm md:text-sm text-dark-800 font-semibold">{{__("front.home.intro.sections.sec2.title")}}</h3>
            <p class="text-xs md:text-xs text-dark-500 font-normal">{{__("front.home.intro.sections.sec2.details")}}</p>
        </div>
        <div class="flex flex-col gap-2 items-center justify-center mx-auto">
            <img class="md:w-[50px] md:h-[50px] w-[40px] h-[40px]" src="{{asset("assets/img/home/intro/icon3.svg")}}" alt="icon">
            <h3 class="text-sm md:text-sm text-dark-800 font-semibold">{{__("front.home.intro.sections.sec3.title")}}</h3>
            <p class="text-xs md:text-xs text-dark-500 font-normal">{{__("front.home.intro.sections.sec3.details")}}</p>
        </div>
        <div class="flex flex-col gap-2 items-center justify-center mx-auto">
            <img class="md:w-[50px] md:h-[50px] w-[40px] h-[40px]" src="{{asset("assets/img/home/intro/icon4.svg")}}" alt="icon">
            <h3 class="text-sm md:text-sm text-dark-800 font-semibold">{{__("front.home.intro.sections.sec4.title")}}</h3>
            <p class="text-xs md:text-xs text-dark-500 font-normal">{{__("front.home.intro.sections.sec4.details")}}</p>
        </div>
    </div>
</div>