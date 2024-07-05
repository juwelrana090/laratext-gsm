@extends('layouts.frontend')
@section('title')
    <title>Product category | GSP - The best place to explore your favourite business.</title>
@endsection
@section('custom_head')
    <!-- Custom styles for this template -->
@endsection
@section('content')


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
                        Product Category
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        <div class="list-group w-100">
                            @foreach ($car_type as $item)
                                <a class="list-group-item list-group-item-action"
                                    href="{{ route('product.list.category', $item->id) }}">
                                    {{ $item->name }}
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
                            <span class="fw-semibold py-2 px-3 rounded-3" style="font-size: 1.2rem;">Product Category</span>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-2 row-cols-md-4 g-3">
                    @foreach ($car_type as $item)
                        <div class="col">
                            <div class="card category-list-card border- py-2" style="width: 100%">
                                <img class="card-img-top d-block m-auto" src="{{ asset($item->image) }}"
                                    alt="{{ $item->name }}" title="{{ $item->name }}"
                                    style="width: 3rem; height: 3rem" />
                                <div class="card-body text-truncate py-2">
                                    <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">
                                        {{ $item->name }}</h6>
                                    <a href="{{ route('product.list.category', $item->id) }}" class="stretched-link"></a>
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
