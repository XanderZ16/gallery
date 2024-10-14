<div class="flex flex-grow">
    @if ($photos->count())
        <div class="grid grid-cols-2 gap-1 mt-3 sm:grid-cols-3 lg:grid-cols-4">
            @foreach ($photos as $photo)
                <div class="relative w-full aspect-square">
                    <div class="absolute top-0 left-0 w-full bg-gray-400 aspect-square"></div>
                    <a href="/photos/{{ $photo->id }}"
                        class="w-full relative z-10 aspect-square hover:scale-[1.01] transform transition ease-in-out hover:cursor-pointer">
                        <img src="/storage/{{ $photo->image }}" alt="{{ $photo->title }}"
                            class="object-cover w-full h-full" loading="lazy">
                    </a>
                </div>
            @endforeach
        </div>
    @else
        <div class="flex items-center justify-center flex-grow w-full col-span-3 mt-4 text-xl text-center text-primary">No
            Photos</div>
    @endif

    @if ($photos->hasMorePages())
        <div x-intersect.full="$wire.loadMore()" class="p-4">
            <div wire:loading wire:target="loadMore" class="loading-indicator">
                Loading more posts...
            </div>
        </div>
    @endif
</div>
