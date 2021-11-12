@extends('layouts.front')

@section('content')
    <main>
        {{--   first section    --}}
        <section class="first-section d-flex flex-column justify-content-between" style="background: url({{ asset('assets/images/room-section.jpg') }})no-repeat center top;">
            <div style="height: 100%" class="container  d-flex justify-content-center align-items-center">
                <div class="d-lg-flex align-items-center justify-content-center flex-column section-title py-5">
                    <h1 class="">GALLERY</h1>
                </div>
            </div>
        </section>
        {{--  end first section    --}}
        {{-- Gallery --}}
        <section class="bg-white py-4">
            <div class="container">
                <div class="sort py-3">

                    <ul class="d-flex justify-content-center flex-wrap">
                        <li><label class="active"><input type="radio" name="sort" value="1" checked >All</label></li>
                        <li><label><input type="radio" name="sort" value="2">HOUSE</label></li>
                        <li><label><input type="radio" name="sort" value="3">APARTMENTS</label></li>
                        <li><label><input type="radio" name="sort" value="4">SURROUNDINGS</label></li>
                    </ul>
                </div>
                <div class="gallery">
                    <div class="row mb-5">
                        <div class="col-md-3 mb-3  sort-1 sort-3">
                            <img class="myImg" width="100%" src="{{ asset('assets/images/gallery1.jpg') }}" alt="">
                        </div>
                        <div class="col-md-3 mb-3  sort-1 sort-2">
                            <img class="myImg" width="100%" src="{{ asset('assets/images/gallery2.jpg') }}" alt="">
                        </div>
                        <div class="col-md-3 mb-3  sort-1 sort-4">
                            <img class="myImg" width="100%" src="{{ asset('assets/images/gallery1.jpg') }}" alt="">
                        </div>
                        <div class="col-md-3 mb-3  sort-1 sort-2">
                            <img class="myImg" width="100%" src="{{ asset('assets/images/gallery2.jpg') }}" alt="">
                        </div>
                        <div class="col-md-3 mb-3  sort-1 sort-3">
                            <img class="myImg" width="100%" src="{{ asset('assets/images/gallery1.jpg') }}" alt="">
                        </div>
                        <div class="col-md-3 mb-3  sort-1 sort-4">
                            <img class="myImg" width="100%" src="{{ asset('assets/images/gallery2.jpg') }}" alt="">
                        </div>
                        <div class="col-md-3 mb-3  sort-1 sort-2">
                            <img class="myImg" width="100%" src="{{ asset('assets/images/gallery1.jpg') }}" alt="">
                        </div>
                        <div class="col-md-3 mb-3  sort-1 sort-3">
                            <img class="myImg" width="100%" src="{{ asset('assets/images/gallery2.jpg') }}" alt="">
                        </div>
                        <div class="col-md-3 mb-3  sort-1 sort-2">
                            <img class="myImg" width="100%" src="{{ asset('assets/images/gallery1.jpg') }}" alt="">
                        </div>
                        <div class="col-md-3 mb-3  sort-1 sort-4">
                            <img class="myImg" width="100%" src="{{ asset('assets/images/gallery2.jpg') }}" alt="">
                        </div>
                        <div class="col-md-3 mb-3  sort-1 sort-4">
                            <img class="myImg" width="100%" src="{{ asset('assets/images/gallery1.jpg') }}" alt="">
                        </div>
                        <div class="col-md-3 mb-3  sort-1 sort-3">
                            <img class="myImg" width="100%" src="{{ asset('assets/images/gallery2.jpg') }}" alt="">
                        </div>

                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#" type="button" class="btn btn-all">SEE APARTMENTS</a>
                    </div>
                </div>
            </div>

        </section>
        {{-- end Gallery --}}
      <x-modal-image/>
    </main>
@endsection

@section('scripts')
            <script>

            </script>
@endsection
