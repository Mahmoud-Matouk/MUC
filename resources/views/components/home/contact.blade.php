<section class="relative z-10 py-20 contact" id="contact">
    <div class="container">

        <div class="mb-10 text-xl">
            <h2 class="inline-block py-2 mb-2 font-bold border border-none text-primary-200">
                {{ __('front.home.contact.head') }}
            </h2>
            <h1 class="text-black">{{ __('front.home.contact.caption') }}</h1>
        </div>

        <div class="grid gap-10 p-10 bg-white md:grid-cols-3 rounded-3xl">
            <!-- Two-column div -->
            <div class="order-last md:col-span-2">
                <livewire:leads.store />
            </div>

            <!-- One-column div -->
            <div class="order-first md:col-span-1">
                <div class="p-5 w-fit">
                    <img loading="lazy" src="{{ asset('assets/img/home/contact/photo.png') }}" alt="Photo"
                        class="object-cover w-full rounded-lg h-96">
                </div>
            </div>

        </div>
    </div>
</section>
