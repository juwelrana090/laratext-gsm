@extends('layouts.frontend.desktop.master')
@push('css')
@endpush
@section('content')
    <div class="container">
        <div class="service_page_section p-4">
            <div class="service_section_title">
                <ul class="list-group list-group-flush">
                    @forelse ($cars as $car)
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
                    @empty
                        <p>Your search did not match any documents.</p>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
