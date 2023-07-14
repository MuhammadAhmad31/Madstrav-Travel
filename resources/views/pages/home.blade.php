@extends('layouts.app')

@section('title')
    MADSTRAV
@endsection

@section('content')
    <!-- Header -->
    <header class="text-center">
        <h1>
            Explore The Beautiful World
            <br>
            As Easy One Click
        </h1>
        <p>
            You will see beautiful
            <br>
            moment you never see before
        </p>
        <a href="#popular" class="btn btn-get-started px-4 mt-4">
            Get Started
        </a>
    </header>

    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>{{ $members }}</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>{{ $travels }}</h2>
                    <p>Travels</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>{{ $transactions }}</h2>
                    <p>Transactions</p>
                </div>
            </section>
        </div>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Tourism Place</h2>
                        <p>
                            something that you never try
                            <br>
                            before in this world
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    @foreach ($items as $item)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column"
                                style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');">
                                <div class="travel-country">{{ $item->location }}</div>
                                <div class="travel-location">{{ $item->title }}</div>
                                <div class="travel-button mt-auto">
                                    <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section-networks" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <h2>Our Network</h2>
                        <p>
                            Companies are trusted us
                            <br>
                            more just a trip
                        </p>
                    </div>
                    <div class="col-md-8 text-center networks-content">
                        <img src="{{ url('frontend/images/partner-1.png') }}" alt="Logo Partner" class="img-partner">
                        <img src="{{ url('frontend/images/partner-2.png') }}" alt="Logo Partner" class="img-partner">
                        <img src="{{ url('frontend/images/partner-3.png') }}" alt="Logo Partner" class="img-partner">
                        <img src="{{ url('frontend/images/partner-4.png') }}" alt="Logo Partner" class="img-partner">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
