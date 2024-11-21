<div class="bg-primary-50 px-16 py-12">
    <div class="relative mx-11 my-11 bg-[#2F7668] rounded-2xl">
        <div class="absolute inset-0 bg-opacity-20 ">
            <img class="absolute h-[80%] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2" src="{{asset("assets/img/home/intro/back.svg")}}" alt="background photo" />
            <img class="absolute left-0 top-0 h-full" src="{{asset("assets/img/home/intro/female-scientist-with-hijab-microscope-laboratory-Photo.png")}}" alt="background photo" />
        </div>
        <div class="relative max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
            <div>
                <h3 class="text-3xl text-[#ACC8C3] tracking-wide font-black">{{__("front.home.intro.captions.caption1")}} </h3>
                <h1 class="text-4xl font-bold tracking-tighter text-white sm:text-5xl">
                    {{__("front.home.intro.captions.caption2")}}
                </h1>
                <p class="mt-3 max-w-2xl text-lg text-[#CDDEDB] sm:mt-4 sm:text-xl">
                {{__("front.home.intro.captions.caption3")}}
                </p>
                <p class="mb-4 max-w-2xl text-lg text-[#CDDEDB]  sm:text-xl">
                {{__("front.home.intro.captions.caption4")}}
                </p>
                <button
                onclick="scrollToElement('reserve')" 
                class="group relative md:px-4 px-3 md:py-3 py-2  z-10 overflow-hidden rounded-xl cursor-pointer w-fit h-full font-bold text-sm  justify-center items-center text-primary-800 border-primary-800 border-2 bg-white  md:hover:py-2 hover:py-1">
                    <span class="bg-dark-500 absolute left-0 bottom-0 mb-0 flex h-0 w-0 rounded-xl translate-x-0 z-0 transform opacity-10 transition-all duration-700 ease-out group-hover:w-full group-hover:h-full"></span>
                    <span> {{__('front.actions.reserve')}} </span>
                </button>
            </div>
        </div>
    </div>
</div>