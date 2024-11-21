{{-- <div class="grid form place-items-center">
    @if (session('success'))
        <div class="px-4 py-8 mt-20 mb-2 bg-primary-900 rounded-xl">
            <h3 class="font-bold text-center text-white">{{ __('lead.success') }}</h3>

            <img src="{{ asset('assets/web/img/contact/done.svg') }}" class="mx-auto mt-8" width="100"
                :alt="__('lead.success')" />
        </div>
    @else
        <form wire:submit="create" class="w-full p-5 lg:p-10 rounded-xl md:w-2/3">
            {{ $this->form }}
        </form>
    @endif
</div> --}}

<div>
    <form wire:submit="create" class="w-full rounded-xl bg-transparent">
        {{ $this->form }}
    </form>
</div>
