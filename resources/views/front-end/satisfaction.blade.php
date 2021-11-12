@extends('layouts.front')

@section('content')
    <main>
        {{--   first section    --}}
        <section class="first-section d-flex flex-column justify-content-between" style="background: url({{ asset('assets/images/room-section.jpg') }})no-repeat center top;">
            <div style="height: 100%" class="container  d-flex justify-content-center align-items-center">
                <div class="d-lg-flex align-items-center justify-content-center flex-column section-title py-5">
                    <h1 class="">SATISFACTION GUARANTEE</h1>
                </div>
            </div>
        </section>
        {{--  end first section    --}}
        <section class="py-5 satisfaction">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="">
                            <p>Regardless of our cancellation conditions, we offer to our guests 48 hours satisfaction guarantee. It means that if after your arrival into the apartment</p>
                            <ul class="ps-5" style="list-style: auto">
                                <li class="pb-2">you are not fully satisfied with its settings and equipment and/or we failed to prepare it to perfect conditions and</li>
                                <li class="pb-2">you are not fully satisfied with its settings and equipment and/or we failed to prepare it to perfect conditions and</li>
                             </ul>
                            <p>We will then charge the Rent corresponding to the certain number of standard daily rates for the period you used the apartment only regardless what was your daily average of agreed Rent in the Lease agreement.</p>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/images/sss.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

@section('scripts')

@endsection
