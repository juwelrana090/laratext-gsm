@extends('layouts.frontend.mobile.master')
@section('meta')
    <title>{{ $car->title }}</title>
    <meta property="og:title" content="{{ $car->title }}" />
    <meta property="og:description" content="{{ $car->general_dsc }}" />
    @if (count($car->CarImage) > 0)
        <meta property="og:image" content="{{ thumbnail($car->CarImage[0]->image) }}" />
    @endif
@endsection
@push('css')
    <style>
        .table td,
        .table th {
            padding: 0.10rem
        }

        .template_btn_lg_green {
            background-color: #49DE82;
            color: #fff;
            font-weight: bold;
            width: 100%;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            padding: 10px 10px;
            cursor: pointer;
            border-radius: 5px
        }

    </style>
@endpush
@section('content')

    <div class="slider_wrapper">
        @if (count($car->CarImage) > 0)
            <div class="details_page_slider owl-carousel" id="detailsPageSlider">
                @foreach ($car->CarImage as $image)
                    <div class="sliderImage">
                        <img src="{{ mediumImage($image->image) }}" alt="" srcset="">
                    </div>
                @endforeach
            </div>
        @endif
        <div class="share_favorite">
            {{-- <div class="share_favorite_icon">
                <ion-icon name="heart-outline"></ion-icon>
            </div>--}}
            {{-- <div class="share_favorite_icon share_btn" onclick="expandImage()">
                <ion-icon name="move-outline"></ion-icon>
            </div> --}}
        </div>
        <div class="back_button" onclick="backScreen()">
            <ion-icon name="arrow-back-outline"></ion-icon>
        </div>
    </div>
    <div class="details_page_dsc">
        <div class="details_page_price">
            <h5>{{ $car->CarType ? $car->CarType->name : '' }}</h5>
        </div>
        <div class="details_page_item_title">
            <h5>{{ $car->title }}
            </h5>
        </div>
        <div class="car_category">
            <div class="category_item">
                <a href="#">
                    <span>{{ $car->CarType->name }}</span>
                </a>
            </div>
            <div class="category_item">
                <a href="#">
                    <span>{{ $car->Brand->name }}</span>
                </a>
            </div>

            <div class="category_item">
                <a href="#">
                    <span>{{ $car->year }}</span>
                </a>
            </div>
        </div>
        <div class="posting_date">
            <p>{{ $car->updated_at->diffForHumans() }}</p>
        </div>
        <div class="sharethis-inline-share-buttons"></div>
        <div class="contacts">
            <div class="single_contacts">
                <a href="https://wa.me/{{social_link()->whatsApp}}?text=Hi" target="_blank">
                    <div class=" mt-3 round template_btn_lg_green">
                        Ask For Price
                    </div>
                </a>
            </div>
            <div class="single_contacts">
                <a href="tel:0505781258" class="text-danger">
                    <p>
                        <ion-icon name="call-outline"></ion-icon> {{social_link()->whatsApp}}
                    </p>
                </a>
            </div>

            <div class="single_contacts">
                <a href="https://wa.me/{{social_link()->whatsApp}}?text=Hi" target="_blank">
                    <div class=" mt-3 round template_btn_lg_green">
                        <ion-icon name="logo-whatsapp"></ion-icon> &nbsp;&nbsp;&nbsp;WHATSAPP
                    </div>
                </a>
            </div>
            <br>

        </div>
        <div class="details_section">
            <h5>Details</h5>
            <div class="details_section_content">
                <table class="table">
                    <thead>
                    <tbody>
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
            </div>
        </div>
        <div class="details_section">
            <h5>Description</h5>
            <div class="details_section_content">
                <p>{!! $car->general_dsc !!}</p>
            </div>
        </div>
        <div class="details_section">
            <h5>Location</h5>
            <div class="details_section_content">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14426.73840401649!2d55.3968691!3d25.3147987!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbdc5d9d760b9a4f8!2sBest%20cool%20auto%20spare%20parts%20tr!5e0!3m2!1sen!2sae!4v1650265128822!5m2!1sen!2sae"
                    width="100%" height="180" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>

        $('.sliderImage').on('click', function() {
            var children = $(this).children();
            var img = children[0];
            var imgSourch = $(img).attr('src');
            window.location.href = imgSourch;

        });

    </script>
@endpush
