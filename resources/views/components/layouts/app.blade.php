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
    
    </div>

    @livewireScripts
    @vite('resources/js/app.js')
</body>

</html>
