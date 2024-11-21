@php
    $current_step = 1;
@endphp
<div class="bg-[#FCFCFC] w-full">
    <div class="container bg-transparent py-12">
        <div class="text-center self-center space-y-4">
            <div class="text-2xl leading-9 relative font-bold -left-1/2 translate-x-1/2 text-secondary-800 w-fit">
                <span class=" text-primary-900">{{ explode(' ', __('work.head'), 2)[0] }} </span>
                <img class="absolute   bottom-1/2 translate-y-1/2 text-primary-800"
                    src="{{ asset('assets/img/home/strength/Remotely- 1.svg') }}" alt="word background">
                {{ explode(' ', __('work.head'), 2)[1] }}
            </div>
            <p class="text-base font-normal text-[#808080] mx-auto w-3/4">{{ __('work.description') }}</p>
        </div>


        <div id="timeline" class="relative container grid grid-cols-[1fr_52px_1fr] grid-flow-row w-fit mx-auto my-12">
        
            
            <div  class="progress1 absolute h-full w-[7px] bg-[#E2E5EE] left-1/2 -translate-x-1/2 z-0 "
            ></div>

                <!-- step1 -->
            <img class="mr-auto ml-2 w-auto h-auto  md:w-[313.12px] object-cover"
                src="{{ asset('assets/img/home/work/image1.webp') }}" alt="work 1 image">
            
            <div class="relative flex flex-col h-full items-center">
                <div id="circle1"  class=" h-[52px] w-[52px] mx-auto relative z-30 bg-[#E2E5EE] rounded-full flex flex-col items-center justify-center">
                    <h1  class="circle-text1 my-auto text-xl text-secondary-800 font-bold">1</h1>
                </div>
                <div  class="progress-S1 absolute h-full w-[7px] bg-secondary-800 left-1/2 -translate-x-1/2 z-10 my-12"
                ></div>
            </div>

            <div class="ml-auto mr-2 w-full h-[250px]  md:w-[270px] md:mt-10 md:h-[320px] flex flex-col gap-2 text-start">
                <h3 class="text-base md:text-lg text-secondary-800 font-bold">{{ __('work.steps.step1.head') }}</h3>
                <p class="text-sm md:text-sm md:leading-[26px] text-[#909090] font-normal">
                    {{ __('work.steps.step1.description') }}</p>
            </div>

            <!-- step2 -->

            <div class="mr-auto ml-2 w-full h-[250px]  md:w-[270px] md:mt-10 md:h-[320px] flex flex-col gap-2 text-start">
                    <h3 class="text-base md:text-lg text-secondary-800 font-bold">{{ __('work.steps.step2.head') }}</h3>
                    <p class="text-sm md:text-sm md:leading-[26px] text-[#909090] font-normal">
                        {{ __('work.steps.step2.description') }}</p>
                </div>            
            
            <div class="relative flex flex-col h-full items-center">
                <div id="circle2"  class=" h-[52px] w-[52px] mx-auto relative z-30 bg-[#E2E5EE] rounded-full flex flex-col items-center justify-center">
                    <h1  class="circle-text2 my-auto text-xl text-secondary-800 font-bold">2</h1>
                </div>
                <div  class="progress-S2 absolute h-full w-[7px] bg-secondary-800 left-1/2 -translate-x-1/2 z-10 my-12"
                ></div>
            </div>
            
            <img class=" ml-auto mr-2 w-full md:w-[432.1px] h-auto  border-[2px] border-white "
                        src="{{ asset('assets/img/home/work/image2.webp') }}" alt="work 2 image">
            
            
            
                <!-- step3 -->
            
            <img class="mr-auto ml-2 md:ml-4 w-full md:w-[339px]  border-[2px] border-white   "
                src="{{ asset('assets/img/home/work/image3.webp') }}" alt="work 3 image">
            <div class="relative flex flex-col h-full items-center">
                <div id="circle3"  class=" h-[52px] w-[52px] mx-auto relative z-30 bg-[#E2E5EE] rounded-full flex flex-col items-center justify-center">
                    <h1  class="circle-text3 my-auto text-xl text-secondary-800 font-bold">3</h1>
                </div>
                <div  class="progress-S3 absolute h-full w-[7px] bg-secondary-800 left-1/2 -translate-x-1/2 z-10 my-12"
                ></div>
            </div>
            <div class="ml-auto mr-2  w-full h-[250px] md:w-[202px] md:h-[431.34px] flex flex-col gap-2">
                    <h3 class="text-base md:text-lg text-secondary-800 font-bold">{{ __('work.steps.step3.head') }}
                    </h3>
                    <p class="text-sm md:text-sm md:leading-[26px] text-[#909090] font-normal">
                        {{ __('work.steps.step3.description') }}</p>
                </div>
            
        </div>
        
        
        
        <!-- <div class="relative container grid grid-cols-[1fr_52px_1fr] gap-4 grid-flow-row w-fit mx-auto py-12">
            <div class="flex flex-col items-end gap-4 w-fit mr-auto">
                <div class="h-[250px] md:h-[320px]">
                    <img class="md:ml-4 w-auto h-auto  md:w-[313.12px]  border-[2px] border-white object-cover"
                        src="{{ asset('assets/img/home/work/image1.webp') }}" alt="work 1 image">
                </div>    

                <div class=" w-full h-[250px]  md:w-[270px] md:mt-10 md:h-[320px] flex flex-col gap-2 text-start">
                    <h3 class="text-base md:text-lg text-secondary-800 font-bold">{{ __('work.steps.step2.head') }}</h3>
                    <p class="text-sm md:text-sm md:leading-[26px] text-[#909090] font-normal">
                        {{ __('work.steps.step2.description') }}</p>
                </div>
                <div class=" h-[250px] md:h-[431.34px]">
                    <img class="md:ml-4 w-full md:w-[339px]  border-[2px] border-white   "
                        src="{{ asset('assets/img/home/work/image3.webp') }}" alt="work 3 image">
                </div>
            </div>
            <div class="flex flex-col items-center w-fit">
                <div :class="active ? 'active' : ''" x-data="{
                    active: false,
                    height: 0,
                    handleScroll() {
                        if (this.active) {
                            var top = $el.getBoundingClientRect().top;
                            var viewportCenter = window.innerHeight / 2;
                            this.height = `${viewportCenter - top}px`;
                        }
                    }
                }"
                    x-intersect:enter.margin.-50%.0="active = true;" x-intersect:leave.margin.-50%.0="active = false"
                    @scroll.window="handleScroll">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-[250px] md:h-[320px]" width="52"
                        fill="none">
                        <rect class=" w-[300px] md:w-[415px]" :class="active ? 'fill-secondary-800' : 'fill-[#E2E5EE]'"
                            height="7" x="29" y="17" fill="#172E82" rx="3.5" transform="rotate(90 29 17)" />
                        <circle cx="26" cy="26" r="26"
                            :class="active ? 'fill-secondary-800' : 'fill-[#E2E5EE]'" />
                        <path :class="active ? 'fill-[#E2E5EE]' : 'fill-secondary-800'"
                            d="M28.828 34h-3.384V22.048l-3.096 2.472c-.192-.016-.416-.088-.672-.216a2.006 2.006 0 0 1-.672-.552c-.192-.24-.288-.544-.288-.912 0-.432.136-.792.408-1.08a9.882 9.882 0 0 1 1.008-.912l2.736-2.088a4.728 4.728 0 0 1 1.032-.6c.336-.128.744-.192 1.224-.192.528 0 .936.064 1.224.192.288.128.448.208.48.24V34Z" />
                    </svg>
                </div>
                <div :class="active ? 'active' : ''" x-data="{
                    active: false,
                    height: 0,
                    handleScroll() {
                        if (this.active) {
                            var top = $el.getBoundingClientRect().top;
                            var viewportCenter = window.innerHeight / 2;
                            this.height = `${viewportCenter - top}px`;
                        }
                    }
                }"
                    x-intersect:enter.margin.-50%.0="active = true;" x-intersect:leave.margin.-50%.0="active = false"
                    @scroll.window="handleScroll">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-[250px] md:h-[390px]" width="52"
                        fill="none">
                        <rect class="w-[300px] md:w-[385px]" :class="active ? 'fill-secondary-800' : 'fill-[#E2E5EE]'"
                            height="7" x="29" y="17" fill="#172E82" rx="3.5" transform="rotate(90 29 17)" />
                        <circle cx="26" cy="26" r="26"
                            :class="active ? 'fill-secondary-800' : 'fill-[#E2E5EE]'" />
                        <path :class="active ? 'fill-[#E2E5EE]' : 'fill-secondary-800'"
                            d="M31.9239 34H20.0919V31.288C20.1559 31.256 20.3399 31.136 20.6439 30.928C20.9479 30.704 21.3239 30.432 21.7719 30.112C22.2199 29.792 22.6919 29.448 23.1879 29.08C23.6839 28.696 24.1559 28.32 24.6039 27.952C25.0679 27.584 25.4519 27.248 25.7559 26.944C26.4919 26.24 27.0919 25.576 27.5559 24.952C28.0199 24.328 28.2519 23.648 28.2519 22.912C28.2519 22.512 28.1639 22.112 27.9879 21.712C27.8119 21.296 27.5079 20.952 27.0759 20.68C26.6439 20.392 26.0359 20.248 25.2519 20.248C24.5799 20.248 24.0199 20.384 23.5719 20.656C23.1239 20.912 22.7719 21.216 22.5159 21.568C22.2599 21.92 22.0759 22.24 21.9639 22.528C21.3399 22.416 20.8599 22.208 20.5239 21.904C20.2039 21.584 20.0439 21.232 20.0439 20.848C20.0439 20.208 20.3399 19.6 20.9319 19.024C21.1079 18.864 21.3879 18.664 21.7719 18.424C22.1719 18.184 22.6919 17.976 23.3319 17.8C23.9719 17.608 24.7319 17.512 25.6119 17.512C27.5479 17.512 29.0599 17.992 30.1479 18.952C31.2359 19.912 31.7799 21.176 31.7799 22.744C31.7799 23.528 31.6359 24.232 31.3479 24.856C31.0759 25.48 30.7399 26.04 30.3399 26.536C29.9399 27.032 29.5639 27.464 29.2119 27.832C28.8759 28.168 28.4999 28.512 28.0839 28.864C27.6679 29.216 27.2599 29.544 26.8599 29.848C26.4759 30.152 26.1399 30.408 25.8519 30.616C25.5799 30.824 25.4199 30.944 25.3719 30.976H31.9239V34Z" />
                    </svg>
                </div>
                <div :class="active ? 'active' : ''" x-data="{
                    active: false,
                    height: 0,
                    handleScroll() {
                        if (this.active) {
                            var top = $el.getBoundingClientRect().top;
                            var viewportCenter = window.innerHeight / 2;
                            this.height = `${viewportCenter - top}px`;
                        }
                    }
                }"
                    x-intersect:enter.margin.-50%.0="active = true;" x-intersect:leave.margin.-50%.0="active = false"
                    @scroll.window="handleScroll">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-[250px]  md:h-[435px]" width="52"
                        fill="none">
                        <rect class="w-[300px] md:w-[385px]" :class="active ? 'fill-secondary-800' : 'fill-[#E2E5EE]'"
                            height="7" x="29" y="17" fill="#172E82" rx="3.5" transform="rotate(90 29 17)" />
                        <circle cx="26" cy="26" r="26"
                            :class="active ? 'fill-secondary-800' : 'fill-[#E2E5EE]'" />
                        <path :class="active ? 'fill-[#E2E5EE]' : 'fill-secondary-800'"
                            d="M25.2999 24.304H25.6359C26.5959 24.304 27.2999 24.112 27.7479 23.728C28.1959 23.344 28.4199 22.856 28.4199 22.264C28.4199 21.672 28.1959 21.16 27.7479 20.728C27.3159 20.28 26.5639 20.056 25.4919 20.056C24.8679 20.056 24.3399 20.144 23.9079 20.32C23.4919 20.496 23.1479 20.712 22.8759 20.968C22.6199 21.224 22.4199 21.472 22.2759 21.712C22.1479 21.936 22.0599 22.104 22.0119 22.216C21.3879 22.168 20.9239 21.984 20.6199 21.664C20.3159 21.328 20.1639 20.952 20.1639 20.536C20.1639 20.312 20.1959 20.096 20.2599 19.888C20.3239 19.68 20.4439 19.464 20.6199 19.24C20.7799 19.032 21.0519 18.792 21.4359 18.52C21.8359 18.248 22.3799 18.016 23.0679 17.824C23.7559 17.616 24.6439 17.512 25.7319 17.512C27.1879 17.512 28.3639 17.72 29.2599 18.136C30.1559 18.552 30.8119 19.104 31.2279 19.792C31.6599 20.464 31.8759 21.192 31.8759 21.976C31.8759 22.664 31.7319 23.264 31.4439 23.776C31.1559 24.272 30.8039 24.688 30.3879 25.024C29.9719 25.344 29.5719 25.576 29.1879 25.72C30.1959 25.992 30.9479 26.48 31.4439 27.184C31.9559 27.872 32.2119 28.656 32.2119 29.536C32.2119 30.992 31.6679 32.168 30.5799 33.064C29.5079 33.96 27.9239 34.408 25.8279 34.408C24.5639 34.408 23.4839 34.272 22.5879 34C21.7079 33.744 21.0279 33.472 20.5479 33.184C20.0839 32.896 19.8279 32.736 19.7799 32.704L21.1959 30.208C21.2919 30.272 21.5319 30.424 21.9159 30.664C22.2999 30.904 22.8039 31.128 23.4279 31.336C24.0519 31.544 24.7719 31.648 25.5879 31.648C26.7079 31.648 27.5079 31.44 27.9879 31.024C28.4679 30.608 28.7079 30.08 28.7079 29.44C28.7079 28.72 28.4359 28.176 27.8919 27.808C27.3479 27.44 26.6039 27.256 25.6599 27.256H23.9799C23.9159 27.16 23.8279 26.976 23.7159 26.704C23.6199 26.416 23.5719 26.096 23.5719 25.744C23.5719 25.264 23.6919 24.904 23.9319 24.664C24.1879 24.424 24.6439 24.304 25.2999 24.304Z" />
                    </svg>
                </div>
            </div>
            <div class="flex flex-col items-start gap-4 w-fit ml-auto">
                <div class="w-full h-[250px]  md:w-[304px] md:h-[320px] flex flex-col gap-2 text-start">
                    <h3 class="text-base md:text-lg text-secondary-800 font-bold">{{ __('work.steps.step1.head') }}</h3>
                    <p class="text-sm md:text-sm md:leading-[26px] text-[#909090] font-normal">
                        {{ __('work.steps.step1.description') }}</p>
                </div>
                <div class="h-[250px] md:h-[360px]">
                    <img class="w-full md:w-[432.1px] h-auto  border-[2px] border-white "
                        src="{{ asset('assets/img/home/work/image2.webp') }}" alt="work 2 image">
                </div>
                <div class="w-full h-[250px] md:w-[202px] md:h-[431.34px] flex flex-col gap-2">
                    <h3 class="text-base md:text-lg text-secondary-800 font-bold">{{ __('work.steps.step3.head') }}
                    </h3>
                    <p class="text-sm md:text-sm md:leading-[26px] text-[#909090] font-normal">
                        {{ __('work.steps.step3.description') }}</p>
                </div>
            </div>
        </div> -->


     

    </div>
</div>