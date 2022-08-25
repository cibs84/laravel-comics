@extends('layouts.app')

@section('page_title')
    Comics
@endsection

@section('main_content')
    {{-- Main Banner --}}
    <section class="main-banner"></section>

    {{-- SECTION - Comics --}}
    <section class="comics-section">
        <div class="container">
            <!-- Category Label -->
            <h2 class="category-label"> Current Series</h2>

            <!-- All Comics -->
            <div class="comics-list">
                {{-- <comicCard 
                    v-for="comic, index in comicsArray" 
                    :key="index" 
                    :comicDetails="comic"
                /> --}}
                @foreach ($comics_array as $comic)
                    
                    <div class="col">
                        <div class="comic-card">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                            <h3 class="series">{{ $comic['series'] }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Load More Button -->
            <button class="load-more">Load More</button>
        </div>
    </section>
@endsection
