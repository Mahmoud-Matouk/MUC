<div class="bg-white w-full  py-20 relative z-30" id="products">
    <div class="w-full container flex flex-col justify-between">
        <div class="space-y-2 mx-auto md:w-[390px] text-center">
            <h3 class="text-base md:text-lg  font-normal text-secondary-800">{{__("products.head")}}</h3>
            <h1 class="text-lg md:text-xl  font-semibold text-dark-800 ">{{__("products.description")}}</h1>
        </div>

        <div class=" w-full grid grid-cols-1 md:grid-cols-3  py-6  gap-4  md:pt-[54px]">
            @for ($i = 1; $i <= 6; $i++)
                <div class=" md:col-span-1 flex flex-col items-center justify-between gap-10 p-8  relative rounded-[30px] group  bg-white">
                    <img class="absolute w-[160px] h-[160px] left-[20%] top-[20%] z-0" src="{{asset("assets/img/home/products/Ellipse.png")}}" alt="elipse">
                    <img class="relative z-10 px-auto  w-[400px]" src="{{asset("assets/img/home/products/image$i.webp")}}" alt="image">
                    <h3 class="text-center text-base text-dark-800 font-semibold">{{__("products.products.product$i.title")}}</h3>
                    
                </div>
            
            @endfor
        </div>
        <a href="#contact" class="self-center py-3 px-[31px] z-10 overflow-hidden rounded-[25px] w-[293px] text-center  font-bold text-sm  text-white
            bg-primary-800">
            {{__("front.actions.order")}}
        </a>


    </div>
</div>