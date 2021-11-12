@php
    $count = 0;
@endphp

@extends('layouts.front')

@section('content')
    <main>
        {{--   first section    --}}
        <section class="first-section d-flex flex-column justify-content-between" style="background: url({{ asset('assets/images/room-section.jpg') }})no-repeat center top;">
            <div style="height: 100%" class="container  d-flex justify-content-center align-items-center">
                <div class="d-lg-flex align-items-center justify-content-center flex-column section-title py-5">
                    <h1 class="">APARTMENTS</h1>
                    <p class="">Apartments in Residence Brehova</p>
                </div>
            </div>
        </section>
        {{--  end first section    --}}

        {{-- check availablity --}}
        <section class="py-5">
            <div class="container">
                <div>
                    <div class="row sort-apartments pt-3 pb-4 px-100 border justify-content-center align-items-center">
                        <h2 class="text-center mb-5">CHECK AVAILABILITY</h2>
                        <div class="col-lg-3 col-md-6 col-12 d-flex mb-3 date-icon">
                            <input type="text" class="datepicker" placeholder="Arrival">
{{--                            <i class="lar la-calendar"></i>--}}
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mb-3 date-icon">
                            <input type="text" class="datepicker" placeholder="Departure">
{{--                            <i class="lar la-calendar"></i>--}}
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mb-3">
                            <select name="" id="">
                                <option value="">Guest</option>
                                <option value="">1</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mb-3">
                            <button type="submit" class="btn btm-form w-100  m-0">SEND REQUEST</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end check availablity --}}

        {{-- section list room --}}
        <section class="py-5">
            <div class="container">
                @foreach($room as $single)
                    <div class=" mb-4" >
                        <div class="row @if($count % 2 !== 0) flex-row-reverse @endif" style="background: url('{{ asset('assets/images/card.jpg') }}') no-repeat; background-size: cover">
                            <div class="col-lg-5 list-info-card px-5 p-4 bg-card m-0">
                                <h2><a href="{{ route('show-room',['id' => $single->id]) }}">{{ $single->apartment->title }}</a></h2>
                                <p class="signature">AVERAGE €126 PER NIGHT/PER APARTMENT</p>
                                <p>{{ $single->description }}</p>
                                <ul class="mb-3 ps-3" style="list-style: disc">
                                    <li>Persons: {{ $single->persons }}</li>
                                    <li>Size: {{ $single->size }}</li>
                                    <li>View: {{ $single->view }}</li>
                                    <li>Floor: {{ $single->floor }}</li>
                                </ul>
                                <div class="d-flex justify-content-start align-items-center">
                                    <a href="{{ route('show-room',['id' => $single->id]) }}" type="submit" class="btn btm-form d-flex align-items-center m-0">FIND APARTMENT</a>
                                </div>

                            </div>
                            <div class="col-7 d-none d-md-block m-0 p-0">
                                <a href="#" class="link-apartments"></a>
                            </div>
                        </div>
                    </div>
                   @php
                       $count++
                   @endphp
                @endforeach

{{--               <div class=" mb-4">--}}
{{--                   <div class="row flex-row-reverse"  style="background: url('{{ asset('assets/images/card.jpg') }}') no-repeat; background-size: cover">--}}
{{--                       <div class="col-lg-5 list-info-card px-5 p-4 bg-card m-0">--}}
{{--                           <h2><a href="#">ONE-BEDROOM</a></h2>--}}
{{--                           <p class="signature">AVERAGE €126 PER NIGHT/PER APARTMENT</p>--}}
{{--                           <p>The attractive and cozy one bedroom Prague apartment is situated in Jewish Town. The apartment is located in the city centre of Prague and is only about a 5 minute walk from Prague historical centre</p>--}}
{{--                           <ul class="mb-3 ps-3" style="list-style: disc">--}}
{{--                               <li>Persons: 2 (+2 on extra bed)</li>--}}
{{--                               <li>Size: 76 m2 / 818 ft2</li>--}}
{{--                               <li>View: Street and courtyard</li>--}}
{{--                               <li>Floor: 1st, 2nd, 3rd, 4th</li>--}}
{{--                           </ul>--}}
{{--                           <button type="submit" class="btn btm-form m-0">FIND APARTMENT</button>--}}
{{--                       </div>--}}
{{--                       <div class="col-7 d-none d-lg-block m-0 p-0">--}}
{{--                           <a href="#" class="link-apartments"></a>--}}
{{--                       </div>--}}
{{--                   </div>--}}
{{--               </div>--}}
            </div>
        </section>
        {{-- end section list room --}}

    </main>
@endsection

@section('scripts')
    <script>
        console.log(1333%2)
    </script>
@endsection
