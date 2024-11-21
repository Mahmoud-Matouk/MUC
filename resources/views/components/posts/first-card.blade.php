@props(['post'])

<div class="mt-20 mb-20 py-8 px-8 lg:flex  relative">
    <div
        class="absolute inset-0 h-full w-full bg-[rgba(33,96,253,.12)] bg-[linear-gradient(to_right,#80808012_0.5px,transparent_0.5px),linear-gradient(to_bottom,#80808012_0.5px,transparent_0.5px)] bg-[size:45px_45px] z-0">
    </div>
    <div class="flex-1 lg:mr-8 z-10 flex justify-center">
        <a href="/posts/{{ $post->slug }}">
            <img src="{{ asset($post->image ? 'storage/' . $post->image : config('app.fallback.image')) }}"
                alt="{{ $post->title }}" class="rounded-xl w-full mx-auto">
        </a>
    </div>

    <div class="flex-1 flex flex-col justify-between z-10">
        <header class="mt-8 lg:mt-0">
            <div class="mt-4">
                <h1 class="text-3xl font-bold">
                    <a href="{{ route('blog') . '/' . $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h1>
                <span class="mt-2 block text-gray-400 text-xs">Published {{ $post->created_at->diffForHumans() }}</span>
            </div>
        </header>

        <div class="text-sm mt-2 space-y-4">
            {!! $post->summary !!}
        </div>

        @if ($post->author)
            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img class="h-10 w-10 rounded-full"
                        src="{{ asset($post->author->avatar ? 'app/' . $post->author->avatar : config('app.fallback.anonymous')) }}"
                        alt="{{ $post->author->name }}">
                    <div class="ml-3">
                        <a href="{{ route('blog') . '/author/' . $post->author->username }}">
                            <h5 class="text-sm"> by <span
                                    class="transition-all duration-200 font-bold hover:text-[#3F75FD]">{{ $post->author->name }}</span>
                                | 4 Min Read </h5>
                        </a>
                    </div>
                </div>
            </footer>
        @endif
    </div>
</div>
