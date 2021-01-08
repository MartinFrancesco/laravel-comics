@extends('layouts.main')

@section('content')
    <main class="wrap-home">
        <section class="general-hero">
            <div class="container">
                <img src="{{ asset('images/cover-home.jpg') }}" alt="">
                <div class="label">
                    CURRENT SERIES
                </div>
            </div>
        </section>

        <section class="comics">
            <div class="container">
                <ul class="comics-list">
                    @foreach ($comics as $comic)
                        <li>
                            <a href="{{ route('comic-detail', $comic['id']) }}">
                                <img src="{{ $comic['image'] }}" alt="">
                                <h3>{{ $comic['title'] }}</h3>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <a href="">
                    <div class="button">
                        LOAD MORE
                    </div>
                </a>
            </div>
        </section>

        <section class="links">
            <div class="container">
                <ul>
                    <li>
                        <a href="">
                            <img src="{{ asset('images/digital-comics.png') }}" alt="DC-Comics">
                            Digital Comics
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{ asset('images/power-visa.svg') }}" alt="DC-Comics">
                            DC Merchandising
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{ asset('images/merchandise.png') }}" alt="DC-Comics">
                            Subscription
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{ asset('images/subscription.png') }}" alt="DC-Comics">
                            Comic Shop Locator
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{ asset('images/shop.png') }}" alt="DC-Comics">
                            Dc Power Visa
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </main>    
@endsection
