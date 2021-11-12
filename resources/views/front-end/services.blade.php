@extends('layouts.front')

@section('title','SERVICES')

@section('styles')
@endsection

@section('content')
    <main>
        {{--   first section    --}}
        <section class="first-section d-flex flex-column justify-content-between mb-5" style="background: url({{ asset('assets/images/services.jpg') }})no-repeat center top;">
            <div style="height: 100%" class="container  d-flex justify-content-center align-items-center">
                <div class="d-lg-flex align-items-center justify-content-center flex-column section-title py-5">
                    <h1 class="">SERVICES</h1>
                </div>
            </div>
        </section>
        {{--  end first section    --}}

        {{--  services  --}}
        <section class="mb-5">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-7 margin-1">
                        <a href="#" class="assistance-img">
                            <img class="w-100" src="{{ asset('assets/images/assistance1.jpg') }}" alt="">
                            <div class="bg-link"></div>
                        </a>
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center align-items-center">
                        <div class="assistance">
                            <h2 class="mb-4"><a href="#">24/7 ASSISTANCE</a></h2>
                            <p class="mb-5">Our guest services staff is ready to help you at any time. The residence porter is present 12 hours a day and our management office will fulfill your wishes 24/7.</p>
                            <button type="submit" class="btn btm-form  m-0">SEND REQUEST</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--  end services  --}}

        <section>
            <div class="container">
                <div>
                    <h2 class="text-center mb-4">APARTMENT SERVICES</h2>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="card border-0 ">
                                <img src="{{ asset('assets/images/ase1.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">MAID SERVICES</h5>
                                    <p class="card-text">Housekeeping and maid services are provided for a small charge - you can choose a basic or complete maid service or towels replacement.</p>
                                    <a href="#" class="btn btn-card ps-0"><b>SEE DETAILS <i class="las la-angle-right"></i></b></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="card border-0 ">
                                <img src="{{ asset('assets/images/ase1.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">MAID SERVICES</h5>
                                    <p class="card-text">Housekeeping and maid services are provided for a small charge - you can choose a basic or complete maid service or towels replacement.</p>
                                    <a href="#" class="btn btn-card ps-0"><b>SEE DETAILS <i class="las la-angle-right"></i></b></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="card border-0 ">
                                <img src="{{ asset('assets/images/ase1.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">MAID SERVICES</h5>
                                    <p class="card-text">Housekeeping and maid services are provided for a small charge - you can choose a basic or complete maid service or towels replacement.</p>
                                    <a href="#" class="btn btn-card ps-0"><b>SEE DETAILS <i class="las la-angle-right"></i></b></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="card border-0 ">
                                <img src="{{ asset('assets/images/ase1.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">MAID SERVICES</h5>
                                    <p class="card-text">Housekeeping and maid services are provided for a small charge - you can choose a basic or complete maid service or towels replacement.</p>
                                    <a href="#" class="btn btn-card ps-0"><b>SEE DETAILS <i class="las la-angle-right"></i></b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="text-center mb-4">CONCIERGE SERVICES</h2>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="card border-0 ">
                                <img src="{{ asset('assets/images/ase1.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">MAID SERVICES</h5>
                                    <p class="card-text">Housekeeping and maid services are provided for a small charge - you can choose a basic or complete maid service or towels replacement.</p>
                                    <a href="#" class="btn btn-card ps-0"><b>SEE DETAILS <i class="las la-angle-right"></i></b></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="card border-0 ">
                                <img src="{{ asset('assets/images/ase1.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">MAID SERVICES</h5>
                                    <p class="card-text">Housekeeping and maid services are provided for a small charge - you can choose a basic or complete maid service or towels replacement.</p>
                                    <a href="#" class="btn btn-card ps-0"><b>SEE DETAILS <i class="las la-angle-right"></i></b></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="card border-0 ">
                                <img src="{{ asset('assets/images/ase1.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">MAID SERVICES</h5>
                                    <p class="card-text">Housekeeping and maid services are provided for a small charge - you can choose a basic or complete maid service or towels replacement.</p>
                                    <a href="#" class="btn btn-card ps-0"><b>SEE DETAILS <i class="las la-angle-right"></i></b></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="card border-0 ">
                                <img src="{{ asset('assets/images/ase1.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">MAID SERVICES</h5>
                                    <p class="card-text">Housekeeping and maid services are provided for a small charge - you can choose a basic or complete maid service or towels replacement.</p>
                                    <a href="#" class="btn btn-card ps-0"><b>SEE DETAILS <i class="las la-angle-right"></i></b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




    </main>
@endsection

@section('scripts')

@endsection

