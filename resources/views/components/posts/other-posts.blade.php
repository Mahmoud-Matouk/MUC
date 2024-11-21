@props(['postsToShow'])

<div>
    <section class="max-w-3xl mx-auto mt-20 mb-10">
        <h2 class="mb-4 text-xl font-semibold">Posts You May Like</h2>
        <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2">
            @foreach ($postsToShow as $post)
                <x-posts.card :post="$post" class="w-full h-full"/>
            @endforeach
        </div>
    </section>
</div>
