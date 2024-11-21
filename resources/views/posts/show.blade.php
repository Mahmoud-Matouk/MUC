<x-layouts.custom>
    <div class="container">
        @if (isset($post))
            <x-posts.show :post="$post" />
        @else
            <p class="p-10 my-32 text-2xl text-center shadow"><b> {{ __('front.blog.no_posts') }} </b></p>
        @endif
    </div>
</x-layouts.custom>
