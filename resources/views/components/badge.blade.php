<x-filament::badge
    icon="{{ $icon ?? null }}"
    color="{{ $color ?? null }}"
    size="{{ $size ?? 'md' }}"
    style="width: fit-content"
>
    {{$label}}
</x-filament::badge>
