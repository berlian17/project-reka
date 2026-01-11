<div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12 max-w-6xl mx-auto">
    @foreach ($projects as $item)
        <a href="{{ route('project.show', $item->slug) }}" class="card project-card rounded-3xl shadow-2xl overflow-hidden border border-gray-100 flex flex-col fade-in-up" data-delay="0">
            <div class="relative h-52 overflow-hidden">
                <img src="{{ config('app.cms_url') . $item->cover_img }}" alt="project-img" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-linear-to-t from-primary/95 via-primary/50 to-transparent"></div>
                <div class="absolute bottom-4 left-6">
                    <span class="inline-block bg-secondary text-white text-xs px-4 py-2 rounded-full font-semibold">
                        {{ $item->service_name }}
                    </span>
                </div>
            </div>
            <div class="p-8 flex flex-col flex-1">
                <div class="text-sm mb-2 font-semibold">
                    <i class="fas fa-calendar mr-2"></i>{{ date('F d, Y', strtotime($item->completion_date)) }}
                </div>
                <h3 class="text-xl font-bold text-primary mb-4 leading-tight">
                    {{ $item->title }}
                </h3>
                <div class="inline-flex items-center text-secondary font-semibold gap-2 group mt-auto">
                    Read More
                    <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                </div>
            </div>
        </a>
    @endforeach
</div>

{{-- Pagination --}}
<div id="paginationContainer" class="bg-white px-6 py-4 mt-5">
    {{ $projects->links() }}
</div>
