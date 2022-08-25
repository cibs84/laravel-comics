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
                @foreach ($comics_array as $comic)
                    <div class="col">
                        <div class="comic-card">
                            <a href="{{ route('single_comic', ['id' => $comic['id']]) }}">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                                <h3 class="series">{{ $comic['series'] }}</h3>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Load More Button -->
            <button class="load-more">Load More</button>
        </div>
    </section>


    {{-- SECTION - Shop --}}
    <section class=section-shop>
        <div class=container>
            <!-- Shop List -->
            <ul>
                @foreach ($shopListItems as $listItem)
                    <li>
                        <a href="{{$listItem['url']}}">
                            <img src="{{$listItem['image']}}" />
                            <span class=text>{{$listItem['text']}}</span>
                        </a>
                    </li> 
                @endforeach
            </ul>
        </div>
    </section>
@endsection
