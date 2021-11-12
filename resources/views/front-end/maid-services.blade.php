@extends('layouts.front')

@section('content')
    <main>
        {{--   first section    --}}
        <section class="first-section d-flex flex-column justify-content-between" style="background: url({{ asset('assets/images/room-section.jpg') }})no-repeat center top;">
            <div style="height: 100%" class="container  d-flex justify-content-center align-items-center">
                <div class="d-lg-flex align-items-center justify-content-center flex-column section-title py-5">
                    <h1 class="">MAID SERVICES</h1>
                </div>
            </div>
        </section>
        {{--  end first section    --}}

        {{-- section tabs --}}
        <section class="services mb-5 py-5">
            <div class="container">
                <p class="text-center mb-4">The cancellation fee depends on the length of the Lease term stated in the Lease agreement and on the number of days prior Lease commencement when the cancellation notice is delivered to us. The cancellation fee might be charged and/or reservation deposit might forfeit in accordance of following conditions:</p>
                <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">

                    <li class="nav-item col-lg-3 col-12" role="presentation">
                        <button class="nav-link active d-flex flex-column align-items-center" id="oneBedroom-tab" data-bs-toggle="tab" data-bs-target="#oneBedroom" type="button" role="tab" aria-controls="home" aria-selected="true">
                            One Bedroom
                            <span>Apartment</span>
                        </button>
                    </li>
                    <li class="nav-item col-lg-3 col-12" role="presentation">
                        <button class="nav-link  d-flex flex-column align-items-center" id="twoBedroom-tab" data-bs-toggle="tab" data-bs-target="#twoBedroom" type="button" role="tab" aria-controls="home" aria-selected="true">
                            Two Bedroom
                            <span>Apartment</span>
                        </button>
                    </li>
                    <li class="nav-item col-lg-3 col-12" role="presentation">
                        <button class="nav-link  d-flex flex-column align-items-center" id="threeBedroom-tab" data-bs-toggle="tab" data-bs-target="#threeBedroom" type="button" role="tab" aria-controls="home" aria-selected="true">
                            Three Bedroom
                            <span>Apartment</span>
                        </button>
                    </li>
                    <li class="nav-item col-lg-3 col-12" role="presentation">
                        <button class="nav-link  d-flex flex-column align-items-center" id="penthouse-tab" data-bs-toggle="tab" data-bs-target="#penthouse" type="button" role="tab" aria-controls="home" aria-selected="true">
                            Penthouse No. 52
                            <span>Apartment</span>
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="oneBedroom" role="tabpanel" aria-labelledby="oneBedroom-tab">
                        <div class="mb-4">
                            <div class="d-md-flex d-block mb-2">
                                <div class="col-md-2 mb-3 mb-md-0">
                                    <img src="{{ asset('assets/images/fresh-towels.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-10 ps-md-3 ps-0 d-flex justify-content-between">
                                    <div class="d-flex flex-column justify-content-between">
                                        <h4>BASIC MAID SERVICE</h4>
                                        <a href="#serviceBooking" type="button" class="btn btm-form d-flex justify-content-center align-items-center py-0 m-0">Book package</a>
                                    </div>
                                    <div class="services-price text-end">
                                        <span>3 €</span>
                                        <p>per person</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#included" aria-expanded="true" aria-controls="included">
                                            What is included?
                                        </button>
                                    </h2>
                                    <div id="included" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body px-4">
                                            <ul style="list-style: disc" class="p-4">
                                                <li>replacement of used towels with fresh ones (one set includes hand towel, bath towel, face towel)</li>
                                                <li>replacement of a bathmat and a dishtowel</li>
                                                <li>replenishment of toilet paper rolls</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="d-md-flex d-block  mb-2">
                                <div class="col-md-2">
                                    <img src="{{ asset('assets/images/fresh-towels.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-10 ps-md-3 ps-0 d-flex justify-content-between">
                                    <div class="d-flex flex-column justify-content-between">
                                        <h4>BASIC MAID SERVICE</h4>
                                        <a href="#serviceBooking" type="button" class="btn btm-form d-flex justify-content-center align-items-center py-0 m-0">Book package</a>
                                    </div>
                                    <div class="services-price text-end">
                                        <span>3 €</span>
                                        <p>per person</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#included2" aria-expanded="true" aria-controls="included2">
                                            What is included?
                                        </button>
                                    </h2>
                                    <div id="included2" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body px-4">
                                            <ul style="list-style: disc" class="p-4">
                                                <li>replacement of used towels with fresh ones (one set includes hand towel, bath towel, face towel)</li>
                                                <li>replacement of a bathmat and a dishtowel</li>
                                                <li>replenishment of toilet paper rolls</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="twoBedroom" role="tabpanel" aria-labelledby="twoBedroom-tab">
                        <div class="mb-4">
                            <div class="d-md-flex d-block mb-2">
                                <div class="col-md-2 mb-3 mb-md-0">
                                    <img src="{{ asset('assets/images/fresh-towels.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-10 ps-md-3 ps-0 d-flex justify-content-between">
                                    <div class="d-flex flex-column justify-content-between">
                                        <h4>BASIC MAID SERVICE</h4>
                                        <a href="#serviceBooking" type="button" class="btn btm-form d-flex justify-content-center align-items-center py-0 m-0">Book package</a>
                                    </div>
                                    <div class="services-price text-end">
                                        <span>3 €</span>
                                        <p>per person</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#included3" aria-expanded="true" aria-controls="included3">
                                            What is included?
                                        </button>
                                    </h2>
                                    <div id="included3" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body px-4">
                                            <ul style="list-style: disc" class="p-4">
                                                <li>replacement of used towels with fresh ones (one set includes hand towel, bath towel, face towel)</li>
                                                <li>replacement of a bathmat and a dishtowel</li>
                                                <li>replenishment of toilet paper rolls</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="d-md-flex d-block mb-2">
                                <div class="col-md-2 mb-3 mb-md-0">
                                    <img src="{{ asset('assets/images/fresh-towels.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-10 ps-md-3 ps-0 d-flex justify-content-between">
                                    <div class="d-flex flex-column justify-content-between">
                                        <h4>BASIC MAID SERVICE</h4>
                                        <a href="#serviceBooking" type="button" class="btn btm-form d-flex justify-content-center align-items-center py-0 m-0">Book package</a>
                                    </div>
                                    <div class="services-price text-end">
                                        <span>3 €</span>
                                        <p>per person</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#included4" aria-expanded="true" aria-controls="included4">
                                            What is included?
                                        </button>
                                    </h2>
                                    <div id="included4" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body px-4">
                                            <ul style="list-style: disc" class="p-4">
                                                <li>replacement of used towels with fresh ones (one set includes hand towel, bath towel, face towel)</li>
                                                <li>replacement of a bathmat and a dishtowel</li>
                                                <li>replenishment of toilet paper rolls</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="threeBedroom" role="tabpanel" aria-labelledby="threeBedroom-tab">
                        <div class="mb-4">
                            <div class="d-md-flex d-block mb-2">
                                <div class="col-md-2 mb-3 mb-md-0">
                                    <img src="{{ asset('assets/images/fresh-towels.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-10 ps-md-3 ps-0 d-flex justify-content-between">
                                    <div class="d-flex flex-column justify-content-between">
                                        <h4>BASIC MAID SERVICE</h4>
                                        <a href="#serviceBooking" type="button" class="btn btm-form d-flex justify-content-center align-items-center py-0 m-0">Book package</a>
                                    </div>
                                    <div class="services-price text-end">
                                        <span>3 €</span>
                                        <p>per person</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#included" aria-expanded="true" aria-controls="included">
                                            What is included?
                                        </button>
                                    </h2>
                                    <div id="included" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body px-4">
                                            <ul style="list-style: disc" class="p-4">
                                                <li>replacement of used towels with fresh ones (one set includes hand towel, bath towel, face towel)</li>
                                                <li>replacement of a bathmat and a dishtowel</li>
                                                <li>replenishment of toilet paper rolls</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="d-md-flex d-block mb-2">
                                <div class="col-md-2 mb-3 mb-md-0">
                                    <img src="{{ asset('assets/images/fresh-towels.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-10 ps-md-3 ps-0 d-flex justify-content-between">
                                    <div class="d-flex flex-column justify-content-between">
                                        <h4>BASIC MAID SERVICE</h4>
                                        <a href="#serviceBooking" type="button" class="btn btm-form d-flex justify-content-center align-items-center py-0 m-0">Book package</a>
                                    </div>
                                    <div class="services-price text-end">
                                        <span>3 €</span>
                                        <p>per person</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#included5" aria-expanded="true" aria-controls="included5">
                                            What is included?
                                        </button>
                                    </h2>
                                    <div id="included5" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body px-4">
                                            <ul style="list-style: disc" class="p-4">
                                                <li>replacement of used towels with fresh ones (one set includes hand towel, bath towel, face towel)</li>
                                                <li>replacement of a bathmat and a dishtowel</li>
                                                <li>replenishment of toilet paper rolls</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="penthouse" role="tabpanel" aria-labelledby="penthouse-tab">
                        <div class="mb-4">
                            <div class="d-md-flex d-block mb-2">
                                <div class="col-md-2 mb-3 mb-md-0">
                                    <img src="{{ asset('assets/images/fresh-towels.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-10 ps-md-3 ps-0 d-flex justify-content-between">
                                    <div class="d-flex flex-column justify-content-between">
                                        <h4>BASIC MAID SERVICE</h4>
                                        <a href="#serviceBooking" type="button" class="btn btm-form d-flex justify-content-center align-items-center py-0 m-0">Book package</a>
                                    </div>
                                    <div class="services-price text-end">
                                        <span>3 €</span>
                                        <p>per person</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#included6" aria-expanded="true" aria-controls="included6">
                                            What is included?
                                        </button>
                                    </h2>
                                    <div id="included6" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body px-4">
                                            <ul style="list-style: disc" class="p-4">
                                                <li>replacement of used towels with fresh ones (one set includes hand towel, bath towel, face towel)</li>
                                                <li>replacement of a bathmat and a dishtowel</li>
                                                <li>replenishment of toilet paper rolls</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="d-md-flex d-block mb-2">
                                <div class="col-md-2 mb-3 mb-md-0">
                                    <img src="{{ asset('assets/images/fresh-towels.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-10 ps-md-3 ps-0 d-flex justify-content-between">
                                    <div class="d-flex flex-column justify-content-between">
                                        <h4>BASIC MAID SERVICE</h4>
                                        <a href="#serviceBooking" type="button" class="btn btm-form d-flex justify-content-center align-items-center py-0 m-0">Book package</a>
                                    </div>
                                    <div class="services-price text-end">
                                        <span>3 €</span>
                                        <p>per person</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#included7" aria-expanded="true" aria-controls="included7">
                                            What is included?
                                        </button>
                                    </h2>
                                    <div id="included7" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body px-4">
                                            <ul style="list-style: disc" class="p-4">
                                                <li>replacement of used towels with fresh ones (one set includes hand towel, bath towel, face towel)</li>
                                                <li>replacement of a bathmat and a dishtowel</li>
                                                <li>replenishment of toilet paper rolls</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end section tabs --}}

        <section class="py-5" style="background: url('{{ asset('assets/images/maid-form-background.jpg') }}') no-repeat">
            <div class="container">
                {{-- form --}}
                <form action="" style="max-width: 770px;" class="mx-auto bg-white p-md-5 pt-5 px-3" id="serviceBooking">
                    <h2 class="text-center mb-4">MAID SERVICE BOOKING</h2>
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="text" class="form-control" name="" placeholder="Name*" aria-label="Name*" required="">
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="email" class="form-control" name="" placeholder="Email*" aria-label="Email*">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <select id="inputState" class="form-select">
                                <option selected="">Service Type</option>
                                <option>Vaclav Havel Airport</option>
                                <option>Vaclav Havel Airport</option>
                                <option>Vaclav Havel Airport</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <input type="date" class="form-control" name="" placeholder="Date" aria-label="Date" required>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <select id="inputState" class="form-select">
                                <option selected="">Preferred Time</option>
                                <option>Vaclav Havel Airport</option>
                                <option>Vaclav Havel Airport</option>
                                <option>Vaclav Havel Airport</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Reservation ID*" aria-label="Reservation ID*">
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="" placeholder="Is there anything else you'd like us to know?" style="height: 150px"></textarea>
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
                </form>
                {{-- end form --}}
            </div>
        </section>



    </main>
@endsection

@section('scripts')

@endsection
