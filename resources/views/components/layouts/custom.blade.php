<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="@lang('app.dir')">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="{{ $description ?? __('front.description') }}">
    <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/ico">

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

<body class="bg-[#fcfcfc]">
    <div class="min-w-full overflow-hidden">
        <x-core.custom-header />

        <div class="wrapper">
            {{ $slot }}
        </div>

        <x-core.footer />
    </div>

    @livewireScripts
    @vite('resources/js/app.js')
</body>

</html>
