@extends('layouts.frontend.mobile.master')
@push('css')

@endpush
@section('content')
    @include('layouts.frontend.mobile.parts.app_bar')
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-3">
                <div class="single-product-img">
                    <div class="swiper-container single-product-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="{{asset($brand->image)}}"
                                    class="single-img gallery-popup">
                                    <img class="img-full" style="height: 150px;object-fit:contain"
                                        src="{{asset($brand->image)}}"
                                        alt="Product Image">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 pt-9 pt-lg-0">
                <div class="single-product-content">
                    <h2 class="title mb-3">{{$brand->name}}</h2>

                    <p class="short-desc mb-3">{{$brand->brnad_description}}</p>

                </div>

            </div>
        </div>
        <div class="contact-area">
            <div class="row" style="width: 100%;">
                <div class="col-lg-6">
                    <div class="contact-vector">
                        <img src="{{asset('image/compressor.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="{{route('store_contact_form')}}" method="POST">
                        @csrf
                        <div class="contact-form">
                            <div class="contact-form-inner">
                                <div class="form-field">
                                    <input type="text" required name="name" placeholder="Name" id="">
                                </div>
                                <div class="form-field">
                                    <input type="email" required name="email" placeholder="Email" id="">
                                </div>
                                <div class="form-field">
                                    <input type="number" name="number" placeholder="Contanct Number" id="">
                                </div>
                                <div class="form-field">
                                    <textarea name="message" placeholder="Message...." id="" cols="30" rows="5"></textarea>
                                </div>
                                <button class="ad-send-btn">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')

@endpush
