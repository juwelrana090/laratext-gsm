@extends('layouts.frontend.desktop.master')
@section('meta')
    <title>{{ $car->title }}</title>
    <meta property="og:title" content="{{ $car->title }}" />
    <meta property="og:description" content="{!! $car->general_dsc !!}" />
    @if (count($car->CarImage) > 0)
        <meta property="og:image" content="{{ thumbnail($car->CarImage[0]->image) }}" />
    @endif
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/fontawesome-all.min.css') }}">
@endpush
@section('content')
    {{-- <div class="container">
        <div class="advertisement">
            <img src="{{ asset('Frontend/desktop/img/advertisement/car.webp') }}" alt="" srcset="">
        </div>
    </div> --}}
    <div class="container">
        <div class="car_category">
            <div class="category_item">
                <a href="#">
                    <span>Dubai</span>
                </a>&nbsp;&nbsp;<span class="template-text-grey"><i class="fas fa-long-arrow-alt-right"></i></span>
            </div>
            <div class="category_item">
                <a href="#">
                    <span>{{ $car->CarType ? $car->CarType->name : '' }}</span>
                </a>&nbsp;&nbsp;<span class="template-text-grey"><i class="fas fa-long-arrow-alt-right"></i></span>
            </div>
            <div class="category_item">
                <a href="#">
                    <span>{{ $car->Brand->name }}</span>
                </a>&nbsp;&nbsp;<span class="template-text-grey"><i class="fas fa-long-arrow-alt-right"></i></span>
            </div>

            <div class="category_item">
                <a href="#">
                    <span>{{ $car->year }}</span>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="carNamePrice">
            <div class="carName">
                <h4 class="mb-0">{{ $car->title }}</h4>
                <p>{{ $car->updated_at->diffForHumans() }}</p>
            </div>
            <div class="carPrice">

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                @if (count($car->CarImage) > 0)
                    <div class="single_slider_area">
                        <div class="single_slider owl-carousel" id="single_slider">
                            @foreach ($car->CarImage as $image)
                                <div class="slider_image">
                                    <img src="{{ mediumImage($image->image) }}" alt="" srcset="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <div class="space40"></div>
                <h4 class="mb-0">{{ $car->title }}</h4>
                <div class="item_specification_list">
                    <table class="table">
                        <table class="table">
                            <tbody>
                                @if ($car->Brand)
                                    <tr>
                                        <td style="width: 50%;font-weight: bold;">Manufacturer Brand</td>
                                        <td>{{ $car->Brand ? $car->Brand->name : '' }}</td>
                                    </tr>
                                @endif
                                @if ($car->FuelType)
                                    <tr>
                                        <td style="width: 50%;font-weight: bold;">Vehicle Brand</td>
                                        <td>{{ $car->FuelType ? $car->FuelType->name : '' }}</td>
                                    </tr>
                                @endif
                                @if ($car->part_no)
                                    <tr>
                                        <td style="width: 50%;font-weight: bold;">Part No</td>
                                        <td>{{ $car->part_no }}</td>
                                    </tr>
                                @endif
                                @if ($car->vehicle)
                                    <tr>
                                        <td style="width: 50%;font-weight: bold;">Vehicle</td>
                                        <td>{{ $car->vehicle }}</td>
                                    </tr>
                                @endif
                                @if ($car->year)
                                    <tr>
                                        <td style="width: 50%;font-weight: bold;">Year</td>
                                        <td>{{ $car->year }}</td>
                                    </tr>
                                @endif
                                @if ($car->voltage)
                                    <tr>
                                        <td style="width: 50%;font-weight: bold;">Application</td>
                                        <td>{{ $car->voltage }}</td>
                                    </tr>
                                @endif
                                @if ($car->cylinder)
                                    <tr>
                                        <td style="width: 50%;font-weight: bold;">No. of Cylinders</td>
                                        <td>{{ $car->cylinder }}</td>
                                    </tr>
                                @endif
                                @if ($car->origin)
                                    <tr>
                                        <td style="width: 50%;font-weight: bold;">Origin</td>
                                        <td>{{ $car->origin }}</td>
                                    </tr>
                                @endif
                                @if ($car->pully_diameter)
                                    <tr>
                                        <td style="width: 50%;font-weight: bold;">Pulley Diameter</td>
                                        <td>{{ $car->pully_diameter }}</td>
                                    </tr>
                                @endif
                                @if ($car->manufaturer)
                                    <tr>
                                        <td style="width: 50%;font-weight: bold;">Manufacturer</td>
                                        <td>{{ $car->manufaturer }}</td>
                                    </tr>
                                @endif
                                @if ($car->sensor)
                                    <tr>
                                        <td style="width: 50%;font-weight: bold;">Control Valve / Sensor</td>
                                        <td>{{ $car->sensor }}</td>
                                    </tr>
                                @endif
                                @if ($car->grooves)
                                    <tr>
                                        <td style="width: 50%;font-weight: bold;">No. of Grooves</td>
                                        <td>{{ $car->grooves }}</td>
                                    </tr>
                                @endif

                            </tbody>
                        </table>
                    </table>
                </div>
                <div class="item_overview" style="border-top: 1px solid #ddd;">
                    <div class="item_overview_title">
                        <h5>Description</h5>
                    </div>
                    <p>{!! $car->general_dsc !!}</p>
                </div>
                <div class="item_overview" style="border-top: 1px solid #ddd;">
                    <div class="item_overview_title">
                        <h5>Location</h5>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14426.73840401649!2d55.3968691!3d25.3147987!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbdc5d9d760b9a4f8!2sBest%20cool%20auto%20spare%20parts%20tr!5e0!3m2!1sen!2sae!4v1650265128822!5m2!1sen!2sae"
                        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="seller_contact">
                    <a href="https://wa.me/{{social_link()->whatsApp}}?text=Hi" target="_blank">
                        <div class="template_btn_lg_danger">Ask For Price</div>
                    </a>
                    <a href="tel:0505781258">
                        <div class="template_btn_lg_light mt-3">
                            <ion-icon name="call-outline"></ion-icon>&nbsp; {{social_link()->whatsApp}}
                        </div>
                    </a>

                    <a href="https://wa.me/{{social_link()->whatsApp}}?text=Hi" target="_blank">
                        <div class=" mt-3 round template_btn_lg_green">
                            <ion-icon name="logo-whatsapp"></ion-icon> &nbsp;&nbsp;&nbsp;WHATSAPP
                        </div>
                    </a>
                </div>
                <br>
                <div class="sharethis-inline-share-buttons"></div>

            </div>
        </div>
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
                autoplayTimeout: 2000,
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
        $('.slider_image').on('click', function() {
           var children =$(this).children();
           var img =children[0];
           var imgSourch = $(img).attr('src');
           window.location.href = imgSourch;

        });

    </script>
@endsection
