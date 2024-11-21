@props([
    'hide' => false,
    'text' => '',
    'color' => false,
    'border' => false,
    'intr' => false,
    'whats' => false,
    'teacher' => false,
    'join' => false,
    'classes' => '',
])

@php
    $register = 'register?_lang=' . app()->getLocale() . '&_source=' . session()->get('source');
@endphp

<button
    onclick="$whats
        ? $teacher
          ? joinTeachers()
          : $join
          ? joinNow('', email)
          : mailto()
        : joinNow('', email)"
    @class([
        $hide ? 'md:flex hidden' : 'flex',
        $intr ? 'intro' : ($whats ? 'whats' : 'join'),
        'md:px-9 px-10 py-2 border cursor-pointer rounded font-bold text-sm flex justify-center items-center',
        $classes,
    ])>
    <span> {{ $whats ? ($text ? $text : __(`front.actions.call`)) : __('front.actions.join') }} </span>

    <img src="{{ asset('/icon.png') }}" class="w-6 h-6 object-contain ltr:ml-2 rtl:mr-2" alt="__(`front.title`)" />
</button>
