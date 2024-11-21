@props([
    'event' => 'reserve-event',
    'hide' => false,
    'text' => __('front.actions.reserve'),
    'color' => false,
    'classes' => '',
    'reserve' => true,
    'type' => '',
    'icon' => '',
])

@php
    $currentUrl = url()->current();

    $utms = session()->only(['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content']);

    $link = config('app.dash_url') . '/reserve?_lang=' . app()->getLocale();
@endphp

<button onclick="scrollToElement('contact')" @class([
    $event,
    $hide ? 'md:flex hidden' : 'flex',
    $reserve ? 'reserve' : 'results',
    'group relative md:px-4 px-3 md:py-3 py-2  z-10 overflow-hidden rounded-xl cursor-pointer w-fit h-full font-bold text-sm  justify-center items-center transition-all',
    $type === 'primary'
        ? 'text-white bg-primary-800 border-primary-800 border-2 hover:bg-primary-800'
        : ($type === 'secondary'
            ? 'text-primary-800 border-primary-800 border-2 bg-white'
            : ''),
    $classes,
])>
    <span
        class="{{ $type === 'primary' ? 'bg-primary-50 ' : 'bg-dark-500 ' }} absolute left-0 bottom-0 mb-0 flex h-0 w-0 rounded-xl translate-x-0 z-0 transform opacity-10 transition-all duration-700 ease-out group-hover:w-full group-hover:h-full"></span>
    <span> {{ $reserve ? __('front.actions.reserve') : __('front.actions.results') }} </span>
</button>

<script>
    window.reserve = function() {
        let link = @json($link);
        const utms = @json($utms);
        const currentUrl = @json($currentUrl);

        for (const [key, value] of Object.entries(utms)) {
            link += `&${key}=${value}`;
        }

        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            event: 'reserve',
            link: currentUrl,
            ...utms,
        });

        window.open(link, '_blank');
    }
</script>
