<div class="form grid place-items-center">
    @if (session('success'))
        <div class="bg-primary-900 rounded-xl py-8 px-4 mb-2 mt-20">
            <h3 class="text-white text-center font-bold">{{ __('lead.success') }}</h3>

            <img src="{{ asset('assets/web/img/contact/done.svg') }}" class="mt-8 mx-auto" width="100"
                :alt="__('lead.success')" />
        </div>
    @else
        <form wire:submit="create" class=" w-full lg:p-10 p-5 rounded-xl md:w-2/3">
            {{ $this->form }}
        </form>
    @endif
</div>
