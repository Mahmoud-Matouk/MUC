<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="@lang('app.dir')" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="{{ $description ?? __('front.description') }}">
    <link rel="icon" href="{{ asset('favicon2.ico') }}" type="image/ico">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    
    <title>
        @isset($title)
            {{ $title . ' - ' . config('app.name') }}
        @else
            {{ config('app.name') }}
        @endisset
    </title>

    @livewireStyles
    @vite('resources/css/app.css')

    <x-core.gtm />
</head>

<!-- <body class="bg-[#fcfcfc] "> -->

<body class="bg-[##F2F3FA] z-0 scroll-smooth">
    <div class="flex flex-col min-w-full overflow-hidden">
        
        <div class="wrapper">
            {{ $slot }}
        </div>

        <div class="relative">
            <div class="absolute flex flex-col text-center justify-between py-2 md:py-4 w-[90%]    md:w-[792px] md:h-[232px]  top-32 md:top-24 left-1/2 -translate-x-1/2    z-50 bg-gradient-to-r from-[#D22929] to-[#FF4646] rounded-2xl">
                <h2 class="text-lg md:text-[40px] md:leading-[48px] text-white font-bold">{{__("add3.head")}}</h2>
                <p class="text-white text-sm md:text-xl md:leading-6 font-normal ">{{__("add3.description1")}}</p>
                <p class="text-white text-sm md:text-xl md:leading-6 font-normal ">{{__("add3.description2")}}</p>    
                <a href="/register"
                    class="mx-auto group relative py-2 px-3 flex-shrink-0 md:px-6 md:py-3  z-10 overflow-hidden rounded-[150px] cursor-pointer w-fit  font-bold text-sm md:text-lg  justify-center items-center text-primary-900 border-primary-800 border-2 bg-white transition-all">
                    <span> {{__("add3.button")}}</span>
                </a>
            
            </div>
            <x-home.add3/>    
            <x-core.footer />
        </div>
    </div>

    @livewireScripts
    @vite('resources/js/app.js')
</body>

</html>
