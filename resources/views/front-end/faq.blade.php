@extends('layouts.front')

@section('content')
    <main>
        {{--   first section    --}}
        <section class="first-section d-flex flex-column justify-content-between" style="background: url({{ asset('assets/images/room-section.jpg') }})no-repeat center top;">
            <div style="height: 100%" class="container  d-flex justify-content-center align-items-center">
                <div class="d-lg-flex align-items-center justify-content-center flex-column section-title py-5">
                    <h1 class="">FAQ</h1>
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
                                    <div>1</div>
                                    <div>
                                        <h5><a href="">APARTMENTS</a></h5>
                                        <p>equipment - pets - children etc.</p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div>2</div>
                                    <div>
                                        <h5><a href="">APARTMENTS</a></h5>
                                        <p>equipment - pets - children etc.</p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div>1</div>
                                    <div>
                                        <h5><a href="">APARTMENTS</a></h5>
                                        <p>equipment - pets - children etc.</p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div>1</div>
                                    <div>
                                        <h5><a href="">APARTMENTS</a></h5>
                                        <p>equipment - pets - children etc.</p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div>1</div>
                                    <div>
                                        <h5><a href="">APARTMENTS</a></h5>
                                        <p>equipment - pets - children etc.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-4" style="background:  url('{{ asset('assets/images/faq.jpg') }}')  no-repeat; background-size: cover">
                            <div class="p-5 text-center text-white" style="background: rgba(0,0,0,0.80)">
                                <h3>ANY OTHER QUESTIONS?</h3>
                                <p>info@prague-city-apartments.cz</p>
                                <p>+420 224 990 990</p>
                                <button type="submit" class="btn btm-form m-0">FIND APARTMENT</button>
                            </div>
                        </div>

                        <div class="block-info mb-4">
                            <div class="mb-5">
                                <h3>1 APARTMENTS</h3>
                                <p>Everything you should know about the apartments, equipment and other details. This is not the place where we present detailed information about each apartment. To find all the details about the place you are going to rent, please check carefully apartment descriptions, photos, floorplans and especially features list. Whatever information you'll be missing, don't hesitate to contact us.</p>
                                <a href="#">↑ BACK TO TOP</a>
                            </div>

                            <ul class="list-info-faq">
                                <li>
                                    <span class="badge ps-0">1.1</span>
                                    Are the apartments suitable and ready for long term rent? Do you offer monthly rates?
                                    <p>
                                        Of course, long term rentals are a significant part of our business. Majority of our apartments are designed to suite needs of extended or long term staying individuals or the whole families. The key benefit for you is that we completely cover all requirements on facility management related to your apartment. We simply take care of everything, we save you valuable time by managing every detail, including rental, furnishings and utilities, incorporating the all in one simple monthly rental account.

                                        We offer high standard of living in Prague including 24 hour assistance, and all in one invoice (electricity, gas, extra service cost etc.).</p>
                                </li>
                                <li>
                                    <span class="badge ps-0">1.2</span>
                                    Are the apartments suitable and ready for long term rent? Do you offer monthly rates?
                                    <p>
                                        Of course, long term rentals are a significant part of our business. Majority of our apartments are designed to suite needs of extended or long term staying individuals or the whole families. The key benefit for you is that we completely cover all requirements on facility management related to your apartment. We simply take care of everything, we save you valuable time by managing every detail, including rental, furnishings and utilities, incorporating the all in one simple monthly rental account.

                                        We offer high standard of living in Prague including 24 hour assistance, and all in one invoice (electricity, gas, extra service cost etc.).</p>
                                </li>
                            </ul>
                        </div>
                        <div class="block-info mb-4">
                            <div class="mb-5">
                                <h3>1 APARTMENTS</h3>
                                <p>Everything you should know about the apartments, equipment and other details. This is not the place where we present detailed information about each apartment. To find all the details about the place you are going to rent, please check carefully apartment descriptions, photos, floorplans and especially features list. Whatever information you'll be missing, don't hesitate to contact us.</p>
                                <a href="#">↑ BACK TO TOP</a>
                            </div>

                            <ul class="list-info-faq">
                                <li>
                                    <span class="badge ps-0">1.1</span>
                                    Are the apartments suitable and ready for long term rent? Do you offer monthly rates?
                                    <p>
                                        Of course, long term rentals are a significant part of our business. Majority of our apartments are designed to suite needs of extended or long term staying individuals or the whole families. The key benefit for you is that we completely cover all requirements on facility management related to your apartment. We simply take care of everything, we save you valuable time by managing every detail, including rental, furnishings and utilities, incorporating the all in one simple monthly rental account.

                                        We offer high standard of living in Prague including 24 hour assistance, and all in one invoice (electricity, gas, extra service cost etc.).</p>
                                </li>
                                <li>
                                    <span class="badge ps-0">1.2</span>
                                    Are the apartments suitable and ready for long term rent? Do you offer monthly rates?
                                    <p>
                                        Of course, long term rentals are a significant part of our business. Majority of our apartments are designed to suite needs of extended or long term staying individuals or the whole families. The key benefit for you is that we completely cover all requirements on facility management related to your apartment. We simply take care of everything, we save you valuable time by managing every detail, including rental, furnishings and utilities, incorporating the all in one simple monthly rental account.

                                        We offer high standard of living in Prague including 24 hour assistance, and all in one invoice (electricity, gas, extra service cost etc.).</p>
                                </li>
                            </ul>
                        </div>
                        <div class="block-info mb-4">
                            <div class="mb-5">
                                <h3>1 APARTMENTS</h3>
                                <p>Everything you should know about the apartments, equipment and other details. This is not the place where we present detailed information about each apartment. To find all the details about the place you are going to rent, please check carefully apartment descriptions, photos, floorplans and especially features list. Whatever information you'll be missing, don't hesitate to contact us.</p>
                                <a href="#">↑ BACK TO TOP</a>
                            </div>

                            <ul class="list-info-faq">
                                <li>
                                    <span class="badge ps-0">1.1</span>
                                    Are the apartments suitable and ready for long term rent? Do you offer monthly rates?
                                    <p>
                                        Of course, long term rentals are a significant part of our business. Majority of our apartments are designed to suite needs of extended or long term staying individuals or the whole families. The key benefit for you is that we completely cover all requirements on facility management related to your apartment. We simply take care of everything, we save you valuable time by managing every detail, including rental, furnishings and utilities, incorporating the all in one simple monthly rental account.

                                        We offer high standard of living in Prague including 24 hour assistance, and all in one invoice (electricity, gas, extra service cost etc.).</p>
                                </li>
                                <li>
                                    <span class="badge ps-0">1.2</span>
                                    Are the apartments suitable and ready for long term rent? Do you offer monthly rates?
                                    <p>
                                        Of course, long term rentals are a significant part of our business. Majority of our apartments are designed to suite needs of extended or long term staying individuals or the whole families. The key benefit for you is that we completely cover all requirements on facility management related to your apartment. We simply take care of everything, we save you valuable time by managing every detail, including rental, furnishings and utilities, incorporating the all in one simple monthly rental account.

                                        We offer high standard of living in Prague including 24 hour assistance, and all in one invoice (electricity, gas, extra service cost etc.).</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection

@section('scripts')

@endsection
