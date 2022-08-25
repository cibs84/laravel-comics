@extends('layouts.app')

@section('main_content')
    {{-- Main Banner --}}
    @include('components.main_banner')
    <div class="sub-banner">
        <!-- Comic Thumbnail -->
        <div class="comic-thumbnail">
            <img src="{{ $current_comic['thumb'] }}" alt="">
            <div class="text top">COMIC BOOK</div>
            <div class="text bottom">VIEW GALLERY</div>
        </div> 
    </div>


    {{-- SECTION - Single Comic --}}
    <section class="single-comic-section">
        <div class="container-medium">

            {{-- Description and Advertisement --}}
            <div class="desc-adv-wrapper">
                <div class="desc-status">
                    {{-- Comic Title --}}
                    <h1 class="comic-title">{{ $current_comic['title'] }}</h1>

                    {{-- Bar Availability --}}
                    <div class="bar-status">
                        {{-- Left --}}
                        <div class="left">
                            <div class="price">U.S. Price: <span>{{ $current_comic['price'] }}</span></div>
                            <div class="availability">Availability</div>
                        </div>
                        {{-- Right --}}
                        <div class="right">
                            Check Availability 
                            <span class="arrow">&#129170;</span>
                        </div>
                    </div>

                    {{-- Comic's Description --}}
                    <div class="description">{{ $current_comic['description'] }}</div>
                </div>

                {{-- Advertisement --}}
                <div class="advertisement">
                    <h4>Advertisement</h4>
                    <a href="">
                        <img src="{{asset('img/adv.jpg')}}" alt="Image Advertisement">
                    </a>
                </div>
            </div>

        </div>
        
        {{-- Details --}}
        <div class="comic-details">
            <div class="container-medium">
                {{-- Talent --}}
                <div class="talent">
                    <h2>Talent</h2>
                    <div class="col">
                        <div class="art-by">
                            <div class="left">
                                Art by:
                            </div>
                            <div class="right">
                                @foreach ($current_comic['artists'] as $artist)
                                    <span>{{ $artist }}</span>,
                                @endforeach
                            </div>
                        </div>
                        <div class="written-by">
                            <div class="left">
                                Art by:
                            </div>
                            <div class="right">
                                @foreach ($current_comic['writers'] as $writer)
                                    <span>{{ $writer }}</span>,
                                @endforeach
                            </div>
                        </div>    
                    </div>
                </div>

                {{-- Specs --}}
                <div class="specs">
                    <h2>Specs</h2>
                    <div class="col">
                        {{-- Series --}}
                        <div class="series">
                            <div class="left">
                                Series:
                            </div>
                            <div class="right">
                                {{$current_comic['series']}}
                            </div>
                        </div>
                        
                        {{-- U.S. Price --}}
                        <div class="us-price">
                            <div class="left">
                                U.S. Price:
                            </div>
                            <div class="right">
                                {{$current_comic['price']}}
                            </div>
                        </div>
                        
                        {{-- Series --}}
                        <div class="sale_date">
                            <div class="left">
                                On Sale Date:
                            </div>
                            <div class="right">
                                {{$current_comic['sale_date']}}
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
