@props(['authors'])

<header class="relative flex justify-end">
    <div class="space-y-2 lg:space-y-0 lg:space-x-4 lg:inline-flex justify-end">
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
            <select
                class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold border-0 focus:outline-none focus:ring-0"
                wire:model.live="author">
                <option value="">Author</option>
                @foreach($authors as $author)
                    <option value="{{ $author->username }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
</header>
