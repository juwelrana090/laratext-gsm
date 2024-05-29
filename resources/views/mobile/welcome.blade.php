@extends('layouts.frontend.mobile.master')
@section('content')
    @include('layouts.frontend.mobile.parts.app_bar')
    <div class="container mb-2 mt-2">
        <div class="single_slider_area">
            <div class="single_slider owl-carousel" id="single_slider">
                <div class="slider_image" style="height: 200px;">
                    <img src="{{ asset('image/slider.gif') }}" style="object-fit: cover;height: 200px;" alt="" srcset="">
                </div>
                <div class="slider_image">
                    <img src="{{ asset('image/slider2.jpeg') }}" style="object-fit: cover;height: 200px;" alt=""
                        srcset="">
                    <div class="slider_overlay">
                        <h2>Middle East's <span style="background-color: #57c725"> Largest </span>  Ac Compressor Supplier</h2>
                        {{-- <h2>UAE <br> Auto Ac Spare Parts Trader
                        </h2> --}}
                    </div>
                </div>
                <div class="slider_image">
                    <img src="{{ asset('image/slider3.jpeg') }}" style="object-fit: cover;height: 200px;" alt=""
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
        <div class="categories mt-3">
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
            <a href="{{ route('car.search.by.car_type_id', 4) }}">
                <div class="banner-item img-hover-effect">
                    <div class="banner-img img-zoom-effect">
                        <img class="img-full" src="{{ asset('image/Clutch-Coil Sets.jpg') }}" alt="Banner Image">
                        <div class="banner_overlay"></div>
                        <div class="inner-content text-white">
                            <h2 class="title font-weight-bold">Clutch- Coil Sets</h2>
                        </div>
                    </div>
                </div>
            </a>
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
            
                   <a href="{{ route('car.search.by.car_type_id',12) }}">
                <div class="banner-item img-hover-effect">
                    <div class="banner-img img-zoom-effect">
                        <img class="img-full" src="{{ asset('image/electric.jpeg') }}" alt="Banner Image">
                        <div class="banner_overlay"></div>
                        <div class="inner-content text-white">
                            <h2 class="title font-weight-bold">Electric Compressors</h2>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('car.search.by.car_type_id',13) }}">
                <div class="banner-item img-hover-effect">
                    <div class="banner-img img-zoom-effect">
                        <img class="img-full" src="{{ asset('image/AC Parts') }}" alt="Banner Image">
                        <div class="banner_overlay"></div>
                        <div class="inner-content text-white">
                            <h2 class="title font-weight-bold">AC Parts</h2>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('car.search.by.car_type_id', 14) }}">
                <div class="banner-item img-hover-effect">
                    <div class="banner-img img-zoom-effect">
                        <img class="img-full" src="{{ asset('image/tools.jpeg') }}" alt="Banner Image">
                        <div class="banner_overlay"></div>
                        <div class="inner-content text-white">
                            <h2 class="title font-weight-bold">Tools</h2>
                        </div>
                    </div>
                </div>
            </a>
            
        </div>
    </div>
    <div class="cardSection">
        <div class="cardSectionTitle">
            <div class="titleText">
                <p>Search by Brand</p>
            </div>
            <a href="{{ route('bestcool.brands') }}">
                <div class="titleIcon text-dark">
                    <span>See More <i class="fas fa-arrow-right"></i></span>
                </div>
            </a>

        </div>

        <div class="BrandsCard">
            <div class="brands">
                @foreach ($vehicle_brands as $brand)
                    <a href="{{ route('car.by.vehicle_brand', $brand->id) }}" class="text-dark">
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
        </div>
    </div>

    <div class="cardSection">
        <div class="cardSectionTitle">
            <div class="titleText">
                <p>Compressors</p>
            </div>
            <div class="titleIcon">
                <a href="{{ route('new_arrivals.car') }}" class="text-dark"><span>See More <i
                            class="fas fa-arrow-right"></i></span></a>
            </div>
        </div>
        <div class="cardContentMobile owl-carousel">
            @foreach ($NewArrivalsCars as $Car)
                <a href="{{ route('car.details', [$Car->id,($Car->slug?$Car->slug:title_slug($Car->title))])}}">
                    <div class="mobileCard">
                        <div class="mobileCardImg">
                            @if (count($Car->CarImage) > 0)
                                <img src="{{ thumbnail($Car->CarImage[0]->image) }}" alt="" srcset="">
                            @endif
                        </div>
                        <div class="mobileCardDetails">
                            <h6 class="mb-0 template_primary_color">{{ $Car->CarType ? $Car->CarType->name : '' }}</h6>
                            <p class="template_dark_color font-weight-bold">{{ Str::limit($Car->title, 15, '...') }}</p>
                            {{-- <p class="template_grey_color"> {{ $Car->year }} • {{ $Car->km }} km</p> --}}
                        </div>
                    </div>
                </a>
            @endforeach

        </div>
    </div>
    @if (count($BestSellingCars) > 0)
        <div class="cardSection">
            <div class="cardSectionTitle">
                <div class="titleText">
                    <p>Condensers & Evaporators</p>
                </div>
                <div class="titleIcon">
                    <a href="{{ route('best_selling.car') }}" class="text-dark">
                        <span>See More <i class="fas fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
            <div class="cardContentMobile owl-carousel">
                @foreach ($BestSellingCars as $Car)
                    <a href="{{ route('car.details', [$Car->id,($Car->slug?$Car->slug:title_slug($Car->title))])}}">
                        <div class="mobileCard">
                            <div class="mobileCardImg">
                                @if (count($Car->CarImage) > 0)
                                    <img src="{{ thumbnail($Car->CarImage[0]->image) }}" alt="" srcset="">
                                @endif
                            </div>
                            <div class="mobileCardDetails">
                                <h6 class="mb-0 template_primary_color">{{ $Car->CarType ? $Car->CarType->name : '' }}
                                </h6>
                                <p class="template_dark_color font-weight-bold">{{ Str::limit($Car->title, 15, '...') }}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    @endif
        @if (count($ac_parts) > 0)
        <div class="cardSection">
            <div class="cardSectionTitle">
                <div class="titleText">
                    <p>Ac Parts</p>
                </div>
                <div class="titleIcon">
                    <a href="{{ route('best_selling.car') }}" class="text-dark">
                        <span>See More <i class="fas fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
            <div class="cardContentMobile owl-carousel">
                @foreach ($ac_parts as $Car)
                    <a href="{{ route('car.details', [$Car->id,($Car->slug?$Car->slug:title_slug($Car->title))])}}">
                        <div class="mobileCard">
                            <div class="mobileCardImg">
                                @if (count($Car->CarImage) > 0)
                                    <img src="{{ thumbnail($Car->CarImage[0]->image) }}" alt="" srcset="">
                                @endif
                            </div>
                            <div class="mobileCardDetails">
                                <h6 class="mb-0 template_primary_color">{{ $Car->CarType ? $Car->CarType->name : '' }}
                                </h6>
                                <p class="template_dark_color font-weight-bold">{{ Str::limit($Car->title, 15, '...') }}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    @endif
    <div class="cardSection">
        <div class="cardSectionTitle">
            <div class="titleText">
                <p>Manufacturer Brand</p>
            </div>
            <div class="titleIcon">
                <a href="{{ route('bestcool.brands') }}" class="text-dark">
                    <span>See More <i class="fas fa-arrow-right"></i></span>
                </a>
            </div>
        </div>
        <div class="BrandsCard">
            <div class="brands">
                @foreach ($brands as $brand)
                    <a href="{{ route('car.by.brand', $brand->id) }}" class="text-dark">
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
        </div>
    </div>
@endsection
@push('js')
    <script>
        $('.Searchbox__keyword__input').keyup(function() {
            let typeInput = $('.Searchbox__keyword__input').val();
        });
    </script>
@endpush
