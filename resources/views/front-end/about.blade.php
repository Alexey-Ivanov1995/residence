@extends('layouts.front')

@section('content')
    <main>
        {{--   first section    --}}
        <section class="first-section d-flex flex-column justify-content-between mb-5" style="background: url({{ asset('assets/images/room-section.jpg') }})no-repeat center top;">
            <div style="height: 100%" class="container  d-flex justify-content-center align-items-center">
                <div class="d-lg-flex align-items-center justify-content-center flex-column section-title py-5">
                    <h1 class="">ABOUT US</h1>
                </div>
            </div>
        </section>
        {{--  end first section    --}}
        <section class="py-5 about-info">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <h2><b>ABOUT RESIDENCE BREHOVA</b></h2>
                        <p>Residence Brehova – that is a beautiful art nouveau house built in a year 1910 and located in a Josefov district, known as a Jewish Town, very close to the most major sights – the Old Town Square, Rudolfinum, Charles Bridge and many others. The building has been completely renovated while maintaining the original artistic details, statues, impressive building hall or stucco decorations in the rooms. If you choose any of 11 eleven luxurious apartments, you can be sure your stay will be unforgettable as they are all fully furnished, very spacious and bright.</p>
                    </div>
                    <div class="col-lg-6"><img class="w-100" src="{{ asset('assets/images/about.jpg') }}" alt=""></div>
                </div>
                <div class="row flex-row-reverse">
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <h2><b>ABOUT RESIDENCE BREHOVA</b></h2>
                        <p>Residence Brehova – that is a beautiful art nouveau house built in a year 1910 and located in a Josefov district, known as a Jewish Town, very close to the most major sights – the Old Town Square, Rudolfinum, Charles Bridge and many others. The building has been completely renovated while maintaining the original artistic details, statues, impressive building hall or stucco decorations in the rooms. If you choose any of 11 eleven luxurious apartments, you can be sure your stay will be unforgettable as they are all fully furnished, very spacious and bright.</p>
                    </div>
                    <div class="col-lg-6">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('assets/images/about.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/images/about.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/images/about.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 info-city" style=" background: url('{{ asset('assets/images/about2.jpg') }}') no-repeat;background-size: cover; background-position: center">
            <div class="container text-white">
                <h2 class="text-center mb-4">PRAGUE CITY APARTMENTS</h2>
                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex justify-content-center align-items-center flex-column">
                        <p>70</p>
                        <span>APARTMENTS</span>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex justify-content-center align-items-center flex-column">
                        <p>12</p>
                        <span>LOCATIONS</span>
                    </div><div class="col-lg-3 col-md-6 d-flex justify-content-center align-items-center flex-column">
                        <p>2200</p>
                        <span>FIVE-STAR REVIEWS</span>
                    </div><div class="col-lg-3 col-md-6 d-flex justify-content-center align-items-center flex-column">
                        <p>24</p>
                        <span>YEARS OF EXPERIENCE</span>
                    </div>


                </div>
            </div>
        </section>

        <section class="users py-5">
            <div class="container">
               <div class="text-center">
                   <h2>GUEST SERVICES TEAM</h2>
                   <p>Our professional guest services team has more than 35 experienced members ready to make your stay as comfortable as possible.</p>
               </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card border-0">
                            <a href="#" class="user">
                                <img width=""   src="{{ asset('assets/images/user.png') }}" class="" alt="...">
                            </a>

                            <div class="card-body text-center">
                                <h5 class="card-title"><b>KLARA</b></h5>
                                <span class="text-secondary">Guest Services Manager</span>
                                <p class="card-text text-center">Even though Klara leads a team of guest services agents and she is one of the most important persons in the company, everybody loves her, especially her great style and sense of humour.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card border-0">
                            <a href="#" class="user">
                                <img width=""   src="{{ asset('assets/images/user.png') }}" class="" alt="...">
                            </a>

                            <div class="card-body text-center">
                                <h5 class="card-title"><b>KLARA</b></h5>
                                <span class="text-secondary">Guest Services Manager</span>
                                <p class="card-text text-center">Even though Klara leads a team of guest services agents and she is one of the most important persons in the company, everybody loves her, especially her great style and sense of humour.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card border-0">
                            <a href="#" class="user">
                                <img width=""   src="{{ asset('assets/images/user.png') }}" class="" alt="...">
                            </a>

                            <div class="card-body text-center">
                                <h5 class="card-title"><b>KLARA</b></h5>
                                <span class="text-secondary">Guest Services Manager</span>
                                <p class="card-text text-center">Even though Klara leads a team of guest services agents and she is one of the most important persons in the company, everybody loves her, especially her great style and sense of humour.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card border-0">
                            <a href="#" class="user">
                                <img width=""   src="{{ asset('assets/images/user.png') }}" class="" alt="...">
                            </a>

                            <div class="card-body text-center">
                                <h5 class="card-title"><b>KLARA</b></h5>
                                <span class="text-secondary">Guest Services Manager</span>
                                <p class="card-text text-center">Even though Klara leads a team of guest services agents and she is one of the most important persons in the company, everybody loves her, especially her great style and sense of humour.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      <x-modal-image/>
    </main>
@endsection

@section('scripts')

@endsection
