<a wire:navigate.hover wire:navigate.active {{ $attributes->except('wire:navigate') }}>
    {{ $slot }}
</a>
