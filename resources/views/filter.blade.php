@extends('layouts.frontend.desktop.master')
@push('css')
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/fontawesome-all.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">

    <style>
        .bg_image {
            width: 100%;
            position: relative;
        }

        .conditional_image {
            position: absolute;
            top: 0;
            left: 0%;
            margin: 0 auto;
            width: 100% !important;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #dbdbdbb0;
        }

        .conditional_image img {
            width: 100% !important;
            object-fit: contain;
            filter: contrast(120%);
        }

    </style>
@endpush
@section('content')
    <div class="space40"></div>
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                @foreach ($cars as $car)
                    <div class="featured_card_wrapper">
                        <div class="featured_card">
                            <div class="left_img_card">
                                <div class="left_img_card_top">
                                    <span class="filter_sm_btn theme_bg_dark">Featured</span>
                                    <span class="filter_sm_btn theme_bg_primary">History Check</span>
                                </div>
                                <div class="left_image_card_title">
                                    <a href="{{ route('car.details', [$car->id,(title_slug($car->title))])}}" class="text-dark">
                                        <p>{{ $car->title }}</p>
                                    </a>
                                    <p class="template_text_primary"> {{ $car->CarType ? $car->CarType->name : '' }}</p>
                                </div>
                                <div class="left_image_card_content">
                                    @if (count($car->CarImage) > 0)
                                        @if ($car->pub_place == 'Sold')
                                            <a href="{{ route('car.details', [$car->id,(title_slug($car->title))])}}" class="text-dark">
                                                <div class="bg_image">
                                                    <img src="{{ thumbnail($car->CarImage[0]->image) }}"
                                                        alt="{{ $car->title }}" srcset="">
                                                    <div class="conditional_image">
                                                        <img src="{{ asset('image/sold.png') }}" alt="" srcset="">
                                                    </div>
                                                </div>
                                            </a>
                                        @elseif ($car->pub_place == 'Reserved')
                                            <a href="{{ route('car.details', [$car->id,(title_slug($car->title))])}}" class="text-dark">
                                                <div class="bg_image">
                                                    <img src="{{ thumbnail($car->CarImage[0]->image) }}"
                                                        alt="{{ $car->title }}" srcset="">
                                                    <div class="conditional_image">
                                                        <img src="{{ asset('image/reserved.png') }}" alt="" srcset="">
                                                    </div>
                                                </div>
                                            </a>
                                        @else
                                            <a href="{{ route('car.details', [$car->id,(title_slug($car->title))])}}" class="text-dark">
                                                <img src="{{ thumbnail($car->CarImage[0]->image) }}"
                                                    alt="{{ $car->title }}" srcset="">
                                            </a>
                                        @endif
                                    @endif
                                    <div class="card_desc">
                                        <div class="specification_list">
                                            <p>Manufacturer Brand : <span class="font-weight-bold">{{ $car->Brand->name }}</span></p>
                                            <p>Vehicle Brand : <span class="font-weight-bold">{{$car->FuelType?$car->FuelType->name:'' }}</span></p>
                                            <p>Application : <span class="font-weight-bold">{{ $car->voltage }} </span>
                                            </p>
                                        </div>
                                        <div class="specification_list">
                                            <p>Part No : <span class="font-weight-bold">{{ $car->part_no }}</span></p>
                                            <p>Model : <span class="font-weight-bold">{{ $car->vehicle }}</span>
                                            </p>
                                            <p>Year : <span class="font-weight-bold">{{ $car->year }}</span>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="left_image_card_bottom">
                                    <p class="mt-2"> <span><i class="fas fa-map-marker-alt"></i></span> Located :
                                        Shop No. 8 Near Adnoc Service Station, BMW Road, Industrial Area 2. Sharjah - United
                                        Arab Emirates</p>
                                    {{-- <p class="mb-2">Date : {{$car->updated_at->diffForHumans()}}<span>
                                            {{ date_format($car->updated_at, 'd-M-Y') }}</span></p> --}}
                                    <p class="mb-2">Date : {{ $car->updated_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @if ($cars->hasPages())
                    <p>Total Result : {{ $cars->total() }}</p>
                    {{ $cars->links('vendor.pagination.custom_pagination') }}
                @endif
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>

    <script>
        $(function() {
            $(".datepicker").datepicker({
                format: "yyyy",
                viewMode: "years",
                minViewMode: "years",
                autoclose: true
            });
        });

        $('#search_car').on('click', function() {
            $('#search_car_form').attr('action', '/search/get/filter/car');
            $('#search_car_form').attr('method', 'get');
            $("#search_car_form").submit();
        })

        $(document).ready(function() {
            $('#search_car_form').attr('action', '');
            let id = $('#brand_id').val();
            let url = '/get/brand/model/' + id;
            $.ajax(url, {
                success: function(data) {

                    $('#models').empty();
                    let models = data;
                    var html = '';
                    for (var i = 0; i < models.length; i++) {
                        let GetValue = models[i].name;
                        let getId = models[i].id;
                        html +=
                            `<option value="${getId}">${GetValue}</option>`;
                    }
                    $('#models').append(html);
                }
            })


            $("#brand_id").on("change", function(event) {
                let id = $('#brand_id').val();
                let url = '/get/brand/model/' + id
                $.ajax(url, {
                    success: function(data) {
                        $('#models').empty();
                        let models = data;
                        var html = '<option value="all">All Models</option>';
                        for (var i = 0; i < models.length; i++) {
                            let GetValue = models[i].name;
                            let getId = models[i].id;
                            html +=
                                `<option value="${getId}">${GetValue}</option>`;
                        }
                        $('#models').append(html);
                    }
                })
            });
        });
    </script>
@endsection
