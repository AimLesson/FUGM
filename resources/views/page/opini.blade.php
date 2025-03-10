@extends('layout.app')

@section('title', 'Opini')

@section('content')
    @include('partials.carousel')

    Opini

    <div class="grid grid-cols-1 md:grid-cols-3 gap-3 px-2 md:px-4 ">
        <!-- Left Side (Main Content) -->
        <div class="md:col-span-2 space-y-6 ">
            @include('partials.berita')
            @include('partials.opini')
            @include('partials.essai')
        </div>

        <!-- Right Side (Sidebar/Recommendations) -->
        <div class="md:col-span-1 space-y-6 ">
            @include('partials.rekomendasi')
        </div>
    </div>
@endsection
