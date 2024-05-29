@extends('layouts.frontend.desktop.master')
@push('css')
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/fontawesome-all.min.css') }}">
    <style>
        .single_slider_area {
            border: 1px solid #ddd;
            border-radius: 10px;
        }

    </style>
@endpush
@section('content')
    <div class="container mb-2 mt-2">
        <div class="single_slider_area">
            <div class="single_slider owl-carousel" id="single_slider">
                <div class="slider_image" style="height: 430px;">
                    <img src="{{ asset('image/slider.gif') }}" style="object-fit: fill;height: 430px;" alt="" srcset="">
                </div>
                <div class="slider_image">
                    <img src="{{ asset('image/slider2.jpeg') }}" style="object-fit: cover;height: 430px;" alt=""
                        srcset="">
                    <div class="slider_overlay">
                        <h2>Middle East's <span style="background-color: #57c725"> Largest </span> <br> Ac Compressor
                            Supplier</h2>
                        {{-- <h2>UAE <br> Auto Ac Spare Parts Trader
                            </h2> --}}
                    </div>
                </div>
                <div class="slider_image">
                    <img src="{{ asset('image/slider3.jpeg') }}" style="object-fit: cover;height: 430px;" alt=""
                        srcset="">
                    <div class="slider_overlay">
                        <h2>Drive to Your Destinations <br> with <span style="background-color: #fff"><span
                                    style="color: #00489a">Best</span><span style="color: #57c725">Cool</span></span> </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="advertisement">
            <img src="{{ asset('image/banner.jpg') }}" alt="" srcset="">
        </div>
    </div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-4 col-md-6 mb-4">
                <a href="{{ route('car.search.by.car_type_id', 1) }}">
                    <div class="banner-item img-hover-effect">
                        <div class="banner-img img-zoom-effect">
                            <img class="img-full" src="{{ asset('image/compressor.jpg') }}" alt="Banner Image">
                            <div class="banner_overlay">

                            </div>
                            <div class="inner-content text-white">
                                <h2 class="title font-weight-bold">Compressor</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <a href="{{ route('car.search.by.car_type_id', 2) }}">
                    <div class="banner-item img-hover-effect">
                        <div class="banner-img img-zoom-effect">
                            <img class="img-full" src="{{ asset('image/Condensers.jpg') }}" alt="Banner Image">
                            <div class="banner_overlay"></div>
                            <div class="inner-content text-white">
                                <h2 class="title font-weight-bold">Condensers</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <a href="{{ route('car.search.by.car_type_id', 3) }}">
                    <div class="banner-item img-hover-effect">
                        <div class="banner-img img-zoom-effect">
                            <img class="img-full" src="{{ asset('image/Evaporators.jpg') }}" alt="Banner Image">
                            <div class="banner_overlay"></div>
                            <div class="inner-content text-white">
                                <h2 class="title font-weight-bold">Evaporators</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <a href="{{ route('car.search.by.car_type_id', 4) }}">
                    <div class="banner-item img-hover-effect">
                        <div class="banner-img img-zoom-effect">
                            <img class="img-full" src="{{ asset('image/Clutch-Coil Sets.jpg') }}"
                                alt="Banner Image">
                            <div class="banner_overlay"></div>
                            <div class="inner-content text-white">
                                <h2 class="title font-weight-bold">Clutch- Coil Sets</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <a href="{{ route('car.search.by.car_type_id', 5) }}">
                    <div class="banner-item img-hover-effect">
                        <div class="banner-img img-zoom-effect">
                            <img class="img-full" src="{{ asset('image/SensorsValves.jpg') }}" alt="Banner Image">
                            <div class="banner_overlay"></div>
                            <div class="inner-content text-white">
                                <h2 class="title font-weight-bold">Control/Sensors Valves</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <a href="{{ route('car.search.by.car_type_id', 10) }}">
                    <div class="banner-item img-hover-effect">
                        <div class="banner-img img-zoom-effect">
                            <img class="img-full" src="{{ asset('image/RefrigerantGas.jpg') }}" alt="Banner Image">
                            <div class="banner_overlay"></div>
                            <div class="inner-content text-white">
                                <h2 class="title font-weight-bold">Refrigerant Gas</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <a href="{{ route('car.search.by.car_type_id', 12) }}">
                    <div class="banner-item img-hover-effect">
                        <div class="banner-img img-zoom-effect">
                            <img class="img-full" src="{{ asset('image/electric.jpeg') }}" alt="Banner Image">
                            <div class="banner_overlay"></div>
                            <div class="inner-content text-white">
                                <h2 class="title font-weight-bold">Electric Compressor</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <a href="{{ route('car.search.by.car_type_id', 13) }}">
                    <div class="banner-item img-hover-effect">
                        <div class="banner-img img-zoom-effect">
                            <img class="img-full" src="{{ asset('image/ac_part.jpeg') }}" alt="Banner Image">
                            <div class="banner_overlay"></div>
                            <div class="inner-content text-white">
                                <h2 class="title font-weight-bold text-center" style="margin-left:45px;">AC Parts</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <a href="{{ route('car.search.by.car_type_id', 14) }}">
                    <div class="banner-item img-hover-effect">
                        <div class="banner-img img-zoom-effect">
                            <img class="img-full" src="{{ asset('image/tools.jpeg') }}" alt="Banner Image">
                            <div class="banner_overlay"></div>
                            <div class="inner-content text-white">
                                <h2 class="title font-weight-bold text-center" style="margin-left:55px;">Tools</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            
        </div>
    </div>

    <div class="container">
        <section class="card_section">
            <div class="card_section_title">
                Search by Brand
            </div>
            <div class="popular_brand_list">
                @foreach ($vehicle_brands as $brand)
                    @if ($brand->name !== 'Unknown')
                        <a href="{{ route('car.by.vehicle_brand', $brand->id) }}">
                            <div class="brand">
                                <div class="brandIcon">
                                    <img src="{{ asset($brand->image) }}" alt="" srcset="">
                                </div>
                                <div class="brandName">
                                    <p>{{ $brand->name }}</p>
                                </div>
                            </div>
                        </a>
                    @endif
                @endforeach
            </div>
        </section>
    </div>
    @if (count($NewArrivalsCars) > 0)
        <div class="container">
            <section class="card_section">
                <div class="card_section_title">
                    Compressors
                </div>
                <div class="card_content">
                    <div class="row">
                        @foreach ($NewArrivalsCars as $Car)
                            <div class="col-lg-3">
                                <a
                                    href="{{ route('car.details', [$Car->id, $Car->slug ? $Car->slug : title_slug($Car->title)]) }}">
                                    <div class="card" style="width: 100%;">
                                        @if (count($Car->CarImage) > 0)
                                            <img class="card-img-top" src="{{ thumbnail($Car->CarImage[0]->image) }}"
                                                alt="Card image cap">
                                        @endif
                                        <div class="card-body mt-2">
                                            <div class="lisitng-price">
                                                {{ $Car->CarType ? $Car->CarType->name : '' }}
                                            </div>
                                            <div class="recent-listing-header">
                                                <div class="recent-listing-title">{{ $Car->title }} </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    @endif
    @if (count($BestSellingCars) > 0)
        <div class="container">
            <section class="card_section">
                <div class="card_section_title">
                   Condensers & Evaporators
                </div>
                <div class="card_content">
                    <div class="row">
                        @foreach ($BestSellingCars as $Car)
                            <div class="col-lg-3">
                                <a
                                    href="{{ route('car.details', [$Car->id, $Car->slug ? $Car->slug : title_slug($Car->title)]) }}">
                                    <div class="card" style="width: 100%;">
                                        @if (count($Car->CarImage) > 0)
                                            <img class="card-img-top" src="{{ thumbnail($Car->CarImage[0]->image) }}"
                                                alt="Card image cap">
                                        @endif
                                        <div class="card-body mt-2">
                                            <div class="lisitng-price">
                                                {{ $Car->CarType ? $Car->CarType->name : '' }}
                                            </div>
                                            <div class="recent-listing-header">
                                                <div class="recent-listing-title">{{ $Car->title }} </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    @endif
    @if (count($ac_parts) > 0)
        <div class="container">
            <section class="card_section">
                <div class="card_section_title">
                   Ac Parts
                </div>
                <div class="card_content">
                    <div class="row">
                        @foreach ($ac_parts as $Car)
                            <div class="col-lg-3">
                                <a
                                    href="{{ route('car.details', [$Car->id, $Car->slug ? $Car->slug : title_slug($Car->title)]) }}">
                                    <div class="card" style="width: 100%;">
                                        @if (count($Car->CarImage) > 0)
                                            <img class="card-img-top" src="{{ thumbnail($Car->CarImage[0]->image) }}"
                                                alt="Card image cap">
                                        @endif
                                        <div class="card-body mt-2">
                                            <div class="lisitng-price">
                                                {{ $Car->CarType ? $Car->CarType->name : '' }}
                                            </div>
                                            <div class="recent-listing-header">
                                                <div class="recent-listing-title">{{ $Car->title }} </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    @endif
    <div class="newsletter">
        <div class="container">
            <div class="newsletter-area section-border-y-axis">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="newsletter-img">
                                <img src="{{ asset('image/compressor.jpg') }}" alt="Newsletter Image">
                            </div>
                        </div>
                        <div class="col-md-6 align-self-md-center pb-10 pb-md-0">
                            <div class="newsletter-content">
                                <h2 class="newsletter-title mb-4">Tell us what you're looking for.</h2>
                                <h3 class="newsletter-sub-title text-primary mb-8">All type of Auto A/C Parts</h3>
                                <div id="alert_div"></div>
                                {{-- <form class="newsletter-form" id="newsletter2" method="POST">
                                    <input class="input-field" id="mc-email" type="email" autocomplete="off"
                                        placeholder="Your Email Address" name="email" required="">
                                    <div class="button-wrap">
                                        <button class="btn btn-custom-size btn-primary"
                                            onclick="update_data2('newsletter2','Newsletter/add')"
                                            type="button">Subscribe</button>
                                    </div>

                                </form> --}}
                                <a href="https://wa.me/{{ social_link()->whatsApp }}?text=Hi" target="_blank">
                                    <div class=" mt-3 round template_btn_lg_green">
                                        <ion-icon name="logo-whatsapp"></ion-icon> &nbsp;&nbsp;&nbsp;WHATSAPP
                                    </div>
                                </a>
                                <!-- Mailchimp Alerts -->
                                <div class="mailchimp-alerts text-centre pt-5">
                                    <div class="mailchimp-submitting"></div>
                                    <div class="mailchimp-success"></div>
                                    <div class="mailchimp-error"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <section class="card_section">
            <div class="card_section_title">
                Manufacturer Brand
            </div>
            <div class="popular_brand_list">
                @foreach ($brands as $brand)
                    <a href="{{ route('car.by.brand', $brand->id) }}">
                        <div class="brand">
                            <div class="brandIcon">
                                <img src="{{ asset($brand->image) }}" alt="" srcset="">
                            </div>
                            <div class="brandName">
                                <p>{{ $brand->name }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    </div>

@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $(".owl-carousel#single_slider").owlCarousel({
                loop: true,
                margin: 0,
                items: 1,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                nav: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    766: {
                        items: 1
                    },
                    767: {
                        items: 1
                    },
                    992: {
                        items: 1
                    }
                }
            });
        });
    </script>
@endsection
