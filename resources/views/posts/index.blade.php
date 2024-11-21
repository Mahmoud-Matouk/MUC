<x-layouts.custom>
    <div class="pb-24 blog pt-36" data-aos="fade-up" data-aos-duration="1500">
        <div class="container">
            @if (count($posts))
                <x-posts.list :posts="$posts" />
            @else
                <p class="p-10 text-2xl text-center bg-white rounded-lg shadow"><b> {{ __('front.blog.no_posts') }} </b>
                </p>
            @endif
        </div>
    </div>
</x-layouts.custom>
