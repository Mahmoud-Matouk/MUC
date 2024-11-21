@php

@endphp


{{-- [radial-gradient(ellipse_at_center_top,_var(--tw-gradient-stops))] from-[#172E82] via-secondary-900 to-


--}}
<x-layouts.app>
    <div class="relative w-full h-full bg-transparent ">
         <div class="absolute inset-0 z-0 opacity-5">
            <img src="{{asset("assets/img/background.svg")}}" alt="background">
         </div>
        <x-core.header />
        <x-home.intro />
    </div>
    <x-home.solutions />
    <x-home.strength />
    <x-home.clients />
    <x-home.numbers />
    <x-home.services />
    <x-home.work />
    <x-home.add2 />
    <x-home.contact />

</x-layouts.app>
