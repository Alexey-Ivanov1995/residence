@extends('layouts.front')

@section('content')
    <main>
        {{--   first section    --}}
        <section class="first-section d-flex flex-column justify-content-between" style="background: url({{ asset('assets/images/room-section.jpg') }})no-repeat center top;">
            <div style="height: 100%" class="container  d-flex justify-content-center align-items-center">
                <div class="d-lg-flex align-items-center justify-content-center flex-column section-title py-5">
                    <h1 class=""> APARTMENT</h1>
                    <p class="">76 m2 - up to 4 guests (2 on murphy bed) - 1 bathroom</p>
                </div>
            </div>
        </section>
        {{--  end first section    --}}

        {{-- roome detail --}}
        <section class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 info-room">
                        <div class="mb-5">
{{--                            <div id="carouselExampleFade" class="carousel slide carousel-fade mb-3" data-bs-ride="carousel">--}}
{{--                                <div class="carousel-inner">--}}
{{--                                    <div class="carousel-item active">--}}
{{--                                        <img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="...">--}}
{{--                                    </div>--}}
{{--                                    <div class="carousel-item" id="1">--}}
{{--                                        <img width="100%" src="{{ asset('assets/images/room2.jpg') }}" class="d-block w-100" alt="...">                                </div>--}}
{{--                                    <div class="carousel-item">--}}
{{--                                        <img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="...">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">--}}
{{--                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                                    <span class="visually-hidden">Previous</span>--}}
{{--                                </button>--}}
{{--                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">--}}
{{--                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                                    <span class="visually-hidden">Next</span>--}}
{{--                                </button>--}}
{{--                            </div>--}}
                        <div>
                            <div class="owl-carousel car0-1 owl-theme mb-3">
                                <div class="item" data-hash="1"><img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="..."></div>
                                <div class="item" data-hash="2"><img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="..."></div>
                                <div class="item" data-hash="3"><img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="..."></div>
                                <div class="item" data-hash="4"><img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="..."></div>
                                <div class="item" data-hash="5"><img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="..."></div>
                                <div class="item" data-hash="6"><img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="..."></div>
                                <div class="item" data-hash="7"><img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="..."></div>
                                <div class="item" data-hash="8"><img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="..."></div>
                                <div class="item" data-hash="9"><img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="..."></div>
                                <div class="item" data-hash="10"><img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="..."></div>
                                <div class="item" data-hash="11"><img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="..."></div>
                                <div class="item" data-hash="12"><img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="..."></div>
                            </div>
                            <div class="owl-carousel owl-theme owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage" style="transition: all 0.25s ease 0s; width: 1420px; transform: translate3d(-1198px, 0px, 0px);">
                                        <div class="owl-item active" style="width: 78.75px; margin-right: 10px;">
                                            <div class="item">
                                                <a class="button secondary url" href="#1"><img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="..."></a>
                                            </div>
                                        </div>
                                        <div class="owl-item active center" style="width: 78.75px; margin-right: 10px;">
                                            <div class="item">
                                                <a class="button secondary url" href="#2"><img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="..."></a>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 78.75px; margin-right: 10px;">
                                            <div class="item">
                                                <a href="#1"><img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="..."></a>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 78.75px; margin-right: 10px;">
                                            <div class="item" data-hash="three">
                                                <a href="#2"><img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="..."></a>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 78.75px; margin-right: 10px;">
                                            <div class="item" >
                                                <a href="#3"><img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="..."></a>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 78.75px; margin-right: 10px;">
                                            <div class="item">
                                                <a href="#4"><img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="..."></a>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 78.75px; margin-right: 10px;">
                                            <div class="item">
                                                <a href="#5"><img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="..."></a>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 78.75px; margin-right: 10px;">
                                            <div class="item">
                                                <a href="#6"><img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="..."></a>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 78.75px; margin-right: 10px;">
                                            <div class="item">
                                                <a href="#7"><img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="..."></a>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 78.75px; margin-right: 10px;">
                                            <div class="item">
                                                <a href="#8"><img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="..."></a>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 78.75px; margin-right: 10px;">
                                            <div class="item">
                                                <a href="#9"><img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="..."></a>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 78.75px; margin-right: 10px;">
                                            <div class="item">
                                                <a href="#10"><img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="..."></a>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 78.75px; margin-right: 10px;">
                                            <div class="item">
                                                <a href="#11"><img width="100%" src="{{ asset('assets/images/bedroom_1.jpg') }}" class="d-block w-100" alt="..."></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                        </div>
                        <div class="mb-5">
                            <h2>OVERVIEW</h2>
                            <p>{{ $roo->description }}</p>
                        </div>
                        <div class="mb-5">
                            <h5>APARTMENT INFO</h5>
                            <ul>
                                <li>Max: {{$roo->persons}} Person(s)</li>
                                <li>Size: {{ $roo->size }}</li>
                                <li>View: {{ $roo->view }}</li>
                                <li>Floor: {{ $roo->floor }}</li>
                            </ul>
                        </div>
                        <div>
                            <h3>AMENITIES</h3>
                         <p>All our apartments are fully furnished and ready for both long-term and short-term stay.</p>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-4 mb-4">
                                <h5>LIVING ROOM</h5>
                                <ul>
                                    <li>Work desk</li>
                                    <li>Comfortable sofa</li>
                                    <li>Flat smart TV</li>
                                </ul>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h5>LIVING ROOM</h5>
                                <ul>
                                    <li>Work desk</li>
                                    <li>Comfortable sofa</li>
                                    <li>Flat smart TV</li>
                                </ul>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h5>LIVING ROOM</h5>
                                <ul>
                                    <li>Work desk</li>
                                    <li>Comfortable sofa</li>
                                    <li>Flat smart TV</li>
                                </ul>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h5>LIVING ROOM</h5>
                                <ul>
                                    <li>Work desk</li>
                                    <li>Comfortable sofa</li>
                                    <li>Flat smart TV</li>
                                </ul>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h5>LIVING ROOM</h5>
                                <ul>
                                    <li>Work desk</li>
                                    <li>Comfortable sofa</li>
                                    <li>Flat smart TV</li>
                                </ul>
                            </div>
                        </div>
                        <div class="tb mb-5">
                            <h3 class="mb-4">RATES</h3>
                            <div>
                                <div class="row tb-head">
                                    <div class="col-6">RATE PERIOD</div>
                                    <div class="col-2 d-none -d-md d-block">NIGHTLY</div>
                                    <div class="col-2 d-none -d-md d-block">WEEKLY</div>
                                    <div class="col-2 d-none -d-md d-block">MONTHLY</div>
                                </div>
                                <div class="row border-bottom py-4">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <h5>LOW SEASON</h5>
                                        <p>November - March</p>
                                        <p class="mb-0">except Christmas and New Year's Eve</p>
                                    </div>
                                    <div class="col-md-2 col-4"><h5 class="d-block d-md-none">NIGHTLY</h5>€109</div>
                                    <div class="col-md-2 col-4"><h5 class="d-block d-md-none">NIGHTLY</h5>€570</div>
                                    <div class="col-md-2 col-4"><h5 class="d-block d-md-none">NIGHTLY</h5>€2080</div>
                                </div>
                                <div class="row border-bottom py-4">
                                    <div class="col-md-6">
                                        <h5>HIGH SEASON</h5>
                                        <p class="mb-0">April - October</p>
                                    </div>
                                    <div class="col-md-2 col-4"><h5 class="d-block d-md-none">NIGHTLY</h5>€109</div>
                                    <div class="col-md-2 col-4"><h5 class="d-block d-md-none">NIGHTLY</h5>€570</div>
                                    <div class="col-md-2 col-4"><h5 class="d-block d-md-none">NIGHTLY</h5>€2080</div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h5>Price includes:</h5>
                            pApartment rent includes all utility costs (gas, electricity, garbage disposal etc.), set of towels and toiletries. You can request their additional replenishment and towels exchange as well as complete maid service including fresh bed linens anytime during your stay. Small charge will apply for these extra services.
                        </div>
                    </div>
                    <div class="col-md-3 right-sticky">
                        <div>
                            <div class="card">
                                <div class="card-header pt-4">
                                    <h5 class="card-title text-center">AVERAGE PRICE</h5>
                                    <div class="price-room text-center">
                                        <span>€126</span>
                                        <span>/night</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <div class="mb-4">
                                            <p>ARRIVAL</p>
                                            <input type="text" class="datepicker" placeholder="Arrival Date">
                                        </div>
                                        <div class="mb-4">
                                            <p>DEPATURE</p>
                                            <input type="text" class="datepicker" placeholder="Departure Date">
                                        </div>

                                        <button type="button" class="btn btm-form w-100">MAKE INQUIRY</button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-center" style="line-height: 2">
                                *final price depends on the season, day of the week etc. and will be sent to you in an email offer
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end roome detail --}}
    </main>
@endsection

@section('scripts')
    <script>
        $('.car0-1').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            dots: false,
            items:1,
        })

        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            dots: false,
            responsive:{
                0:{
                    items:3
                },
                600:{
                    items:3
                },
                1000:{
                    items:7
                }
            }
        })

    </script>
@endsection
