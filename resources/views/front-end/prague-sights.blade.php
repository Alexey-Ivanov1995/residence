@extends('layouts.front')

@section('title','PRAGUE SIGHTS')

@section('styles')
@endsection

@section('content')
    <main>
        {{--   first section    --}}
        <section class="first-section d-flex flex-column justify-content-between mb-5" style="background: url({{ asset('assets/images/services.jpg') }})no-repeat center top;">
            <div style="height: 100%" class="container  d-flex justify-content-center align-items-center">
                <div class="d-lg-flex align-items-center justify-content-center flex-column section-title py-5">
                    <h1 class="">PRAGUE SIGHTS</h1>
                </div>
            </div>
        </section>
        {{--  end first section    --}}

        {{--  services  --}}
        <section class="mb-5 prague">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-7 margin-1">
                        <a href="#" class="assistance-img">
                            <img height="100%" class="w-100" src="{{ asset('assets/images/prague.jpg') }}" alt="">
                            <div class="bg-link"></div>
                        </a>
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center align-items-center bg-assistance">
                        <div class="assistance">
                            <h2 class="mb-4">JEWISH QUARTER</h2>
                            <p class="mb-5">The Residence Brehova is located in a Jewish Quarter or simply Josefov. It is a small district surrounded by Old Town. Until 1850 it used to be called Jewish Town, earlier even Jewish ghetto. Jewish Quarter dates back to the 13th century and today it is a well preserved complex of important Jewish buildings./7.</p>
                            <button type="submit" class="btn btm-form w-100 m-0">0 minutes walk from Residence</button>
                        </div>
                    </div>
                </div>
                <div class="row  flex-row-reverse mb-5">
                    <div class="col-lg-7 margin-1">
                        <a href="#" class="assistance-img">
                            <img height="100%" class="w-100" src="{{ asset('assets/images/prague.jpg') }}" alt="">
                            <div class="bg-link"></div>
                        </a>
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center align-items-center bg-assistance">
                        <div class="assistance">
                            <h2 class="mb-4">JEWISH QUARTER</h2>
                            <p class="mb-5">The Residence Brehova is located in a Jewish Quarter or simply Josefov. It is a small district surrounded by Old Town. Until 1850 it used to be called Jewish Town, earlier even Jewish ghetto. Jewish Quarter dates back to the 13th century and today it is a well preserved complex of important Jewish buildings./7.</p>
                            <button type="submit" class="btn btm-form w-100 m-0">0 minutes walk from Residence</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--  end services  --}}

    </main>
@endsection

@section('scripts')

@endsection

