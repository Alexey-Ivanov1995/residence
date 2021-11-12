@extends('layouts.front')

@section('content')
    <main>
        {{--   first section    --}}
        <section class="first-section d-flex flex-column justify-content-between" style="background: url({{ asset('assets/images/room-section.jpg') }})no-repeat center top;">
            <div style="height: 100%" class="container  d-flex justify-content-center align-items-center">
                <div class="d-lg-flex align-items-center justify-content-center flex-column section-title py-5">
                    <h1 class="">ARRIVAL INSTRUCTIONS</h1>
                </div>
            </div>
        </section>
        {{--  end first section    --}}
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="category-sticky">
                            <h4 class="mb-4">CATEGORIES</h4>
                            <ul class="list-category">
                                <li class="d-flex">
                                    <div><i class="la la-plane"></i></div>
                                    <div>
                                        <h5><a href="#plain">plain</a></h5>
                                        <p>equipment - pets - children etc.</p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div><i class="la la-train"></i></div>
                                    <div>
                                        <h5><a href="#train">train</a></h5>
                                        <p>equipment - pets - children etc.</p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div><i class="la la-bus"></i></div>
                                    <div>
                                        <h5><a href="#bus">bus</a></h5>
                                        <p>equipment - pets - children etc.</p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div><i class="la la-car"></i></div>
                                    <div>
                                        <h5><a href="#car">car</a></h5>
                                        <p>equipment - pets - children etc.</p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-5" id="plain">
                            <figure class="figure w-100">
                                <img src="{{ asset('assets/images/airplane.jpg') }}" class="figure-img img-fluid w-100 rounded" alt="...">
                                <figcaption>ARRIVING BY AIRPLANE</figcaption>
                            </figure>
                            <div class="block-info mb-4">
                                <div class="mb-5">
                                    <h4><b>1   Transfer</b></h4>
                                    <p>Everything you should know about the apartments, equipment and other details. This is not the place where we present detailed information about each apartment. To find all the details about the place you are going to rent, please check carefully apartment descriptions, photos, floorplans and especially features list. Whatever information you'll be missing, don't hesitate to contact us.</p>
                                    <ul>
                                        <li><span class="badge ps-0"><i class="la la-clock-o"></i></span>cca 30 minutes</li>
                                        <li><span class="badge ps-0"><i class="la la-money"></i></span>free or from 450 CZK/car</li>
                                    </ul>
                                </div>
                                <div class="mb-5">
                                    <h4><b>2   Public Transport</b></h4>
                                    <p>Everything you should know about the apartments, equipment and other details. This is not the place where we present detailed information about each apartment. To find all the details about the place you are going to rent, please check carefully apartment descriptions, photos, floorplans and especially features list. Whatever information you'll be missing, don't hesitate to contact us.</p>
                                    <ul>
                                        <li><span class="badge ps-0"><i class="la la-clock-o"></i></span>cca 30 minutes</li>
                                        <li><span class="badge ps-0"><i class="la la-money"></i></span>free or from 450 CZK/car</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5" id="train">
                            <figure class="figure w-100">
                                <img src="{{ asset('assets/images/airplane.jpg') }}" class="figure-img img-fluid w-100 rounded" alt="...">
                                <figcaption>ARRIVING BY AIRPLANE</figcaption>
                            </figure>
                            <div class="block-info mb-4">
                                <div class="mb-5">
                                    <h4><b>1   Transfer</b></h4>
                                    <p>Everything you should know about the apartments, equipment and other details. This is not the place where we present detailed information about each apartment. To find all the details about the place you are going to rent, please check carefully apartment descriptions, photos, floorplans and especially features list. Whatever information you'll be missing, don't hesitate to contact us.</p>
                                    <ul>
                                        <li><span class="badge ps-0"><i class="la la-clock-o"></i></span>cca 30 minutes</li>
                                        <li><span class="badge ps-0"><i class="la la-money"></i></span>free or from 450 CZK/car</li>
                                    </ul>
                                </div>
                                <div class="mb-5">
                                    <h4><b>2   Public Transport</b></h4>
                                    <p>Everything you should know about the apartments, equipment and other details. This is not the place where we present detailed information about each apartment. To find all the details about the place you are going to rent, please check carefully apartment descriptions, photos, floorplans and especially features list. Whatever information you'll be missing, don't hesitate to contact us.</p>
                                    <ul>
                                        <li><span class="badge ps-0"><i class="la la-clock-o"></i></span>cca 30 minutes</li>
                                        <li><span class="badge ps-0"><i class="la la-money"></i></span>free or from 450 CZK/car</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5" id="bus">
                            <figure class="figure w-100">
                                <img src="{{ asset('assets/images/airplane.jpg') }}" class="figure-img img-fluid w-100 rounded" alt="...">
                                <figcaption>ARRIVING BY AIRPLANE</figcaption>
                            </figure>
                            <div class="block-info mb-4">
                                <div class="mb-5">
                                    <h4><b>1   Transfer</b></h4>
                                    <p>Everything you should know about the apartments, equipment and other details. This is not the place where we present detailed information about each apartment. To find all the details about the place you are going to rent, please check carefully apartment descriptions, photos, floorplans and especially features list. Whatever information you'll be missing, don't hesitate to contact us.</p>
                                    <ul>
                                        <li><span class="badge ps-0"><i class="la la-clock-o"></i></span>cca 30 minutes</li>
                                        <li><span class="badge ps-0"><i class="la la-money"></i></span>free or from 450 CZK/car</li>
                                    </ul>
                                </div>
                                <div class="mb-5">
                                    <h4><b>2   Public Transport</b></h4>
                                    <p>Everything you should know about the apartments, equipment and other details. This is not the place where we present detailed information about each apartment. To find all the details about the place you are going to rent, please check carefully apartment descriptions, photos, floorplans and especially features list. Whatever information you'll be missing, don't hesitate to contact us.</p>
                                    <ul>
                                        <li><span class="badge ps-0"><i class="la la-clock-o"></i></span>cca 30 minutes</li>
                                        <li><span class="badge ps-0"><i class="la la-money"></i></span>free or from 450 CZK/car</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5" id="car">
                            <figure class="figure w-100">
                                <img src="{{ asset('assets/images/airplane.jpg') }}" class="figure-img img-fluid w-100 rounded" alt="...">
                                <figcaption>ARRIVING BY AIRPLANE</figcaption>
                            </figure>
                            <div class="block-info mb-4">
                                <div class="mb-5">
                                    <h4><b>1   Transfer</b></h4>
                                    <p>Everything you should know about the apartments, equipment and other details. This is not the place where we present detailed information about each apartment. To find all the details about the place you are going to rent, please check carefully apartment descriptions, photos, floorplans and especially features list. Whatever information you'll be missing, don't hesitate to contact us.</p>
                                    <ul>
                                        <li><span class="badge ps-0"><i class="la la-clock-o"></i></span>cca 30 minutes</li>
                                        <li><span class="badge ps-0"><i class="la la-money"></i></span>free or from 450 CZK/car</li>
                                    </ul>
                                </div>
                                <div class="mb-5">
                                    <h4><b>2   Public Transport</b></h4>
                                    <p>Everything you should know about the apartments, equipment and other details. This is not the place where we present detailed information about each apartment. To find all the details about the place you are going to rent, please check carefully apartment descriptions, photos, floorplans and especially features list. Whatever information you'll be missing, don't hesitate to contact us.</p>
                                    <ul>
                                        <li><span class="badge ps-0"><i class="la la-clock-o"></i></span>cca 30 minutes</li>
                                        <li><span class="badge ps-0"><i class="la la-money"></i></span>free or from 450 CZK/car</li>
                                    </ul>
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
