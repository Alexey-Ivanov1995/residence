@extends('layouts.front')

@section('styles')
    <style>
        #mapid { height: 470px; }
    </style>
@endsection

@section('content')
    <main>
        {{--   first section    --}}
        <section class="first-section d-flex flex-column justify-content-between" style="background: url({{ asset('assets/images/room-section.jpg') }})no-repeat center top;">
            <div style="height: 100%" class="container  d-flex justify-content-center align-items-center">
                <div class="d-lg-flex align-items-center justify-content-center flex-column section-title py-5">
                    <h1 class="">CONTACT</h1>
                </div>
            </div>
        </section>
        {{--  end first section    --}}
        <section class="py-5 contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <h2>CONTACT INFO</h2>
                        <ul class="list-info-contact p-0">
                            <li><span class="badge"><i class="icon la la-building-o"></i></span> Company - Prague City Apartments</li>
                            <li><span class="badge"><i class="las la-map-marker"></i></span> Main office - Karoliny Svetle 4, 110 00 Prague</li>
                            <li class="section-info"><span class="badge"><i class="las la-map-marker"></i></span> Brehova Residence - Brehova 8, 110 00 Prague</li>
                            <li><span class="badge"><i class="las la-phone"></i></span> Tel. - +420 224 990 990</li>
                            <li><span class="badge"><i class="las la-phone"></i></span>  Mobile / WhatsApp +420 602 602 722 (+420 602 602 PCA)</li>
                            <li class="section-info"><span class="badge"><i class="las la-phone"></i></span> Toll free from CZ - 800 800 722 (800 800 PCA)</li>
                            <li><span class="badge"><i class="icon la la-envelope-o"></i></span> reservations@prague-city-apartments.cz</li>
                            <li><span class="badge"><i class="icon la la-skype"></i></span> Skype: pca office</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <form action="">
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="col">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" placeholder="Write what do you want" style="height: 200px"></textarea>
                            </div>
                            <button type="submit" class="btn btm-form m-0">Send</button>
                        </form>
                    </div>
                </div>

            </div>
        </section>
        <div id="mapid"></div>
    </main>
@endsection

@section('scripts')

    <script>
        var mymap = L.map('mapid').setView([51.505, -0.09], 13);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 49,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1Ijoic2tpYnkiLCJhIjoiY2tya2NvZ2VxMTVkbjJwbzV6anhkNjhiZSJ9.VSY6ZtFAXKzxubr-3zbTDw'
        }).addTo(mymap);
        var circle = L.circle([51.508, -0.11], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 500
        }).addTo(mymap);
        var polygon = L.polygon([
            [51.509, -0.08],
            [51.503, -0.06],
            [51.51, -0.047]
        ]).addTo(mymap);
    </script>

@endsection
