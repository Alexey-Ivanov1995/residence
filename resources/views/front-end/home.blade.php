@extends('layouts.front')

{{-- title--}}
@section('title','home')
{{-- end title--}}


{{-- custom css --}}
@section('styles')
@endsection
{{-- end custom css --}}



{{-- content --}}
@section('content')
   <main style="background: url('{{ asset('assets/images/paralacs.jpg') }}') no-repeat center; background-attachment: fixed">
       {{--   first section    --}}
       <section class="first-section d-flex flex-column justify-content-between" style="background: url({{ asset('assets/images/home1.jpg') }}) center top;height: 100vh;">
            <div style="height: 100%" class="container  d-flex justify-content-center align-items-center">
                <div class="d-lg-flex align-items-center justify-content-center flex-column section-title">
                    <img width="130" height="120" src="{{ asset('assets/images/home2.png') }}" alt="">
                    <h5 class="">WELCOME TO</h5>
                    <h1 class="">RESIDENCE BREHOVA</h1>
                    <p class="">Stay days, weeks or months</p>
                </div>
            </div>
           <div class="first-form-bg py-4">
               <div class="container">
                     <div class="row">
                         <div class="col-xl-3 d-flex justify-content-xl-start justify-content-center">
                           <span class="badge check d-xl-flex justify-content-center align-items-center d-none"><i class="bi bi-check-circle"></i></span><h2 class="text-white"><span>CHECK AVAILABILITY</span></h2>
                         </div>
                         <div class="col-xl-9">
                             <form style="height: 100%" action="">
                                 <div class="d-flex flex-lg-row flex-column align-items-center justify-content-end form-first">
                                    <div class="row">
                                        <div class="col-6 col-lg-4 mb-3 mb-lg-0"><input class="datepicker-white" type="text" placeholder="Arrival"></div>
                                        <div class="col-6 col-lg-4 mb-3 mb-lg-0"><input class="datepicker-white" type="text" placeholder="Depature"></div>
                                        <div class="col-6 col-lg-4 mb-3 mb-lg-0">
                                           <select name="" id="">
                                               <option value="">Guest</option>
                                               <option value="">1</option>
                                           </select>
                                         </div>
                                    </div>
                                     <button type="submit" class="btn btm-form">FIND APARTMENT</button>
                                 </div>
                             </form>
                         </div>
                     </div>
               </div>
           </div>
       </section>
       {{--  end first section    --}}

       {{-- Apartments --}}
       <section class="py-5 apartments">
           <div class="container">
               <h2 class="text-center">
                   <b>APARTMENTS</b>
               </h2>
               <div>
                   <img class="d-block mx-auto" src=" {{ asset('assets/images/section.png') }} " alt="">
               </div>
               <p class="text-center mx-auto mb-5" style="max-width: 635px">
                   Residence Brehova is one of the most impressive art nouveau buildings in Prague. It is located in a very center of Prague, in historical Jewish quarter, just one block from the Vltava river and only 5 minutes’ walk from the world-famous Old Town Square with the unique medieval astronomical clock. Prague’s most famous luxury shopping boulevard “Pařížská” is just a minute away. All 11 apartments in the residence are carefully restored preserving valuable historical features but still offering modern equipment
               </p>
               <div class="row">
                   <div class="col-lg-6 mb-3">
                       <a href="#" class="d-block">
                           <div class="card  text-white">
                               <img src="{{ asset('assets/images/card-home.jpg') }}" class="card-img" alt="...">
                               <div class="card-img-overlay d-flex flex-column justify-content-end pb-3 p-0">
                                   <h5 class="card-title px-3 py-2 d-flex justify-content-between align-items-center">
                                       <span>One-bedroom</span>
                                       <div class="price-card">
                                           <span>€126</span>
                                           <span>/night</span>
                                       </div>
                                   </h5>
                               </div>
                           </div>
                       </a>
                   </div>
                   <div class="col-lg-6 mb-3">
                       <a href="#" class="d-block">
                           <div class="card  text-white">
                               <img src="{{ asset('assets/images/card-home.jpg') }}" class="card-img" alt="...">
                               <div class="card-img-overlay d-flex flex-column justify-content-end pb-3 p-0">
                                   <h5 class="card-title px-3 py-2 d-flex justify-content-between align-items-center">
                                       <span>One-bedroom</span>
                                       <div class="price-card">
                                           <span>€126</span>
                                           <span>/night</span>
                                       </div>
                                   </h5>
                               </div>
                           </div>
                       </a>
                   </div>
                   <div class="col-lg-6 mb-3">
                       <a href="#" class="d-block">
                           <div class="card  text-white">
                               <img src="{{ asset('assets/images/card-home.jpg') }}" class="card-img" alt="...">
                               <div class="card-img-overlay d-flex flex-column justify-content-end pb-3 p-0">
                                   <h5 class="card-title px-3 py-2 d-flex justify-content-between align-items-center">
                                       <span>One-bedroom</span>
                                       <div class="price-card">
                                           <span>€126</span>
                                           <span>/night</span>
                                       </div>
                                   </h5>
                               </div>
                           </div>
                       </a>
                   </div>
                   <div class="col-lg-6 mb-3">
                       <a href="#" class="d-block">
                           <div class="card  text-white">
                               <img src="{{ asset('assets/images/card-home.jpg') }}" class="card-img" alt="...">
                               <div class="card-img-overlay d-flex flex-column justify-content-end pb-3 p-0">
                                   <h5 class="card-title px-3 py-2 d-flex justify-content-between align-items-center">
                                       <span>One-bedroom</span>
                                       <div class="price-card">
                                           <span>€126</span>
                                           <span>/night</span>
                                       </div>
                                   </h5>
                               </div>
                           </div>
                       </a>
                   </div>
               </div>
           </div>
       </section>
       {{-- end Apartmens --}}

       {{-- About Us --}}
       <section class="py-5 bg-white">
           <div class="container">
               <div class="row about-section">
                   <div class="col-md-6">
                       <img width="100%" src="{{ asset('assets/images/about1.jpg') }}" alt="">
                   </div>
                   <div class="col-md-6 d-flex flex-column justify-content-between">
                       <div class="mt-4">
                           <h2><b>ABOUT US</b></h2>
                           <hr style="width: 250px; height: 2px; background-color: #e1bd85">
                       </div>
                       <div>
                           <p class="mb-5">
                               Residence Brehova is a member of Prague City Apartments, a long-established company which offers top quality fully equipped apartments in the most prominent locations of Prague city center. All our apartments are suitable for short and long term rentals and stand out for their size and unmatched privacy. Our offer covers a large selection of more than 70 apartments from smaller studios perfect for individuals and couples to the huge three bedroom apartments for large families or up to four couples.
                           </p>
                           <button type="button" class="btn btn-all">CONTACT US</button>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="col-md-6">
                       <div class="mt-4">
                           <h2><b>WHY US</b></h2>
                       </div>
                       <p>If not convinced, check our reviews here.</p>
                       <div class="row">
                           <div class="col-6 mb-4">
                               <img width="48px" height="48px" src="{{ asset('assets/images/icon1.png') }}" alt=""> <span class="ms-2">Fully Furnished</span>
                           </div>
                           <div class="col-6 mb-4">
                               <img width="48px" height="48px" src="{{ asset('assets/images/icon1.png') }}" alt=""> <span class="ms-2">Fully Furnished</span>
                           </div>
                           <div class="col-6 mb-4">
                               <img width="48px" height="48px" src="{{ asset('assets/images/icon1.png') }}" alt=""> <span class="ms-2">Fully Furnished</span>
                           </div>
                           <div class="col-6 mb-4">
                               <img width="48px" height="48px" src="{{ asset('assets/images/icon1.png') }}" alt=""> <span class="ms-2">Fully Furnished</span>
                           </div>
                           <div class="col-6 mb-4">
                               <img width="48px" height="48px" src="{{ asset('assets/images/icon1.png') }}" alt=""> <span class="ms-2">Fully Furnished</span>
                           </div>
                           <div class="col-6 mb-4">
                               <img width="48px" height="48px" src="{{ asset('assets/images/icon1.png') }}" alt=""> <span class="ms-2">Fully Furnished</span>
                           </div>


                       </div>

                   </div>
                   <div class="col-md-6">
                       <img width="100%" src="{{ asset('assets/images/about1.jpg') }}" alt="">
                   </div>
               </div>
           </div>
       </section>
       {{-- end About Us --}}

       {{-- paralacs --}}
       <section class="py-5" style="background: inherit">
           <div class="container">
               <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                   <div class="carousel-inner">
                       <div class="carousel-item active text-center">
                           <div class="label-carusel mb-3">
                               <i class="las la-star"></i>
                               <i class="las la-star"></i>
                               <i class="las la-star"></i>
                               <i class="las la-star"></i>
                               <i class="las la-star"></i>
                           </div>
                           <p>
                               We visitied Prague Thursday-Sunday in November. The appartment is big with all the things you need for a stay in the city. The location is perfect. A short walk from a lot of historical places, restaurants and pubs. We are greatful for all the tips and practical informations we recieved close to our arrival. We recommend to book the transfer from the airport. We really recommend this appartment.
                           </p>
                           <h3 class="text-white text-center">Joyce</h3>
                           <span class="text-white">Stayed in one-bedroom apartment</span>
                       </div>
                       <div class="carousel-item text-center">
                           <div class="label-carusel mb-3">
                               <i class="las la-star"></i>
                               <i class="las la-star"></i>
                               <i class="las la-star"></i>
                               <i class="las la-star"></i>
                               <i class="las la-star"></i>
                           </div>
                           <p>
                               We visitied Prague Thursday-Sunday in November. The appartment is big with all the things you need for a stay in the city. The location is perfect. A short walk from a lot of historical places, restaurants and pubs. We are greatful for all the tips and practical informations we recieved close to our arrival. We recommend to book the transfer from the airport. We really recommend this appartment.
                           </p>
                           <h3 class="text-white text-center">Joyce</h3>
                           <span class="text-white">Stayed in one-bedroom apartment</span>
                       </div>
                       <div class="carousel-item text-center">
                           <div class="label-carusel mb-3">
                               <i class="las la-star"></i>
                               <i class="las la-star"></i>
                               <i class="las la-star"></i>
                               <i class="las la-star"></i>
                               <i class="las la-star"></i>
                           </div>
                           <p>
                               We visitied Prague Thursday-Sunday in November. The appartment is big with all the things you need for a stay in the city. The location is perfect. A short walk from a lot of historical places, restaurants and pubs. We are greatful for all the tips and practical informations we recieved close to our arrival. We recommend to book the transfer from the airport. We really recommend this appartment.
                           </p>
                           <h3 class="text-white text-center">Joyce</h3>
                           <span class="text-white">Stayed in one-bedroom apartment</span>
                       </div>
                   </div>
                   <div class="carousel-indicators position-relative">
                       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                   </div>
               </div>
           </div>
       </section>
       {{-- end paralacs --}}

       {{-- Gallery --}}
       <section class="bg-white py-4">
               <div class="sort py-3">
                   <h2 class="text-center mb-3"><b>GALLERY</b></h2>
                   <ul class="d-flex justify-content-center flex-wrap">
                       <li><label class="active"><input type="radio" name="sort" value="1" checked >All</label></li>
                       <li><label><input type="radio" name="sort" value="2">HOUSE</label></li>
                       <li><label><input type="radio" name="sort" value="3">APARTMENTS</label></li>
                       <li><label><input type="radio" name="sort" value="4">SURROUNDINGS</label></li>
                   </ul>
               </div>
               <div class="gallery">
                   <div class="row mb-5">
                       <div class="col-md-2 p-0 sort-1 sort-3">
                           <a href="#"><img width="100%" src="{{ asset('assets/images/gallery1.jpg') }}" alt=""></a>
                       </div>
                       <div class="col-md-2 p-0 sort-1 sort-2">
                           <a href="#"><img width="100%" src="{{ asset('assets/images/gallery2.jpg') }}" alt=""></a>
                       </div>
                       <div class="col-md-2 p-0 sort-1 sort-4">
                           <a href="#"><img width="100%" src="{{ asset('assets/images/gallery1.jpg') }}" alt=""></a>
                       </div>
                       <div class="col-md-2 p-0 sort-1 sort-2">
                           <a href="#"><img width="100%" src="{{ asset('assets/images/gallery2.jpg') }}" alt=""></a>
                       </div>
                       <div class="col-md-2 p-0 sort-1 sort-3">
                           <a href="#"><img width="100%" src="{{ asset('assets/images/gallery1.jpg') }}" alt=""></a>
                       </div>
                       <div class="col-md-2 p-0 sort-1 sort-4">
                           <a href="#"><img width="100%" src="{{ asset('assets/images/gallery2.jpg') }}" alt=""></a>
                       </div>
                       <div class="col-md-2 p-0 sort-1 sort-2">
                           <a href="#"><img width="100%" src="{{ asset('assets/images/gallery1.jpg') }}" alt=""></a>
                       </div>
                       <div class="col-md-2 p-0 sort-1 sort-3">
                           <a href="#"><img width="100%" src="{{ asset('assets/images/gallery2.jpg') }}" alt=""></a>
                       </div>
                       <div class="col-md-2 p-0 sort-1 sort-2">
                           <a href="#"><img width="100%" src="{{ asset('assets/images/gallery1.jpg') }}" alt=""></a>
                       </div>
                       <div class="col-md-2 p-0 sort-1 sort-4">
                           <a href="#"><img width="100%" src="{{ asset('assets/images/gallery2.jpg') }}" alt=""></a>
                       </div>
                       <div class="col-md-2 p-0 sort-1 sort-4">
                           <a href="#"><img width="100%" src="{{ asset('assets/images/gallery1.jpg') }}" alt=""></a>
                       </div>
                       <div class="col-md-2 p-0 sort-1 sort-3">
                           <a href="#"><img width="100%" src="{{ asset('assets/images/gallery2.jpg') }}" alt=""></a>
                       </div>

                   </div>
                   <div class="d-flex justify-content-center">
                       <a href="#" type="button" class="btn btn-all">SEE APARTMENTS</a>
                   </div>
               </div>
       </section>
       {{-- end Gallery --}}
   </main>
@endsection
{{-- end content --}}


{{-- custom scripts --}}
@section('scripts')

@endsection
{{-- end custom scripts --}}

