@extends('layouts.main')

@section('content')
    <main class="comic-detail">
        <section class="general-hero" style="background-image: url({{ $comic['image-hero'] }});">
            <div class="container">
                <img src="{{ $comic['image-cover'] }}" alt="{{ $comic['title'] }}">
            </div>
        </section>
        {{-- details --}}
        <section class="comics mt-3 detail">
            <div class="container center">
                <div class="description">
                    <h1>{{ $comic['title'] }}</h1>
                    <div class="label">
                        <h5>{{ $comic['price'] }}</h5>
                        <h5>AVAILABLE ON 11/10</h5>
                        <div>
                            <a href="">Check Availability <i class="fas fa-caret-down"></i></a>
                        </div>
                    </div>
                    <p>{!! $comic['body'] !!}</p>
                </div>
                <div class="advertise">
                    <h4>Advertisement</h4>
                    <img src="{{ asset('images/adv.png') }}">
                </div>
            </div>
        </section>

        {{-- Specific details --}}
        <section class="specifics">
            <div class="container">
                <div class="left">
                    <h3>Talent</h3>
                    <div>
                        <label for="">Art by:</label>
                        <p>Sandy Jarrel, Agnes Garbowska</p>
                    </div>
                    <div>
                        <label for="">Written by:</label>
                        <p>P.C. Morrisey, Heather Nhufer</p>
                    </div>
                </div>
                <div class="right">
                    <h3>Specs</h3>
                    <div>
                        <label for="">Series:</label>
                        <p>Sandy Jarrel, Agnes Garbowska</p>
                    </div>
                    <div>
                        <label for="">U.S. Price:</label>
                        <p>9.99</p>
                    </div>
                    <div>
                        <label for="">On Sale Date:</label>
                        <p>Nov 10 2020</p>
                    </div>
                </div>
            </div>
        </section>
    </main>    
@endsection