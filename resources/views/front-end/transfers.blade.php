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
                    <h1 class="">TRANSFERS</h1>
                </div>
            </div>
        </section>
        {{--  end first section    --}}
        <section class="py-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <h2 class="mb-4"><b>ONE-WAY FREE TRANSFER</b></h2>
                        <p>The transfers we provide are the fastest and easiest way to get from the airport, train stations or a bus station. You can arrive at any time and professional drivers in a cozy vehicles will be waiting with a sign and your name on it. See the conditions to get a complimentary transfer.</p>
                        <div class="ps-4">
                            <h6 class="mb-3"><b>Conditions:</b></h6>
                            <ul>
                                <li class="mb-3"><img class="me-4" style="width: 48px" height="48px" src="{{ asset('assets/images/icon.png') }}" alt=""> <span>200 EUR or more per person and reservation</span></li>
                                <li class="mb-3"><img class="me-4" style="width: 48px" height="48px" src="{{ asset('assets/images/icon.png') }}" alt=""> <span>200 EUR or more per person and reservation</span></li>
                                <li class="mb-3"><button style="height: auto" type="submit" class="btn btm-form m-0">BOOK A TRANSFER</button></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/images/transfers-woman.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row flex-row-reverse">
                    <div class="col-lg-6">
                        <h2 class="mb-4"><b>DISCOUNTED TRANSFERS</b></h2>
                       <div>
                           <div class="row py-3 bg-light">
                               <div class="col-6"><b>TRANSFER TYPE</b></div>
                               <div class="col-6"><b>RATES</b></div>
                           </div>
                           <div class="row border-bottom py-3">
                               <div class="col-6"><b>AIRPORT 1-4 PERSONS</b></div>
                               <div class="col-6">17€ / 450 CZK</div>
                           </div>
                           <div class="row border-bottom py-3">
                               <div class="col-6"><b>AIRPORT 1-4 PERSONS</b></div>
                               <div class="col-6">17€ / 450 CZK</div>
                           </div>
                           <div class="row border-bottom py-3">
                               <div class="col-6"><b>AIRPORT 1-4 PERSONS</b></div>
                               <div class="col-6">17€ / 450 CZK</div>
                           </div>
                           <div class="row border-bottom py-3">
                               <div class="col-6"><b>AIRPORT 1-4 PERSONS</b></div>
                               <div class="col-6">17€ / 450 CZK</div>
                           </div>
                       </div>

                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/images/transfers-woman.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        {{-- section form --}}
        <section class="py-5" style="background: url('{{ asset('assets/images/formbg.jpg') }}') no-repeat; background-position: center;background-size: cover">
            <div class="container">
                <form action="" style="padding: 25px 70px; max-width: 770px;" class="mx-auto bg-white">
                    <h2 class="text-center mb-4">Transfers Booking</h2>
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="text" class="form-control" name="" placeholder="Reservation number*" aria-label="Reservation number*" required>
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="email" class="form-control" name="" placeholder="Email city*" aria-label="Email city*">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="number" class="form-control" name="" placeholder="Mobile phone" aria-label="Mobile phone">
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="text" class="form-control" name="" placeholder="Departure city*" aria-label="Departure city*">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <select id="inputState" class="form-select">
                                <option selected>Transport From/To</option>
                                <option>Vaclav Havel Airport</option>
                                <option>Vaclav Havel Airport</option>
                                <option>Vaclav Havel Airport</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="text" class="form-control" name="" placeholder="Flight, train or bus number*" aria-label="Flight, train or bus number*">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <labe>
                            Landing time or bus, train arrival time (24h format)*
                        </labe>
                    </div>
                    <div class="row mb-3">
                            <div class="col-md-4">
                                <input type="time" class="form-control" placeholder="First name" aria-label="First name">
                            </div>
                        </div>
                    <div class="row mb-3">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <input type="number" class="form-control" name="" placeholder="Adults*" aria-label="Adults*">
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <input type="number" class="form-control" name="" placeholder="Number of children*" aria-label="Number of children*">
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <input type="text" class="form-control" name="" placeholder="Children's age" aria-label="Children's age">
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Hand luggage only
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="" placeholder="Please mention any special or oversized luggage. (max 100 characters) - for example. : Stroller 70*60*50 cm" style="height: 150px"></textarea>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="" placeholder="Anything else you'd like us to know? (max 255 characters)" style="height: 150px"></textarea>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <label for="security">
                            Security question : <span>1</span> + <span>5</span> =
                        </label>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="security">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center mb-3">
                        <button type="submit" class="btn btm-form m-0 h-auto ">BOOK A TRANSFER</button>
                    </div>
                    <p class="text-center">
                        Please read all transfer conditions
                        <a href="#" class="text-dark" style="text-decoration: underline">here</a>
                    </p>
                </form>
            </div>
        </section>
        {{-- end section form --}}






    </main>
@endsection

@section('scripts')

@endsection

