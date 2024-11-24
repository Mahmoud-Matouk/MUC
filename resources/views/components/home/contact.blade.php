<section class="relative z-10 py-20 contact" id="contact">
    <div class="container">

        <div class="mb-10 text-xl">
            <h2 class="inline-block py-2 mb-2 font-normal text-base md:text-lg  border border-none text-secondary-800">
                {{ __('front.home.contact.head') }}
            </h2>
            <h1 class="text-dark-800 text-lg md:text-xl font-semibold ">{{ __('front.home.contact.caption') }}</h1>
        </div>

        <div class="grid gap-10 p-10 bg-white md:grid-cols-3 rounded-3xl">
            <!-- Two-column div -->
            <div class="order-last md:col-span-2">
                <livewire:leads.store />
            </div>

            <!-- One-column div -->
            <div class="order-first md:col-span-1">
                <div class="p-5 w-fit">
                    <video src="{{asset("assets/img/home/contact/video.mp4")}}" class="w-full rounded-lg h-96" autoplay loop></video>
                    <!-- <img loading="lazy" src="{{ asset('assets/img/home/contact/photo.png') }}" alt="Photo"
                        class="object-cover w-full rounded-lg h-96"> -->
                </div>
            </div>

        </div>
    </div>
</section>
