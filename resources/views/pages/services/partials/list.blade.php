@if ($services->count() > 0)
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12 max-w-6xl mx-auto">
        @foreach ($services as $item)
            <a href="{{ route('service.show', $item->slug) }}" class="card p-8 rounded-3xl text-center transform hover:scale-105 shadow-2xl border border-gray-100 flex flex-col items-center fade-in-up" data-delay="0">
                <div class="bg-primary w-28 h-28 icon-circle rounded-full flex items-center justify-center mb-8">
                    <i class="{{ $item->icon }} text-white text-5xl"></i>
                </div>
                <p class="text-primary! text-xl font-semibold mb-2">
                    {{ $item->title }}
                </p>
                <p class="mb-4 leading-relaxed">
                    {{ $item->excerpt }}
                </p>
                <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                    Learn More
                    <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                </div>
            </a>
        @endforeach
    </div>

    {{-- Pagination --}}
    <div id="paginationContainer" class="bg-white px-6 py-4 mt-5">
        {{ $services->links() }}
    </div>
@endif
