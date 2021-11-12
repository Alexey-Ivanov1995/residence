@extends('layouts.front')

@section('content')
    <main>
        {{--   first section    --}}
        <section class="first-section d-flex flex-column justify-content-between" style="background: url({{ asset('assets/images/room-section.jpg') }})no-repeat center top;">
            <div style="height: 100%" class="container  d-flex justify-content-center align-items-center">
                <div class="d-lg-flex align-items-center justify-content-center flex-column section-title py-5">
                    <h1 class="">CANCELLATION CONDITIONS</h1>
                </div>
            </div>
        </section>
        {{--  end first section    --}}

        {{-- section tabs --}}
        <section class="cancellation mb-5 py-5">
            <div class="container">
                <p class="text-center mb-4">The cancellation fee depends on the length of the Lease term stated in the Lease agreement and on the number of days prior Lease commencement when the cancellation notice is delivered to us. The cancellation fee might be charged and/or reservation deposit might forfeit in accordance of following conditions:</p>
                <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">

                    <li class="nav-item col-lg-3 col-12" role="presentation">
                        <button class="nav-link active d-flex flex-column align-items-center" id="upDays-tab" data-bs-toggle="tab" data-bs-target="#upDays" type="button" role="tab" aria-controls="home" aria-selected="true">
                            UP TO $ DAYS
                            <span>Lease lenght</span>
                        </button>
                    </li>
                    <li class="nav-item col-lg-3 col-12" role="presentation">
                        <button class="nav-link  d-flex flex-column align-items-center" id="fromDays510-tab" data-bs-toggle="tab" data-bs-target="#fromDays510" type="button" role="tab" aria-controls="home" aria-selected="true">
                            FROM 5 TO 10 DAYS
                            <span>Lease lenght</span>
                        </button>
                    </li>
                    <li class="nav-item col-lg-3 col-12" role="presentation">
                        <button class="nav-link  d-flex flex-column align-items-center" id="fromDays1128-tab" data-bs-toggle="tab" data-bs-target="#fromDays1128" type="button" role="tab" aria-controls="home" aria-selected="true">
                            FROM 11 TO 28 DAYS
                            <span>Lease lenght</span>
                        </button>
                    </li>
                    <li class="nav-item col-lg-3 col-12" role="presentation">
                        <button class="nav-link  d-flex flex-column align-items-center" id="moreDays-tab" data-bs-toggle="tab" data-bs-target="#moreDays" type="button" role="tab" aria-controls="home" aria-selected="true">
                            MORE THAN 28 DAYS
                            <span>Lease lenght</span>
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="upDays" role="tabpanel" aria-labelledby="upDays-tab">
                        <div class="mb-4">
                            <div class="row py-3 bg-light">
                                <div class="col-12"><b>CANCELLATION RECEIVED</b></div>
                            </div>
                            <div class="row border-bottom py-3">
                                <div class="col-md-6"><b>8 AND MORE DAYS PRIOR TO ARRIVAL</b></div>
                                <div class="col-md-6">fully refundable</div>
                            </div>
                            <div class="row border-bottom py-3">
                                <div class="col-md-6"><b>7 AND LESS DAYS PRIOR TO ARRIVAL</b></div>
                                <div class="col-md-6">one night fee will be charged</div>
                            </div>
                        </div>
                        <p>The deposit equal to one day rent is required at the time of making reservation by credit card charge or wire transfer.</p>
                    </div>
                    <div class="tab-pane fade" id="fromDays510" role="tabpanel" aria-labelledby="fromDays510-tab">
                        <div class="mb-4">
                            <div class="row py-3 bg-light">
                                <div class="col-12"><b>CANCELLATION RECEIVED</b></div>
                            </div>
                            <div class="row border-bottom py-3">
                                <div class="col-md-6"><b>8 AND MORE DAYS PRIOR TO ARRIVAL</b></div>
                                <div class="col-md-6">fully refundable</div>
                            </div>
                            <div class="row border-bottom py-3">
                                <div class="col-md-6"><b>7 AND LESS DAYS PRIOR TO ARRIVAL</b></div>
                                <div class="col-md-6">one night fee will be charged</div>
                            </div>
                        </div>
                        <p>The deposit equal to one day rent is required at the time of making reservation by credit card charge or wire transfer.</p>

                    </div>
                    <div class="tab-pane fade" id="fromDays1128" role="tabpanel" aria-labelledby="fromDays1128-tab">
                        <div class="mb-4">
                            <div class="row py-3 bg-light">
                                <div class="col-12"><b>CANCELLATION RECEIVED</b></div>
                            </div>
                            <div class="row border-bottom py-3">
                                <div class="col-md-6"><b>8 AND MORE DAYS PRIOR TO ARRIVAL</b></div>
                                <div class="col-md-6">fully refundable</div>
                            </div>
                            <div class="row border-bottom py-3">
                                <div class="col-md-6"><b>7 AND LESS DAYS PRIOR TO ARRIVAL</b></div>
                                <div class="col-md-6">one night fee will be charged</div>
                            </div>
                        </div>
                        <p>The deposit equal to one day rent is required at the time of making reservation by credit card charge or wire transfer.</p>

                    </div>
                    <div class="tab-pane fade" id="moreDays" role="tabpanel" aria-labelledby="moreDays-tab">
                        <p>Cancellation conditions are subject of mutual agreement based on the length of your Lease contract. *max. the sum equivalent of 2 months rent

                            The deposit of 25% of rental amount is required at the time of making reservation by credit card charge or wire transfer.</p>
                    </div>
                </div>
            </div>
        </section>
        {{-- end section tabs --}}
        <section>
            <div class="container">
                <h4 class="mb-5"><b>LEASE TERM AMENDMENTS</b></h4>
                <p>For shortening the Lease terms stated in the Lease Agreement during your stay we apply two following rules:</p>
                <div class="mb-4">
                    <h5><b>Length of stay 5 nights and less:</b></h5>
                    <p> notice must be presented a one day prior to the termination till 11.00 A. M. (Central European Time) otherwise the Rent corresponding to one day will be charged.</p>
                </div>
                <div class="mb-4">
                    <h5><b>Stay for 6 nights and more:</b></h5>
                    <p>To refund you the unused Rent in full we require to receive such an amendment notice the number of days prior the Lease termination corresponding to 50% of total unused number of days. If you don't comply with this rule we will refund you the amount corresponding to the remaining part of the Rent less Cancellation fee corresponding to the Rent for the number of days to fulfil this rule.</p>
                </div>
                <div class="mb-4">
                    <p><i>To refund you the unused Rent in full we require to receive such an amendment notice the number of days prior the Lease termination corresponding to 50% of total unused number of days. If you don't comply with this rule we will refund you the amount corresponding to the remaining part of the Rent less Cancellation fee corresponding to the Rent for the number of days to fulfil this rule.</i></p>
                </div>


            </div>
        </section>


    </main>
@endsection

@section('scripts')

@endsection
