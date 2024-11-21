@props([
    'light' => false,
])
@php
@endphp

<div @class([$light ? 'light-bg' : '', 'controls cursor-pointer'])>
    <button onclick="" class="next"></button>
    <button onclick="" class="prev mx-2"></button>
</div>
