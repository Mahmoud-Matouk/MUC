@php

@endphp


{{-- [radial-gradient(ellipse_at_center_top,_var(--tw-gradient-stops))] from-[#172E82] via-secondary-900 to-


--}}
<x-layouts.app>
    <div class="bg-[#F2F3FA] h-full  w-full relative ">
         <div class="absolute inset-0 z-0 opacity-[2%]">
            <img src="{{asset("assets/img/background.svg")}}" alt="background">
         </div>
        <x-core.header />
        <x-home.intro />
    </div>
    <x-home.who/>
    <x-home.advantages/>
    <x-home.services/>
    <x-home.products/>
    <x-home.contact />
    <x-core.footer />
</x-layouts.app>
