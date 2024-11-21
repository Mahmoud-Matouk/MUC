@props(['post'])

<main class="mt-32" data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <div class="flex justify-start my-2">
            <a href="{{ route('blog') }}"
                class="relative inline-flex items-center text-lg transition-colors duration-300 text-primary-500 hover:text-primary-300">
                <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                    <g fill="none" fill-rule="evenodd">
                        <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                        </path>
                        <path class="fill-current"
                            d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                        </path>
                    </g>
                </svg>
                {{ __('front.blog.back') }}
            </a>
        </div>

        <article class="relative inset-0 z-0 w-full h-full text-black">
            <div class="my-6">
                <h3 class="text-3xl font-bold lg:text-4xl">
                    {{ $post->title }}
                </h3>

                {{-- <div class="flex flex-row items-center gap-3 mt-6 mb-8 text-sm lg:justify-start">
                    <div class="inline-flex items-center">
                        <img class="w-10 h-10 rounded-full rtl:ml-2 ltr:mr-2"
                            src="{{ asset($post->author->avatar ? 'app/' . $post->author->avatar : config('app.fallback.anonymous')) }}"
                            alt="{{ $post->author->name }}">
                        <div class="ltr:mr-2 rtl:ml-2">
                            <div>
                                <h5>
                                    {{ __('front.blog.by') }}
                                    <span class="font-bold transition-all duration-200 cursor-default hover:text-primary-300">
                                        {{ $post->author->name }}
                                    </span>
                                    <span>
                                        {{ $post->published_at->diffForHumans() }}
                                    </span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>

            <div class="my-10">
                <img src="{{ asset($post->image ? 'storage/' . $post->image : config('app.fallback.image')) }}"
                    alt="{{ $post->title }}" class="object-cover rounded-xl">

                <div class="flex flex-col pt-5 my-6 space-y-4 leading-loose lg:text-start lg:text-lg">
                    {!! $post->content !!}
                </div>
            </div>
        </article>
    </div>

    {{-- <x-posts.other-posts :postsToShow="$postsToShow" /> --}}
</main>
