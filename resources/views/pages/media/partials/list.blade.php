<div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
    @forelse ($medias as $item)
        <a href="{{ route('media.show', $item->slug) }}" class="card latest-media-card max-w-6xl mx-auto rounded-3xl shadow-2xl overflow-hidden border border-gray-100 lg:h-[280px] flex fade-in-up" data-delay="0">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-0">
                <div class="relative h-auto overflow-hidden lg:col-span-1">
                    <img src="{{ env('CMS_URL') . $item->cover_img }}" alt="media-img" class="w-full h-full object-cover">
                    <div class="absolute top-6 left-6">
                        @if ($item->category === 'News')
                            <span class="inline-block bg-secondary text-white text-xs px-4 py-2 rounded-full font-semibold">
                                {{ $item->category }}
                            </span>
                        @elseif ($item->category === 'Blogs')
                            <span class="inline-block bg-blue-600 text-white text-xs px-4 py-2 rounded-full font-semibold">
                                {{ $item->category }}
                            </span>
                        @elseif ($item->category === 'Events')
                            <span class="inline-block bg-purple-600 text-white text-xs px-4 py-2 rounded-full font-semibold">
                                {{ $item->category }}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="p-8 flex flex-col flex-1 lg:col-span-2">
                    <div class="flex items-center gap-4 font-semibold mb-2">
                        <div class="text-sm mb-2 font-semibold">
                            <i class="fas fa-calendar mr-2"></i>{{ date('F d, Y', strtotime($item->created_at)) }}
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-4 leading-tight">
                        {{ $item->title }}
                    </h3>
                    <p class="mb-4 leading-relaxed flex-1">
                        {{ Str::limit($item->excerpt, 120, '...') }}
                    </p>
                    <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                        Read More
                        <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                    </div>
                </div>
            </div>
        </a>
    @empty
        <div class="col-span-full text-center py-20 fade-in-up" data-delay="0">
            <div class="max-w-md mx-auto">
                <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-slate-100 flex items-center justify-center">
                    <i class="fas fa-xmark text-3xl text-slate-400"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-6">
                    No Media Found
                </h3>
                <a href="{{ route('media.index') }}#medias"
                    class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-primary text-white font-semibold hover:opacity-90 transition">
                    Reset Filters
                    <i class="fas fa-rotate-left"></i>
                </a>
            </div>
        </div>
    @endforelse
</div>

{{-- Pagination --}}
<div id="paginationContainer" class="bg-white px-6 py-4 mt-5">
    {{ $medias->links() }}
</div>
