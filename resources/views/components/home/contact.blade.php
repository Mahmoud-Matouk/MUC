<section class="relative z-10 py-20 contact bg-primary-50" id="contact">
    <div class="container">
        <div class="mb-8 text-dark-900">
            <h2 class="inline-block px-6 py-2 mb-2 text-xl font-bold border border-none rounded-2xl bg-primary-200 text-primary-400">
                {{ __('front.home.contact.section') }}
            </h2>
            <h1 class="mb-4 text-3xl font-bold">{{ __('front.home.contact.head') }}</h1>
        </div>

        <div class="grid gap-10 md:grid-cols-2">
            <div class="order-first">
                <livewire:leads.store />
            </div>

            <div class="order-last">
                <div class="p-5 bg-white rounded-lg w-fit">
                    <img loading="lazy" src="{{ asset('assets/img/home/contact/location.png') }}" alt="Location Map"
                        class="object-cover w-full rounded-lg h-96">
                </div>

                <div class="mt-4 text-sm text-gray-600 xl:flex">
                    <button onclick="callus({{ Config::get('site.contacts.whats') }})" target="_blank"
                        class="flex items-center justify-start gap-0 mx-4 xl:flex-row hover:text-primary-400">
                        <img loading="lazy" src="{{ asset('assets/img/home/contact/icon1.png') }}" alt="info"
                            class="w-4 h-4 mr-2 text-primary-500">
                        <span class="rtl:mr-2 ltr:ml-2 ">0{{ Config::get('site.contacts.whats') }}</span>
                    </button>

                    <button onclick="mailto({{ Config::get('site.contacts.email') }})" target="_blank"
                        class="flex items-center justify-start gap-0 mx-4 xl:flex-row hover:text-primary-400">
                        <img loading="lazy" src="{{ asset('assets/img/home/contact/icon2.png') }}" alt="info"
                            class="w-4 h-4 mr-2 text-primary-500">
                        <span class="rtl:mr-2 ltr:ml-2">{{ Config::get('site.contacts.email') }}</span>
                    </button>

                    <a href="{{ Config::get('site.social.location') }}" target="_blank"
                        class="flex items-center justify-start gap-0 mx-4 xl:flex-row hover:text-primary-400">
                        <img loading="lazy" src="{{ asset('assets/img/home/contact/icon3.png') }}" alt="info"
                            class="w-4 h-4 mr-2 text-primary-500">
                        <span class="rtl:mr-2 ltr:ml-2">{{ Config::get('site.contacts.location') }}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
