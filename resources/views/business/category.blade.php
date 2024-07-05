@extends('layouts.frontend')
@section('title')
    <title>Business category | GSP - The best place to explore your favourite business.</title>
@endsection
@section('custom_head')
    <!-- Custom styles for this template -->
@endsection
@section('content')
    <main>


        <div class="container-fluid container-lg mt-5 mb-3">
            <div class="row">
                <div class="col-sm-12 d-flex justify-content-center">
                    <img src="{{ asset($banner->banner_image) }}" class="img-fluid" alt="{{ $banner->banner_title }}">
                </div>
            </div>
        </div>


        <div class="container-fluid container-lg mt-5 mb-3">

            <div class="row">
                <div class="col-sm-12 col-md-3">
                    <div class="card">
                        <div class="card-header">
                            Business Category
                        </div>
                        <div class="card-body d-flex justify-content-center">
                            <div class="list-group w-100">
                                @foreach ($business_categories as $item)
                                    <a class="list-group-item list-group-item-action"
                                        href="{{ route('business.list.category', $item->category_slug) }}">
                                        {{ $item->category_name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9">
                    <div class="card category-card border-0">
                        <div class="card-body p-0 mb-3">
                            <!-- <img src="{{ asset('images/maintenance.png') }}" alt="" title="" style="width: 50px; height: 50px" /> -->
                            <!-- <span class="fw-semibold ms-2" style="font-size: 1.2rem">Business Listing</span> -->
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-semibold py-2 px-3 rounded-3" style="font-size: 1.2rem;">Business
                                    Category</span>
                            </div>
                        </div>
                    </div>

                    <div class="row row-cols-2 row-cols-md-4 g-3">
                        @foreach ($business_categories as $item)
                            <div class="col">
                                <div class="card category-list-card border- py-2" style="width: 100%">
                                    <img class="card-img-top d-block m-auto" src="{{ asset($item->category_image) }}"
                                        alt="{{ $item->category_name }}" title="{{ $item->category_name }}"
                                        style="width: 3rem; height: 3rem" />
                                    <div class="card-body text-truncate py-2">
                                        <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">
                                            {{ $item->category_name }}</h6>
                                        <a href="{{ route('business.list.category', $item->category_slug) }}"
                                            class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
