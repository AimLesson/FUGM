<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
        <!-- text - start -->
        <div class="mb-10 md:mb-16">
            <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Berita</h2>
        </div>
        <!-- text - end -->

        <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-2 xl:grid-cols-2 xl:gap-8">
            @foreach($beritas as $berita)
                <!-- article - start -->
                <div class="flex flex-col overflow-hidden rounded-lg border bg-white">
                    <a href="/" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
                        <img src="{{ $berita->picture ? asset($berita->picture) : asset('default.png') }}" loading="lazy" alt="{{ $berita->title }}" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                    </a>

                    <div class="flex flex-1 flex-col p-4 sm:p-6">
                        <h2 class="mb-2 text-lg font-semibold text-gray-800">
                            <a href="/" class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">{{ $berita->title }}</a>
                        </h2>

                        <p class="mb-8 text-gray-500">{{ Str::limit($berita->content, 100, '...') }}</p>

                        <div class="mt-auto flex items-end justify-between">
                            <div class="flex items-center gap-2">
                                <div class="h-10 w-10 shrink-0 overflow-hidden rounded-full bg-gray-100">
                                    <img src="{{ asset('default.png') }}" loading="lazy" alt="{{ $berita->author }}" class="h-full w-full object-cover object-center" />
                                </div>

                                <div>
                                    <span class="block text-indigo-500">{{ $berita->author }}</span>
                                    <span class="block text-sm text-gray-400">{{ \Carbon\Carbon::parse($berita->timestamp)->format('M d, Y') }}</span>
                                </div>
                            </div>

                            <span class="rounded border px-2 py-1 text-sm text-gray-500">Berita</span>
                        </div>
                    </div>
                </div>
                <!-- article - end -->
            @endforeach
        </div>
    </div>
</div>
