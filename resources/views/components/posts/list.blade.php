@props(['posts'])


<div class="pt-5">
    <div class="mx-auto max-w-7xl">
        <h5 class="flex items-center justify-between pt-5 pb-5 text-2xl font-bold text-black">
            {{ __('front.blog.title') }}
        </h5>

        <div class="grid w-full h-full grid-cols-1 gap-10 mt-5 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($posts as $post)
                <x-posts.card :post="$post" />
            @endforeach
        </div>

        <div class="mt-16 mb-16">
            {{ $posts->links() }}
        </div>
    </div>
</div>
