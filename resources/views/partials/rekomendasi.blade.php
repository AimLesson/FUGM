<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
        <!-- text - start -->
        <div class="mb-4 md:mb-16">
            <h2 class="text-center text-2xl font-semibold uppercase text-gray-800 md:mb-6 lg:text-3xl">Rekomendasi</h2>
        </div>
        <!-- text - end -->

        <div class="grid gap-4 sm:grid-cols-1 md:gap-6 lg:grid-cols-1 xl:grid-cols-1 xl:gap-8">
            @foreach($rekomendasi as $rek)
                <!-- Determine Content Type -->
                @php
                    $type = 'Unknown';
                    if ($rek instanceof \App\Models\Berita) {
                        $type = 'Berita';
                        // $route = route('berita.show', $rek->id);
                    } elseif ($rek instanceof \App\Models\Opini) {
                        $type = 'Opini';
                        // $route = route('opini.show', $rek->id);
                    } elseif ($rek instanceof \App\Models\Essai) {
                        $type = 'Essai';
                        // $route = route('essai.show', $rek->id);
                    }
                @endphp

                <!-- article - start -->
                <a href="/" class="group relative flex h-48 flex-col overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-64 xl:h-96">
                    <img src="{{ $rek->picture ? asset($rek->picture) : asset('images/default.png') }}"
                         loading="lazy"
                         alt="{{ $rek->title }}"
                         class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                    <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 to-transparent md:via-transparent"></div>

                    <div class="relative mt-auto p-4">
                        <span class="block text-sm text-gray-200">
                            {{ \Carbon\Carbon::parse($rek->timestamp)->format('M d, Y') }}
                        </span>
                        <h2 class="mb-2 text-xl font-semibold text-white transition duration-100">
                            {{ $rek->title }}
                        </h2>

                        <!-- Label for Type -->
                        <span class="rounded bg-indigo-500 px-2 py-1 text-xs font-semibold text-white">{{ $type }}</span>
                    </div>
                </a>
                <!-- article - end -->
            @endforeach
        </div>
    </div>
</div>
