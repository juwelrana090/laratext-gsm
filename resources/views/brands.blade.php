@extends('layouts.frontend.desktop.master')
@push('css')
@endpush
@section('content')
    <div class="container" style="min-height: 80vh">
        <div class="card_section_title mt-5 text-uppercase">
            Manufacturer Brands
        </div>
        <hr>
        <div class="row">
            @foreach ($brands as $brand)
            <div class="col-lg-4">
                <div class="blog-item" style="margin-bottom: 50px;">
                    <div class="blog-img img-hover-effect" style="border: 1px solid #dee2e6;">
                        <a class="img-zoom-effect" style="height: 120px;" href="{{route('bestcool.brand.details',[$brand->id,'m_brands'])}}">
                            <img class="img-full"  src="{{asset($brand->image)}}"
                                alt="Blog Image" style="padding:10px;object-fit:contain">
                        </a>
                    </div>
                    <div class="blog-content pt-6">

                        <h2 class="mb-2">
                            <a class="title" href="{{route('bestcool.brand.details',[$brand->id,'m_brands'])}}"
                                style="font-size: 24px;">{{$brand->name}}</a>
                        </h2>
                        <p class="short-desc mb-2"> {{ Str::limit($brand->brnad_description,85, '...') }}</p>
                        <div class="button-wrap">
                            <a class="btn btn-custom-size btn-matterhorn"
                                href="{{route('bestcool.brand.details',[$brand->id,'m_brands'])}}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="card_section_title mt-5 text-uppercase">
            Vehicle Brands
        </div>
        <hr>
        <div class="row">
            @foreach ($v_brands as $brand)
            <div class="col-lg-4">
                <div class="blog-item" style="margin-bottom: 50px;">
                    <div class="blog-img img-hover-effect" style="border: 1px solid #dee2e6;">
                        <a class="img-zoom-effect" style="height: 120px;" href="{{route('bestcool.brand.details',[$brand->id,'v_brands'])}}">
                            <img class="img-full"  src="{{asset($brand->image)}}"
                                alt="Blog Image" style="padding:10px;object-fit:contain">
                        </a>
                    </div>
                    <div class="blog-content pt-6">

                        <h2 class="mb-2">
                            <a class="title" href="{{route('bestcool.brand.details',[$brand->id,'v_brands'])}}"
                                style="font-size: 24px;">{{$brand->name}}</a>
                        </h2>
                        <p class="short-desc mb-2">{{ Str::limit($brand->brnad_description, 90, '...') }}</p>
                        <div class="button-wrap">
                            <a class="btn btn-custom-size btn-matterhorn"
                                href="{{route('bestcool.brand.details',[$brand->id,'v_brands'])}}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
@endsection
@push('js')
@endpush
