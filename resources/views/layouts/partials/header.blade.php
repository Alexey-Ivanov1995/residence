@php
use App\Models\Apartment;

$menu = Apartment::get();

@endphp

<div class="container" style="background: rgba(0, 0, 0, 0.7)">
    <div class="head-top">
        <ul class="d-flex">
            <li class="me-3"><span class="badge"><i class="las la-phone"></i></span><a href="#">+420 224 990 990</a></li>
            <li><span class="badge"><i class="lar la-envelope"></i></span><a href="#">admin.gmail.com</a></li>
        </ul>
    </div>
</div>
<header>
    <div class="bg-white position-relative">
        <div class="container-lg container-fluid">
            {{-- main menu --}}
            <nav class="navbar main-menu navbar-light p-0 d-none d-lg-flex">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{ asset('assets/images/logo-header.png') }}" alt="" width="124" height="52" class="d-inline-block align-text-top">
                        </a>
                        <ul class="d-flex align-items-center">
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('home') }}">HOME</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('apartments') }}">APARTMENTS<i class="las la-caret-down ms-1"></i></a>
                                <ul class="">
                                    @foreach($menu as $single)
                                        <li><a href="{{ route('show-room',['id' => $single->id]) }}">{{$single->title}}</a></li>
                                    @endforeach
{{--                                    <li><a href="{{ route('room') }}">One-Bedroom</a></li>--}}
{{--                                    <li><a href="{{ route('room') }}">Two-Bedroom</a></li>--}}
{{--                                    <li><a href="{{ route('room') }}">Three-Bedroom</a></li>--}}
{{--                                    <li><a href="{{ route('room') }}">Penthouse No. 52</a></li>--}}

                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">SERVICES</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('reviews') }}">REVIEWS</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('gallery') }}">GALLERY</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">OTHER<i class="las la-caret-down ms-1"></i></a>
                                <ul class="">
                                    <li><a href="{{ route('maidServices') }}">Maid Services</a></li>
                                    <li><a href="{{ route('transfers') }}">Transfers</a></li>
                                    <li><a href="{{ route('pragueSights') }}">Prague Sights</a></li>
                                    <li><a href="{{ route('arrival') }}">Arrival Instructions</a></li>
                                    <li><a href="{{ route('cancellation') }}">Cancellations</a></li>
                                    <li><a href="{{ route('satisfaction') }}">Satisfaction Guarantee</a></li>
                                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            {{-- end main menu --}}

            {{-- mobile menu --}}
            <nav class="navbar navbar-light justify-content-between p-0 d-lg-none d-flex justify-content-center align-items-center">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/images/logo-header.png') }}" alt="" width="124" height="52" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler mobile-btn" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="menu-mobile">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                    <li class="nav-item">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#APARTMENTS" aria-expanded="true" aria-controls="APARTMENTS">
                                        APARTMENTS
                                    </button>
                                </h2>
                                <div id="APARTMENTS" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-0">
                                        <ul class="menu-mobile-item">
                                            <li><a href="{{ route('apartments') }}">All</a></li>
                                            <li><a href="{{ route('room') }}">One-Bedroom</a></li>
                                            <li><a href="{{ route('room') }}">Two-Bedroom</a></li>
                                            <li><a href="{{ route('room') }}">Three-Bedroom</a></li>
                                            <li><a href="{{ route('room') }}">Penthouse No. 52</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">SERVICES</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('reviews') }}">REVIEWS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('gallery') }}">GALLERY</a></li>
                    <li class="nav-item">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#OTHER" aria-expanded="true" aria-controls="OTHER">
                                        OTHER
                                    </button>
                                </h2>
                                <div id="OTHER" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-0">
                                        <ul class="menu-mobile-item">
                                            <li><a href="{{ route('maidServices') }}">Maid Services</a></li>
                                            <li><a href="{{ route('transfers') }}">Transfers</a></li>
                                            <li><a href="{{ route('pragueSights') }}">Prague Sights</a></li>
                                            <li><a href="{{ route('arrival') }}">Arrival Instructions</a></li>
                                            <li><a href="{{ route('cancellation') }}">Cancellations</a></li>
                                            <li><a href="{{ route('satisfaction') }}">Satisfaction Guarantee</a></li>
                                            <li><a href="{{ route('faq') }}">FAQ</a></li>
                                            <li><a href="{{ route('about') }}">About Us</a></li>
                                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            {{-- end mobile menu --}}

        </div>
    </div>

</header>


