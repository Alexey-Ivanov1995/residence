@extends('layouts.front')

@section('content')
    <main>
        {{--   first section    --}}
        <section class="first-section d-flex flex-column justify-content-between" style="background: url({{ asset('assets/images/room-section.jpg') }})no-repeat center top;">
            <div style="height: 100%" class="container  d-flex justify-content-center align-items-center">
                <div class="d-lg-flex align-items-center justify-content-center flex-column section-title py-5">
                    <h1 class="">REVIEWS</h1>
                </div>
            </div>
        </section>
        {{--  end first section    --}}
        <section class="py-5">
            <div class="container text-center">
                <div class="mx-auto reviews-title">
                    <h2 class="mb-4"><b>READ WHAT OUR GUESTS SAY ABOUT US</b></h2>
                    <p>More than 400 reviews of our apartments in the Residence Brehova. Read what our guests say about our staff, cleanliness, equipment, value or location.</p>
                    <button type="submit" class="btn btm-form">FIND APARTMENT</button>
                </div>

                <span>Page 1 of 0, displaying 1-0 of 0 results</span>
            </div>
        </section>


    </main>
@endsection

@section('scripts')

@endsection
