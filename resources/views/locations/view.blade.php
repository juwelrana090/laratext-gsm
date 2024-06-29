@extends('layouts.frontend')
@section('title')
    <title>Locations View | GSP - The best place to explore your favourite business.</title>
@endsection
@section('custom_head')
    <!-- Custom styles for this template -->
@endsection
@section('content')
    <main>
        <div class="container-fluid container-lg mt-5 mb-3">

            <div class="row">
                <div class="col-sm-12 col-md-2">
                    <div class="card">
                        <div class="card-header">
                            Locations List
                        </div>
                        <div class="card-body d-flex justify-content-center">
                            <div class="list-group w-100">
                                @foreach ($locations as $item)
                                    <a class="list-group-item list-group-item-action"
                                        href="{{ route('locations.list.view', $item->slug) }}">
                                        {{ $item->title }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-10">

                    <div class="card category-card border-0">
                        <div class="card-body p-0 mb-3">
                            <!-- <img src="{{ asset('images/maintenance.png') }}" alt="" title="" style="width: 50px; height: 50px" /> -->
                            <!-- <span class="fw-semibold ms-2" style="font-size: 1.2rem">Business Listing</span> -->
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-semibold py-2 px-3 rounded-3" style="font-size: 1.2rem" ;>Business
                                    Listing</span>
                                <a href="{{ route('business.category') }}">
                                    <button href="{{ route('business.list') }}" type="button"
                                        class="btn border-0 fw-semibold" style="font-size: 1.2rem;">View All</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row row-cols-1 g-4">
                        @foreach ($businesses as $item)
                            <?php $images = json_decode($item->business_images); ?>
                            <div class="col">
                                <div class="card border-0">
                                    <div class="row g-0">
                                        <div class="col-lg-6 p-2">
                                            <div id="carouselBusinessList_1"
                                                class="carousel slide position-relative hover-play">
                                                <small
                                                    class="badge text-bg-dark rounded-5 px-2 position-absolute top-0 start-0 z-2 m-2 fw-semibold">
                                                    For Rent
                                                </small>

                                                <small
                                                    class="badge text-bg-dark rounded-5 px-2 position-absolute bottom-0 start-0 z-2 m-2 fw-semibold">
                                                    <i class="bi bi-geo-alt-fill"></i>
                                                    Dhaka, Bangladesh
                                                </small>

                                                <div class="carousel-inner rounded overflow-hidden z-1">
                                                    @foreach ($images as $image)
                                                        <div class="carousel-item active">
                                                            <img src="{{ asset($image->image_path) }}"
                                                                class="img-fluid d-block w-100 rounded"
                                                                alt="{{ $item->company_name }}"
                                                                title="{{ $item->company_name }}" style="height: 330px;">
                                                        </div>
                                                    @endforeach
                                                </div>

                                                <button class="carousel-control-prev" type="button"
                                                    data-bs-target="#carouselBusinessList_1" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>

                                                <button class="carousel-control-next" type="button"
                                                    data-bs-target="#carouselBusinessList_1" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="card-body">
                                                <h5 class="card-title mt-1 mb-2 fw-bolder">
                                                    <a href="{{ route('business.details', $item->company_slug) }}"
                                                        class="nav-link"
                                                        style="color: #0d293d;">{{ $item->company_name }}</a>
                                                </h5>
                                                <h6 class="card-title mt-1 mb-2 fw-bolder" style="color: #12bcff;">
                                                    {{ $item->business_category_title }}</h6>
                                                <p class="card-text text-truncate fw-semibold text-muted">
                                                    <small>{{ $item->company_description }}</small>
                                                </p>

                                                <ul class="list-group list-group-flush">
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                        <div class="fw-semibold">
                                                            <i class="bi bi-buildings me-1"></i>
                                                            <small>Business Type</small>
                                                        </div>

                                                        <small
                                                            class="fw-semibold text-muted">{{ $item->business_type }}</small>
                                                    </li>

                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                        <div class="fw-semibold">
                                                            <i class="bi bi-diagram-3-fill me-1"></i>
                                                            <small>Business Category</small>
                                                        </div>

                                                        <small
                                                            class="fw-semibold text-muted">{{ $item->business_category_title }}</small>
                                                    </li>

                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                        <div class="fw-semibold">
                                                            <i class="bi bi-clock me-1"></i>
                                                            <small>Business Hours</small>
                                                        </div>
                                                        <div>
                                                            <?php $business_hours = json_decode($item->business_hours); ?>
                                                            <table>
                                                                <tr class="fw-semibold" id="ShowHours"
                                                                    style="cursor: pointer;">
                                                                    <td><small>Sunday : </small></td>
                                                                    <td>
                                                                        <small>{{ $business_hours->sunday_hours }}</small>
                                                                        <i class="bi bi-caret-down-fill"></i>
                                                                    </td>
                                                                </tr>
                                                                <tr class="fw-semibold hours" style="display: none;">
                                                                    <td><small>Monday : </small></td>
                                                                    <td><small>{{ $business_hours->monday_hours }}</small>
                                                                    </td>
                                                                </tr>
                                                                <tr class="fw-semibold hours" style="display: none;">
                                                                    <td><small>Tuesday : </small></td>
                                                                    <td><small>{{ $business_hours->wednesday_hours }}</small>
                                                                    </td>
                                                                </tr>
                                                                <tr class="fw-semibold hours" style="display: none;">
                                                                    <td><small>Wednesday : </small></td>
                                                                    <td><small>{{ $business_hours->wednesday_hours }}</small>
                                                                    </td>
                                                                </tr>
                                                                <tr class="fw-semibold hours" style="display: none;">
                                                                    <td><small>Thursday : </small></td>
                                                                    <td><small>{{ $business_hours->thursday_hours }}</small>
                                                                    </td>
                                                                </tr>
                                                                <tr class="fw-semibold hours" style="display: none;">
                                                                    <td><small>Friday : </small></td>
                                                                    <td><small>{{ $business_hours->friday_hours }}</small>
                                                                    </td>
                                                                </tr>
                                                                <tr class="fw-semibold hours" style="display: none;">
                                                                    <td><small>Saturday : </small></td>
                                                                    <td><small>{{ $business_hours->saturday_hours }}</small>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </li>

                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                        <div class="fw-semibold">
                                                            <i class="bi bi-person-rolodex me-1"></i>
                                                            <small>Contact Number</small>
                                                        </div>

                                                        <small
                                                            class="fw-semibold text-muted">{{ $item->company_mobile }}</small>
                                                    </li>
                                                </ul>

                                                <div class="d-flex justify-content-between mb-3">
                                                    {{-- <a class="btn btn-primary rounded-5 py-1 px-3 message-btn fw-semibold me-lg-2 border-0"
                                                        href={{ $item->contact_google_map }} role="button">
                                                        <i class="bi bi-geo-alt"></i>
                                                        <small>View Map</small>
                                                    </a> --}}

                                                    <a class="btn btn-primary rounded-5 py-1 px-3 whatsapp-btn fw-semibold border-0"
                                                        href="https://api.whatsapp.com/send?phone={{ $item->contact_whatsapp }}"
                                                        role="button">
                                                        <i class="bi bi-whatsapp"></i>
                                                        <small>Whatsapp</small>
                                                    </a>

                                                    <a class="btn btn-secondary rounded-5 float-end py-1 px-3 profile-btn fw-semibold border-0"
                                                        href="{{ route('business.details', $item->company_slug) }}"
                                                        role="button">
                                                        <small>View</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <hr>


                    <div class="row row-cols-1 g-4 mt-5">

                        <div class="card category-card border-0">
                            <div class="card-body p-0 mb-3">
                                <!-- <img src="{{ asset('images/maintenance.png') }}" alt="" title="" style="width: 50px; height: 50px" /> -->
                                <!-- <span class="fw-semibold ms-2" style="font-size: 1.2rem">Business Listing</span> -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-semibold py-2 px-3 rounded-3" style="font-size: 1.2rem" ;>Expert
                                        Listing</span>
                                    <a href="{{ route('expert.list') }}">
                                        <button type="button" class="btn border-0 fw-semibold"
                                            style="font-size: 1.2rem;">View
                                            All</button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        @foreach ($experts as $expert)
                            <div class="col">
                                <div class="card expert-list border-0">
                                    <div class="row g-0">
                                        <div class="col-md-4 p-2">
                                            <div class="img-container rounded">
                                                <a href="{{ route('expert.details', $expert->slug) }}" class="nav-link">
                                                    <img src="{{ asset($expert->expert_image) }}"
                                                        class="img-fluid rounded d-block m-auto"
                                                        alt="{{ $expert->title }}" title="{{ $expert->title }}"
                                                        style="width: auto; height: 235px;">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h6 class="card-subtitle text-muted"><small>Real State Agent</small></h6>
                                                <a href="{{ route('expert.details', $expert->slug) }}" class="nav-link">
                                                    <h5 class="card-title mt-1 mb-2 fw-bolder" style="color: #0d293d;">
                                                        {{ $expert->contact_person_name }}
                                                    </h5>
                                                </a>

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
                                                        <div class="border-bottom py-2 fw-semibold"
                                                            style="font-size: small;">
                                                            <span>Mobile: </span>
                                                            <a href="tel:{{ $expert->mobile }}"
                                                                class="text-decoration-none float-end">{{ $expert->mobile }}</a>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="border-bottom py-2 fw-semibold"
                                                            style="font-size: small;">
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
                                                        href="{{ route('expert.details', $expert->slug) }}"
                                                        role="button">
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
            </div>
        </div>
    </main>
@endsection
