@props(['post'])

<article
    class="p-4 bg-white bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 hover:shadow-sm rounded-xl group">
    <div class="overflow-hidden">
        <div class="w-full transition-transform duration-500 transform group-hover:scale-110">
            <a href="{{ route('blog') . '/' . $post->slug }}">
                <img src="{{ asset($post->image ? 'storage/' . $post->image : config('app.fallback.image')) }}"
                    alt="{{ $post->title }}" class="w-full rounded-xl">
            </a>
        </div>

        <div class="flex flex-col justify-between mt-4">
            <header>
                <div class="mt-2">
                    <h1 class="text-xl font-bold transition-all duration-200 group-hover:text-primary-500">
                        <a href="{{ route('blog') . '/' . $post->slug }}">
                            {{ $post->title }}
                        </a>
                    </h1>

                    <span class="block mt-2 text-xs text-gray-400">{{ __('front.blog.published') }}
                        {{ $post->published_at->diffForHumans() }}</span>
                </div>
            </header>

            <div class="mt-2 space-y-2 text-sm">
                {!! Str::limit($post->summary, 100) !!}
            </div>

            @if ($post->author)
                <div class="flex items-center mt-5 text-sm ji">
                    <img class="w-8 h-8 rounded-full"
                        src="{{ asset($post->author->avatar ? 'app/' . $post->author->avatar : config('app.fallback.anonymous')) }}"
                        alt="{{ $post->author->name }}">
                    <div class="rtl:mr-2 ltr:ml-2">
                        <h5>
                            {{ __('front.blog.by') }}
                            <span class="font-bold transition-all duration-200 cursor-default hover:text-primary-300">
                                {{ $post->author->name }}
                            </span>
                        </h5>
                    </div>
                </div>
            @endif
        </div>
    </div>
</article>
