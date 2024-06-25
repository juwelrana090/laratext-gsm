@extends('layouts.frontend')
@section('title')
    <title>Expert List| GSP - The best place to explore your favourite business.</title>
@endsection
@section('custom_head')
    <!-- Custom styles for this template -->
@endsection
@section('content')
    <main>
        <div class="container-fluid container-lg expert my-5">
            <div class="row row-cols-1 g-4">

                @foreach ($experts as $expert)
                    <div class="col">
                        <div class="card expert-list border-0">
                            <div class="row g-0">
                                <div class="col-md-4 p-2">
                                    <div class="img-container rounded">
                                        <img src="{{ asset($expert->expert_image) }}" class="img-fluid rounded d-block m-auto"
                                            alt="{{ $expert->title }}" title="{{ $expert->title }}"
                                            style="width: auto; height: 235px;">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="card-subtitle text-muted"><small>Real State Agent</small></h6>
                                        <h5 class="card-title mt-1 mb-2 fw-bolder" style="color: #0d293d;">
                                            {{ $expert->contact_person_name }}</h5>

                                        <div class="social-media-link">
                                            <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                            <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                                                <i class="bi bi-twitter-x"></i>
                                            </a>
                                            <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                                                <i class="bi bi-pinterest"></i>
                                            </a>
                                            <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                                                <i class="bi bi-telegram"></i>
                                            </a>
                                        </div>


                                        <div class="row row-cols-1 row-cols-md-2 my-3 info">
                                            <div class="col">
                                                <div class="border-top border-bottom py-2 fw-semibold"
                                                    style="font-size: small;">
                                                    <span>Office: </span>
                                                    <a href="tel:{{ $expert->telephone }}"
                                                        class="text-decoration-none float-end">{{ $expert->telephone }}</a>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="border-top border-bottom py-2 fw-semibold"
                                                    style="font-size: small;">
                                                    <span>Email: </span>
                                                    <a href="mailto:"
                                                        class="text-decoration-none  float-end">{{ $expert->email }}</a>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="border-bottom py-2 fw-semibold" style="font-size: small;">
                                                    <span>Mobile: </span>
                                                    <a href="tel:{{ $expert->mobile }}"
                                                        class="text-decoration-none float-end">{{ $expert->mobile }}</a>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="border-bottom py-2 fw-semibold" style="font-size: small;">
                                                    <span>Website: </span>
                                                    <a href="{{ $expert->website }}"
                                                        class="text-decoration-none  float-end">{{ $expert->website }}</a>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="d-flex justify-content-between mb-3">
                                            {{-- <a class="btn btn-primary rounded-5 py-1 px-2 px-md-4 message-btn fw-semibold me-md-2 border-0"
                                                href="sms:{{ $expert->mobile }}" role="button">
                                                <i class="bi bi-envelope"></i>
                                                <small>Message</small>
                                            </a> --}}

                                            <a class="btn btn-primary rounded-5 py-1 px-2 px-md-4 whatsapp-btn fw-semibold border-0"
                                                href="#" role="button">
                                                <i class="bi bi-whatsapp"></i>
                                                <small>Whatsapp</small>
                                            </a>

                                            <a class="btn btn-secondary rounded-5 float-end py-1 px-2 px-md-4 profile-btn fw-semibold border-0"
                                                href="{{ route('expert.details', $expert->slug) }}" role="button">
                                                <small>View Profile</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection

@section('custom_script')
@endsection
