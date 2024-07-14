@extends('layouts.frontend')
@section('title')
    <title>Blank | GSP - The best place to explore your favourite business.</title>
@endsection
@section('custom_head')
    <!-- Custom styles for this template -->

    <style>
        :root {
            --dark_orange: #ee5007;
            --dark_blue: #060047;
            --blue_violet: #6a1fcb;
            --white_smoke: #f5f6f7;
            --deep-orange: #ff0c0e;
            --sky-blue: #12bcff;
            --jomolhari: font-family: "Jomolhari", serif;
            --adamina: font-family: "Adamina", serif;
            --ledger: font-family: "Ledger", serif;
            --castoro: font-family: 'Castoro', serif;
            --lora: font-family: 'Lora', serif;
        }

        body {
            background-color: var(--white_smoke);
        }

        .biz-btn {
            background-color: var(--deep-orange) !important;
            color: white !important;
            font-weight: 500;
            transition: all 0.5s ease-in-out;
            /* background: linear-gradient(to right, #ff0c0e, #12bcff); */
            border: none;
        }

        .biz-btn:hover {
            /* background: linear-gradient(to right, #12bcff, #ff0c0e); */
            background-color: var(--sky-blue);
        }

        header .navbar {
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
            background-color: #f5f6f7;
        }

        header .nav-link {
            text-transform: capitalize;
            font-family: "Castoro", serif;
            font-weight: 400;
            color: black;
        }

        header .nav-link.active,
        header .nav-link:hover {
            color: var(--deep-orange) !important;
        }

        .bg-img {
            height: 270px;
            background-image: url(../../images/duba_bg.png);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .trans-bg {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .banner-title {
            color: var(--dark_blue);
        }

        .banner select {
            border-top-left-radius: 50px !important;
            border-bottom-left-radius: 50px !important;
            border: 1px solid #12bcff;
        }

        .whatsapp-btn {
            width: 110px;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            background-color: #25D366 !important;
        }

        .banner input {
            border-top: 1px solid #12bcff;
            border-bottom: 1px solid #12bcff;
        }

        .banner button {
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
            /* border: 1px solid #12bcff; */
            /* background: linear-gradient(to right, #ff0c0e, #12bcff); */
            border: 1px solid var(--deep-orange);
            background-color: var(--deep-orange);
        }

        .banner button:hover {
            border: 1px solid var(--sky-blue);
            background-color: var(--sky-blue);
        }

        .agent-card {
            width: auto;
            height: 235px;
            border-color: #c8c8c83b !important;
            border-radius: 05px;
        }

        .agent-img {
            width: 200px;
            height: 235px;
            border-radius: 5px;
        }

        .company-call {
            width: 130px;
            height: 35px;
        }

        .company-whatsapp {
            width: 120px;
            height: 35px;
        }

        .company-email {
            width: 140px;
            height: 35px;
        }

        @media screen and (max-width: 800px) {
            .banner .trans-bg {
                width: 80% !important;
            }
        }

        @media screen and (max-width: 480px) {

            .businesses_price {
                display: none;
            }
        }

        @media screen and (max-width: 400px) {
            .bg-img {
                height: 200px !important;
            }

            .banner .trans-bg {
                width: 95% !important;
            }

            .agent-img {
                width: 180px;
                height: 215px;
                border-radius: 5px;
            }

            .agent-card {
                width: auto;
                height: 215px;
                border-color: #c8c8c83b !important;
                border-radius: 05px;
            }

            .company-call {
                width: 130px;
                height: 35px;
                font-size: 12px !important;
            }

            .company-whatsapp {
                width: 120px;
                height: 35px;
                font-size: 12px !important;
            }

            .company-email {
                width: 140px;
                height: 35px;
                font-size: 12px !important;
            }

            .fw-semibold {
                font-size: 11px !important;
            }


        }


        input[type="text"],
        select.form-select {
            border: 1px solid var(--deep-orange);
            background-color: var(--white_smoke);
        }

        input[type="text"]:focus,
        select.form-select:focus {
            box-shadow: none;
            border: 1px solid var(--deep-orange);
        }

        input::placeholder {
            color: rgb(209, 206, 206) !important;
        }

        input:focus::placeholder {
            color: rgb(240, 171, 171) !important;
            transform: translateX(7px);
            transition: all 0.5s ease-in-out;
        }

        /* .category-card {
            box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
            background: linear-gradient(to right, #ff0c0e, #12bcff);
            color: white;
            font-family: "Castoro", serif;
        } */

        .category-card {
            background-color: var(--white_smoke);
        }

        .category-card span {
            box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
            background-color: var(--deep-orange);
            color: white;
            font-family: "Castoro", serif;
        }

        .category-card button {
            color: var(--deep-orange);
            font-family: "Castoro", serif;
        }

        .category-card button:hover {
            color: var(--sky-blue);
        }

        .category-list-card {
            border: 1px solid #f8dcdc;
            /* border: none; */
            transition: all 0.5s ease-in-out;
            background-color: #f5f6f7;
            box-shadow: -4px -2px 4px 0px #ffffff, 4px 2px 6px 0px #dfe4ea;
        }

        .category-list-card:hover {
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
            transform: translateX(2px);
        }

        .category-list-card .card-title {
            font-size: small !important;
        }

        .show-plan {
            color: white !important;
            font-weight: 500;
            transition: all 0.5s ease-in-out;
            /* background: linear-gradient(to right, #ff0c0e, #12bcff); */
            background-color: var(--deep-orange);
            border: none;
            border-radius: 5px;
            padding: 4px 30px;
        }

        .show-plan:hover {
            /* background: linear-gradient(to right, #12bcff, #ff0c0e); */
            background-color: var(--deep-orange);
        }

        .price-card .card {
            background-color: #f5f6f7;
            box-shadow: -4px -2px 4px 0px #ffffff, 4px 2px 6px 0px #dfe4ea;
            transition: transform .5s ease;
        }

        .price-card .card:hover {
            transform: scale(1.03);
        }

        .price-card .card-header {
            /* background: linear-gradient(to right, #ff0c0e, #12bcff); */
            background-color: var(--sky-blue);
            border-bottom-right-radius: 40px;
        }

        .price-card .row .col:nth-child(1) .feature-icon {
            color: #9b0000;
        }

        .price-card .row .col:nth-child(2) .feature-icon {
            color: #f76e11;
        }

        .price-card .row .col:nth-child(3) .feature-icon {
            color: #3bb210;
        }

        .price-card .row .col:nth-child(4) .feature-icon {
            color: #8a39e1;
        }

        .price-card .ribbon {
            top: -10px;
            left: -10px;
            width: 150px;
            height: 150px;
            overflow: hidden;
        }

        .price-card .ribbon::before,
        .price-card .ribbon::after {
            position: absolute;
            content: "";
            display: block;
            border-top-color: transparent;
            border-left-color: transparent;
        }

        .price-card .row .col:nth-child(1) .ribbon::before,
        .price-card .row .col:nth-child(1) .ribbon::after {
            border: 7px solid #740606;
            border: 7px solid var(--sky-blue);
        }

        .price-card .row .col:nth-child(2) .ribbon::before,
        .price-card .row .col:nth-child(2) .ribbon::after {
            border: 7px solid #873803;
            border: 7px solid var(--sky-blue);
        }

        .price-card .row .col:nth-child(3) .ribbon::before,
        .price-card .row .col:nth-child(3) .ribbon::after {
            border: 7px solid #206407;
            border: 7px solid var(--sky-blue);
        }

        .price-card .row .col:nth-child(4) .ribbon::before,
        .price-card .row .col:nth-child(4) .ribbon::after {
            border: 7px solid #3b0376;
            border: 7px solid var(--sky-blue);
        }

        .price-card .ribbon::before {
            top: 0;
            right: 17px;
        }

        .price-card .ribbon::after {
            bottom: 15px;
            left: -2px;
        }

        .price-card .ribbon span {
            width: 200px;
            padding: 10px 0;
            color: #fff;
            text-align: center;
            top: 30px;
            right: 0;
            transform: rotate(-45deg);
        }

        .price-card .row .col:nth-child(1) .ribbon span,
        .price-card .row .col:nth-child(1) .card-footer {
            /* background-color: #9b0000; */
            /* background: linear-gradient(to right, #ff0c0e, #12bcff); */
            background-color: var(--deep-orange);
        }

        .price-card .row .col:nth-child(2) .ribbon span,
        .price-card .row .col:nth-child(2) .card-footer {
            /* background-color: #f76e11; */
            /* background-color: var(--sky-blue); */
            background-color: var(--deep-orange);
        }

        .price-card .row .col:nth-child(3) .ribbon span,
        .price-card .row .col:nth-child(3) .card-footer {
            /* background-color: #3bb210; */
            /* background-color: var(--sky-blue); */
            background-color: var(--deep-orange);
        }

        .price-card .row .col:nth-child(4) .ribbon span,
        .price-card .row .col:nth-child(4) .card-footer {
            /* background-color: #8a39e1; */
            /* background-color: var(--sky-blue); */
            background-color: var(--deep-orange);
        }


        .price-card .card-footer {
            /* background: linear-gradient(to right, #ff0c0e, #12bcff); */
            background-color: var(--deep-orange);
        }


        .price-card .order-btn {
            transition: all 0.5s;
        }

        .price-card .order-btn span {
            transition: 0.5s;
        }

        .price-card .order-btn span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .price-card .order-btn:hover span {
            padding-right: 20px;
        }

        .price-card .order-btn:hover span:after {
            opacity: 1;
            right: 0;
        }

        .footer h4,
        .footer hr,
        .footer a,
        .footer p {
            color: #b9d3f6 !important;
        }

        .footer .col:hover h4,
        .col:hover hr {
            transition: all 0.5s ease-in-out;
            color: red !important;
        }

        .footer a:hover {
            color: #12bcff !important;
        }

        .footer .company_description,
        .footer .copyright,
        .footer .developed-by,
        .footer .policy {
            font-size: 12px;
            text-align: justify;
        }

        .footer a span {
            font-size: small !important;
        }

        .footer a:hover span {
            transition: all 0.5s ease-in-out;
            margin-left: 7px !important;
        }

        /* profile card */


        .rate {
            border-bottom-right-radius: 12px;
            border-bottom-left-radius: 12px
        }

        .rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: start
        }

        .rating>input {
            display: none
        }

        .rating>label {
            position: relative;
            width: 1em;
            font-size: 30px;
            font-weight: 300;
            color: #FFD600;
            cursor: pointer
        }

        .rating>label::before {
            content: "\2605";
            position: absolute;
            opacity: 0
        }

        .rating>label:hover:before,
        .rating>label:hover~label:before {
            opacity: 1 !important
        }

        .rating>input:checked~label:before {
            opacity: 1
        }

        .rating:hover>input:checked~label:before {
            opacity: 0.4
        }

        .buttons {
            top: 36px;
            position: relative
        }

        .rating-submit {
            border-radius: 8px;
            color: #fff;
            height: auto
        }

        .rating-submit:hover {
            color: #fff
        }
    </style>
@endsection
@section('content')
    <main>
        <div class="container-fluid container-lg business-details my-5">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}" class="text-decoration-none">
                                    <small class="fw-semibold text-muted">Home</small>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('business.list') }}" class="text-decoration-none">
                                    <small class="fw-semibold text-muted">Business</small>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <small class="fw-semibold">{{ $businesses->company_name }}</small>
                            </li>
                        </ol>
                    </nav>


                    <!-- <div class="info">
                                                                                                                                                                                                                                                                                                                                                                                                                            <i class="bi bi-geo-alt-fill me-3">
                                                                                                                                                                                                                                                                                                                                                                                                                              <small class="fw-semibold">Rue de Tracy</small>
                                                                                                                                                                                                                                                                                                                                                                                                                            </i>

                                                                                                                                                                                                                                                                                                                                                                                                                            <i class="bi bi-tags-fill me-3">
                                                                                                                                                                                                                                                                                                                                                                                                                              <small class="fw-semibold">For Rent</small>
                                                                                                                                                                                                                                                                                                                                                                                                                            </i>

                                                                                                                                                                                                                                                                                                                                                                                                                            <i class="bi bi-calendar3">
                                                                                                                                                                                                                                                                                                                                                                                                                              <small class="fw-semibold">July 3, 2023</small>
                                                                                                                                                                                                                                                                                                                                                                                                                            </i>
                                                                                                                                                                                                                                                                                                                                                                                                                          </div> -->

                    <!--<h4 class="mt-4 mb-3">Overview</h4>-->
                    <!--<div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3">-->
                    <!--  <div class="col">-->
                    <!--    <div class="card border-0 rounded-4 overview-card">-->
                    <!--      <div class="row g-0">-->
                    <!--        <div class="col-4 d-flex justify-content-center align-items-center">-->
                    <!--          <i class="bi bi-buildings-fill fs-2"></i>-->
                    <!--        </div>-->

                    <!--        <div class="col-8">-->
                    <!--          <div class="card-body ps-0">-->
                    <!--            <h6 class="card-title">-->
                    <!--              <small class="fw-semibold text-muted">Type:</small>-->
                    <!--            </h6>-->

                    <!--            <h6 class="card-title">-->
                    <!--              <small class="fw-semibold">Villa</small>-->
                    <!--            </h6>-->
                    <!--          </div>-->
                    <!--        </div>-->
                    <!--      </div>-->
                    <!--    </div>-->
                    <!--  </div>-->

                    <!--  <div class="col">-->
                    <!--    <div class="card border-0 rounded-4 overview-card">-->
                    <!--      <div class="row g-0">-->
                    <!--        <div class="col-4 d-flex justify-content-center align-items-center">-->
                    <!--          <i class="bi bi-door-open fs-2"></i>-->
                    <!--        </div>-->

                    <!--        <div class="col-8">-->
                    <!--          <div class="card-body ps-0">-->
                    <!--            <h6 class="card-title">-->
                    <!--              <small class="fw-semibold text-muted">Bedrooms:</small>-->
                    <!--            </h6>-->

                    <!--            <h6 class="card-title">-->
                    <!--              <small class="fw-semibold">3</small>-->
                    <!--            </h6>-->
                    <!--          </div>-->
                    <!--        </div>-->
                    <!--      </div>-->
                    <!--    </div>-->
                    <!--  </div>-->

                    <!--  <div class="col">-->
                    <!--    <div class="card border-0 rounded-4 overview-card">-->
                    <!--      <div class="row g-0">-->
                    <!--        <div class="col-4 d-flex justify-content-center align-items-center">-->
                    <!--          <i class="bi bi-door-open-fill fs-2"></i>-->
                    <!--        </div>-->

                    <!--        <div class="col-8">-->
                    <!--          <div class="card-body ps-0">-->
                    <!--            <h6 class="card-title">-->
                    <!--              <small class="fw-semibold text-muted">Bathrooms:</small>-->
                    <!--            </h6>-->

                    <!--            <h6 class="card-title">-->
                    <!--              <small class="fw-semibold">1</small>-->
                    <!--            </h6>-->
                    <!--          </div>-->
                    <!--        </div>-->
                    <!--      </div>-->
                    <!--    </div>-->
                    <!--  </div>-->

                    <!--  <div class="col">-->
                    <!--    <div class="card border-0 rounded-4 overview-card">-->
                    <!--      <div class="row g-0">-->
                    <!--        <div class="col-4 d-flex justify-content-center align-items-center">-->
                    <!--          <i class="bi bi-bricks fs-2"></i>-->
                    <!--        </div>-->

                    <!--        <div class="col-8">-->
                    <!--          <div class="card-body ps-0">-->
                    <!--            <h6 class="card-title">-->
                    <!--              <small class="fw-semibold text-muted">Year Built:</small>-->
                    <!--            </h6>-->

                    <!--            <h6 class="card-title">-->
                    <!--              <small class="fw-semibold">2020</small>-->
                    <!--            </h6>-->
                    <!--          </div>-->
                    <!--        </div>-->
                    <!--      </div>-->
                    <!--    </div>-->
                    <!--  </div>-->

                    <!--  <div class="col">-->
                    <!--    <div class="card border-0 rounded-4 overview-card">-->
                    <!--      <div class="row g-0">-->
                    <!--        <div class="col-4 d-flex justify-content-center align-items-center">-->
                    <!--          <i class="bi bi-buildings-fill fs-2"></i>-->
                    <!--        </div>-->

                    <!--        <div class="col-8">-->
                    <!--          <div class="card-body ps-0">-->
                    <!--            <h6 class="card-title">-->
                    <!--              <small class="fw-semibold text-muted">Garage:</small>-->
                    <!--            </h6>-->

                    <!--            <h6 class="card-title">-->
                    <!--              <small class="fw-semibold">2</small>-->
                    <!--            </h6>-->
                    <!--          </div>-->
                    <!--        </div>-->
                    <!--      </div>-->
                    <!--    </div>-->
                    <!--  </div>-->

                    <!--  <div class="col">-->
                    <!--    <div class="card border-0 rounded-4 overview-card">-->
                    <!--      <div class="row g-0">-->
                    <!--        <div class="col-4 d-flex justify-content-center align-items-center">-->
                    <!--          <i class="bi bi-diagram-3-fill fs-2"></i>-->
                    <!--        </div>-->

                    <!--        <div class="col-8">-->
                    <!--          <div class="card-body ps-0">-->
                    <!--            <h6 class="card-title">-->
                    <!--              <small class="fw-semibold text-muted">Area (sqft)</small>-->
                    <!--            </h6>-->

                    <!--            <h6 class="card-title">-->
                    <!--              <small class="fw-semibold">1200</small>-->
                    <!--            </h6>-->
                    <!--          </div>-->
                    <!--        </div>-->
                    <!--      </div>-->
                    <!--    </div>-->
                    <!--  </div>-->

                    <!--  <div class="col">-->
                    <!--    <div class="card border-0 rounded-4 overview-card">-->
                    <!--      <div class="row g-0">-->
                    <!--        <div class="col-4 d-flex justify-content-center align-items-center">-->
                    <!--          <i class="bi bi-buildings-fill fs-2"></i>-->
                    <!--        </div>-->

                    <!--        <div class="col-8">-->
                    <!--          <div class="card-body ps-0">-->
                    <!--            <h6 class="card-title">-->
                    <!--              <small class="fw-semibold text-muted">Furnishing:</small>-->
                    <!--            </h6>-->

                    <!--            <h6 class="card-title">-->
                    <!--              <small class="fw-semibold">Furnished</small>-->
                    <!--            </h6>-->
                    <!--          </div>-->
                    <!--        </div>-->
                    <!--      </div>-->
                    <!--    </div>-->
                    <!--  </div>-->

                    <!--  <div class="col">-->
                    <!--    <div class="card border-0 rounded-4 overview-card">-->
                    <!--      <div class="row g-0">-->
                    <!--        <div class="col-4 d-flex justify-content-center align-items-center">-->
                    <!--          <i class="bi bi-journal-text fs-2"></i>-->
                    <!--        </div>-->

                    <!--        <div class="col-8">-->
                    <!--          <div class="card-body ps-0">-->
                    <!--            <h6 class="card-title">-->
                    <!--              <small class="fw-semibold text-muted">Property ID:</small>-->
                    <!--            </h6>-->

                    <!--            <h6 class="card-title">-->
                    <!--              <small class="fw-semibold">RH-876</small>-->
                    <!--            </h6>-->
                    <!--          </div>-->
                    <!--        </div>-->
                    <!--      </div>-->
                    <!--    </div>-->
                    <!--  </div>-->
                    <!--</div>-->

                </div>

                <div class="col-12 col-md-12 col-lg-12">
                    <div id="carouselBusinessList_1" class="carousel slide position-relative" data-bs-ride="carousel">
                        {{-- <small
                            class="badge text-bg-dark rounded-5 px-2 position-absolute top-0 start-0 z-2 m-2 fw-semibold">
                            {{ $businesses->business_type }}
                        </small> --}}

                        {{-- <small
                            class="badge text-bg-dark rounded-5 px-2 position-absolute bottom-0 start-0 z-2 m-2 fw-semibold">
                            <i class="bi bi-geo-alt-fill"></i>
                            {{ $businesses->contact_address }}
                        </small> --}}

                        <?php $images = json_decode($businesses->business_images); ?>

                        <div class="carousel-inner rounded overflow-hidden z-1 mt-4">
                            @foreach ($images as $image)
                                <div class="carousel-item active">
                                    <img src="{{ asset($image->image_path) }}" class="img-fluid d-block w-100 rounded"
                                        alt="{{ $businesses->company_name }}" title="{{ $businesses->company_name }}"
                                        style="height: 400px;">
                                </div>
                            @endforeach
                        </div>
                        {{-- <h3 class="rounded-4 text-center py-3 mb-5"
                            style="background-color: #d3ecfa; color: var(--sky-blue);">
                            ${{ $businesses->business_price }} Per Month</h3> --}}

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselBusinessList_1"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#carouselBusinessList_1"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="row mt-2">
                        <div class="col-12 col-md-6 col-lg-7 col-xl-8">
                            <div class="row">
                                <div class="col-sm-12 mb-1">
                                    <h1 style="color: var(--dark_blue);">{{ $businesses->company_name }}</h1>
                                </div>
                                <div class="col-sm-12 d-flex align-items-center gap-5 mb-3">
                                    <div class="d-flex gap-1 text-center">
                                        <i class="bi bi-house-fill d-block"></i>
                                        <span class="d-block fw-semibold">Address : </span>
                                        <span>{{ $businesses->contact_address }}</span>
                                    </div>

                                    {{-- <div class="d-flex gap-1 text-center businesses_price">
                                        <i class="bi bi-cash-coin"></i>
                                        <span class="d-block fw-semibold">Price : </span>
                                        <span>{{ $businesses->business_price }}</span>
                                    </div> --}}
                                </div>
                                <div class="col-sm-12 d-flex align-items-center gap-1" style="height: 45px;">
                                    <a class="btn btn-outline-info company-call  d-flex justify-content-center align-items-center gap-1 px-2 py-1"
                                        href="tel:{{ $businesses->company_mobile }}">
                                        <i class="bi bi-telephone fs-5"></i>
                                        {{-- <span>Click to Call</span> --}}
                                    </a>

                                    <a class="btn btn-outline-success company-whatsapp d-flex justify-content-center align-items-center gap-1 px-2 py-1"
                                        href="https://api.whatsapp.com/send?phone={{ $businesses->contact_whatsapp }}">
                                        <i class="bi bi-whatsapp fs-5"></i>
                                        {{-- <span>Whatsapp</span> --}}
                                    </a>

                                    <a class="btn btn-outline-secondary company-email d-flex justify-content-center align-items-center gap-1 px-2 py-1"
                                        href="mail:{{ $businesses->company_email }}">
                                        <i class="bi bi-envelope fs-5"></i>
                                        {{-- <span>Click to Email</span> --}}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-5 col-xl-4 d-flex justify-content-center">
                            <div class="card agent-card border shadow-sm">
                                <div class="card-body p-0 overflow-hidden">
                                    <div class="d-flex overflow-hidden">
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset($businesses->contact_image) }}"
                                                alt="{{ $businesses->contact_person_name }}"
                                                title="{{ $businesses->contact_person_name }}"
                                                class="img-fluid agent-img">
                                        </div>
                                        <div class="flex-grow-1 p-1 ms-3">
                                            <h5 class="mb-1">{{ $businesses->contact_person_name }}</h5>
                                            <p class="mb-2 pb-1">{{ $businesses->contact_position }}</p>
                                            <div class="row rounded-3 mt-2 py-2 bg-body-tertiary">
                                                <small
                                                    class="col-sm-12 fw-semibold">Office:{{ $businesses->contact_whatsapp }}</small>
                                                <small class="col-sm-12 fw-semibold">Mobile:
                                                    {{ $businesses->contact_mobile }}</small>
                                                <small class="col-sm-12 fw-semibold">Email:
                                                    {{ $businesses->contact_email }}</small>
                                                <small class="col-sm-12 fw-semibold">Website:
                                                    {{ $businesses->contact_website }}</small>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center mt-2 px-1 py-2"
                                                style="height: 45px;">
                                                <a class="icon-link rounded-circle px-2 py-1 me-2"
                                                    href="tel:{{ $businesses->contact_mobile }}"
                                                    style="background-color: var(--dark_blue);">
                                                    <i class="bi bi-telephone fs-5 mb-2 text-white"></i>
                                                </a>

                                                <a class="icon-link rounded-circle px-2 py-1 me-2"
                                                    href="https://api.whatsapp.com/send?phone={{ $businesses->contact_whatsapp }}"
                                                    style="background-color: #25D366;">
                                                    <i class="bi bi-whatsapp fs-5 mb-2 text-white"></i>
                                                </a>

                                                <a class="icon-link rounded-circle px-2 py-1"
                                                    href="mail:{{ $businesses->contact_email }}"
                                                    style="background-color: #4b4b4b;">
                                                    <i class="bi bi-envelope fs-5 mb-2 text-white"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="card profile p-2 border-0 shadow-sm">
                                <div class="img-container rounded pt-2">
                                    <img src="{{ asset($businesses->contact_image) }}"
                                        class="img-fluid rounded d-block m-auto"
                                        alt="{{ $businesses->contact_person_name }}"
                                        title="{{ $businesses->contact_person_name }}"
                                        style="width: auto; height: 235px;">
                                </div>

                                <div class="card-body d-flex flex-column align-items-center">
                                    <p class="card-text my-0">Real Estate Agent</p>
                                    <h4 class="card-title mb-3">{{ $businesses->contact_person_name }}</h4>
                                    <small class="fw-semibold">Office:{{ $businesses->contact_whatsapp }}</small>
                                    <small class="fw-semibold">Mobile: {{ $businesses->contact_mobile }}</small>
                                    <small class="fw-semibold">Email: {{ $businesses->contact_email }}</small>
                                    <small class="fw-semibold">Website: {{ $businesses->contact_website }}</small>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid container-lg mt-5">
            <div class="row">
                <div class="col-12 col-md-7 expert-details">
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <!-- <button class="nav-link active" id="pills-overview-tab" data-bs-toggle="pill"
                                                                                                                                                                                                                                                                                                                                                                                                                                data-bs-target="#pills-overview" type="button" role="tab" aria-controls="pills-overview"
                                                                                                                                                                                                                                                                                                                                                                                                                                aria-selected="true">Overview</button> -->

                            <h5 style="margin-top: 10px;">Overview</h5>
                        </li>
                        <!--<li class="nav-item" role="presentation">-->
                        <!--  <button class="nav-link" id="pills-review-tab" data-bs-toggle="pill" data-bs-target="#pills-review" type="button" role="tab" aria-controls="pills-review" aria-selected="false">Reviews</button>-->
                        <!--</li>-->
                    </ul>

                    <hr style="margin-top: -18px; border-width: 2px" />

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-overview" role="tabpanel"
                            aria-labelledby="pills-overview-tab">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td scope="row" style="width: 115px; border-top: none">
                                            <small class="fw-semibold">Company Name</small>
                                        </td>
                                        <td style="border-top: none">:</td>
                                        <td style="border-top: none">
                                            <small class="fw-semibold">{{ $businesses->company_name }}</small>
                                        </td>
                                    </tr>
                                    {{-- <tr>
                                        <td scope="row">
                                            <small class="fw-semibold">About</small>
                                        </td>
                                        <td>:</td>
                                        <td style="text-align: justify;">
                                            <small class="fw-semibold">{{ $businesses->company_description }}</small>
                                        </td>
                                    </tr> --}}
                                    <tr>
                                        <td scope="row">
                                            <small class="fw-semibold">Business Hours</small>
                                        </td>
                                        <td>:</td>
                                        <td>
                                            <?php $business_hours = json_decode($businesses->business_hours); ?>
                                            <p>
                                                <small class="fw-semibold">
                                                    Sunday : {{ $business_hours->sunday_hours }}
                                                </small>
                                            </p>
                                            <p>
                                                <small class="fw-semibold">
                                                    Monday : {{ $business_hours->monday_hours }}
                                                </small>
                                            </p>
                                            <p>
                                                <small class="fw-semibold">
                                                    Tuesday : {{ $business_hours->tuesday_hours }}
                                                </small>
                                            </p>
                                            <p>
                                                <small class="fw-semibold">
                                                    Wednesday : {{ $business_hours->wednesday_hours }}
                                                </small>
                                            </p>
                                            <p>
                                                <small class="fw-semibold">
                                                    Thursday : {{ $business_hours->thursday_hours }}
                                                </small>
                                            </p>
                                            <p>
                                                <small class="fw-semibold">
                                                    Friday : {{ $business_hours->friday_hours }}
                                                </small>
                                            </p>
                                            <p>
                                                <small class="fw-semibold">
                                                    Saturday : {{ $business_hours->saturday_hours }}
                                                </small>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">
                                            <small class="fw-semibold">Products</small>
                                        </td>
                                        <td>:</td>
                                        <td>
                                            <small class="fw-semibold">{{ $businesses->seo_description }}</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">
                                            <small class="fw-semibold">Starting Prices</small>
                                        </td>
                                        <td>:</td>
                                        <td>
                                            <small class="fw-semibold">{{ $businesses->business_price }}$</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">
                                            <small class="fw-semibold">Email</small>
                                        </td>
                                        <td>:</td>
                                        <td>
                                            <small class="fw-semibold">{{ $businesses->company_email }}</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">
                                            <small class="fw-semibold">Telephone</small>
                                        </td>
                                        <td>:</td>
                                        <td>
                                            <small class="fw-semibold">{{ $businesses->company_mobile }}</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">
                                            <small class="fw-semibold">Social Media</small>
                                        </td>
                                        <td>:</td>
                                        <td>
                                            <?php $social_media = json_decode($businesses->social_media); ?>

                                            @if (!empty($social_media->facebook))
                                                <a class="icon-link text-decoration-none me-2"
                                                    href="{{ $social_media->facebook }}">
                                                    <i class="bi bi-facebook text-color"></i>
                                                    Facebook
                                                </a>
                                            @endif

                                            @if (!empty($social_media->instagram))
                                                <a class="icon-link text-decoration-none me-2"
                                                    href="{{ $social_media->instagram }}">
                                                    <i class="bi bi-instagram text-color"></i>
                                                    Instagram
                                                </a>
                                            @endif

                                            @if (!empty($social_media->twitter))
                                                <a class="icon-link text-decoration-none me-2"
                                                    href="{{ $social_media->twitter }}">
                                                    <i class="bi bi-twitter-x text-color"></i>
                                                    Twitter
                                                </a>
                                            @endif

                                            @if (!empty($social_media->linkedin))
                                                <a class="icon-link text-decoration-none me-2"
                                                    href="{{ $social_media->linkedin }}">
                                                    <i class="bi bi-linkedin text-color"></i>
                                                    Linkedin
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                            {{ $businesses->company_description }}</div>
                    </div>


                    <h4 class="mt-4 mb-3">Description</h4>
                    <div style="text-align: justify;">
                        <small class="fw-semibold">
                            <?php echo $businesses->company_description; ?>
                        </small>
                    </div>

                    <h4 class="mt-4 mb-3">Business on map</h4>
                    <div class="mt-2">
                        <?php
                        function mapEmbed($googleMapsUrl)
                        {
                            if (preg_match('/@([0-9\.\,\-a-zA-Z]*)/', $googleMapsUrl, $matches)) {
                                $coordsArray = explode(',', $matches[1]);
                                $embedUrl = 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d20000!2d' . $coordsArray[1] . '!3d' . $coordsArray[0] . '!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1486486434098';
                                return $embedUrl;
                            } else {
                                return 'Invalid Google Maps URL';
                            }
                        }

                        $embedUrl = mapEmbed($businesses->contact_google_map);
                        ?>
                        <iframe class="rounded-3" width="100%" height="400" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0" src="{{ $embedUrl }}"></iframe>
                    </div>

                    <div class="mt-4 contact">

                        <h5 style="margin-top: 10px;">Get In Touch</h5>
                        <hr style="margin-top: 5px; border-width: 2px" />

                        <form action="{{ route('add.get.in.touch') }}" method="post" class="px-3">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">
                                    <small>Your Name</small>
                                </label>
                                <input type="text" name="name" class="form-control" id="name"
                                    aria-describedby="nameHelp" value="{{ old('name') }}">
                                <div id="nameHelp" class="form-text d-none">We'll never share your email with anyone
                                    else.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">
                                    <small>Your Email</small>
                                </label>
                                <input type="email" name="email" class="form-control" id="email"
                                    aria-describedby="emailHelp" value="{{ old('email') }}">
                                <div id="emailHelp" class="form-text d-none">We'll never share your email with anyone
                                    else.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label fw-semibold">
                                    <small>Your Phone</small>
                                </label>
                                <input type="text" name="phone" class="form-control" id="phone"
                                    aria-describedby="phoneHelp" value="{{ old('phone') }}">
                                <div id="phoneHelp" class="form-text d-none">We'll never share your email with anyone
                                    else.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="city" class="form-label fw-semibold">
                                    <small>Your City</small>
                                </label>
                                <input type="text" name="city" class="form-control" id="city"
                                    aria-describedby="cityHelp" value="{{ old('city') }}">
                                <div id="cityHelp" class="form-text d-none">We'll never share your email with anyone
                                    else.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="replyTime" class="form-label fw-semibold">
                                    <small>Prefered Replay Time</small>
                                </label>
                                <input type="datetime-local" name="replay_time" class="form-control" id="replyTime"
                                    aria-describedby="replyTimeHelp" value="{{ old('replay_time') }}">
                                <div id="replyTimeHelp" class="form-text d-none">We'll never share your email with
                                    anyone
                                    else.</div>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label fw-semibold">
                                    <small>Your Message</small>
                                </label>
                                <textarea class="form-control" name="message" rows="6" id="message">
                            {{ old('message') }}
                        </textarea>
                                <div id="messageHelp" class="form-text d-none">We'll never share your email with
                                    anyone
                                    else.
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary border-0 fw-semibold rounded-5 px-4">
                                <i class="bi bi-send"></i>
                                <small>Submit</small>
                            </button>
                        </form>
                    </div>

                </div>

                <div class="col-12 col-md-5">

                    <div class="mb-3 d-flex justify-content-center align-items-center bg-light">
                        <div class="w-100">
                            <nav>
                                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-review-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-review" type="button" role="tab"
                                        aria-controls="nav-review" aria-selected="true">All Review</button>
                                    <button class="nav-link" id="nav-write-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-write" type="button" role="tab"
                                        aria-controls="nav-write" aria-selected="false">Write Rate & Review</button>
                                </div>
                            </nav>
                            <div class="tab-content p-3 border bg-light" id="nav-tabContent">
                                <div class="tab-pane fade active show" id="nav-review" role="tabpanel"
                                    aria-labelledby="nav-review-tab">
                                    @foreach ($reviews as $key => $review)
                                        <div class="card mt-2 mb-2">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $review->name }}</h5>
                                                <i class="bi bi-star-fill text-warning pe-1"></i>
                                                <i class="bi bi-star-fill text-warning pe-1"></i>
                                                <i class="bi bi-star-fill text-warning pe-1"></i>
                                                <i class="bi bi-star-fill text-warning pe-1"></i>
                                                <i class="bi bi-star-fill text-warning pe-1"></i>
                                                <p class="card-text">
                                                    <?php echo $review->description; ?>
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="tab-pane fade" id="nav-write" role="tabpanel"
                                    aria-labelledby="nav-write-tab">
                                    <form class="row g-3" action="{{ route('review.create') }}" method="POST">
                                        @csrf

                                        <input type="hidden" name="business_id" value="{{ $businesses->id }}">
                                        <input type="hidden" name="type" value="Business">
                                        <div class="col-12 mb-2">
                                            <label for="full_name" class="form-label">
                                                Full Name <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Full Name" required>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <label for="email" class="form-label">
                                                Email <span class="text-danger">*</span>
                                            </label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Email address" required>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <label for="phone_number" class="form-label">
                                                Rating <span class="text-danger">*</span>
                                            </label>
                                            <div class="text-start mb-2">
                                                <div class="rating">
                                                    <input type="radio" name="rating" value="5" id="5">
                                                    <label for="5">☆</label>
                                                    <input type="radio" name="rating" value="4" id="4">
                                                    <label for="4">☆</label>
                                                    <input type="radio" name="rating" value="3" id="3">
                                                    <label for="3">☆</label>
                                                    <input type="radio" name="rating" value="2" id="2">
                                                    <label for="2">☆</label>
                                                    <input type="radio" name="rating" value="1" id="1">
                                                    <label for="1">☆</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <label for="description" class="form-label">
                                                Description <span class="text-danger">*</span>
                                            </label>
                                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                                        </div>

                                        <div class="col-12 mb-2">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5 class="mt-4">Featured Businesses</h5>
                    <div class="row row-cols-1 mt-3 g-2">
                        @foreach ($featured as $item)
                            <?php $images = json_decode($item->business_images); ?>
                            <div class="col">
                                <div class="card feature-list border-0">
                                    <div class="row g-0">
                                        <div class="col-4 p-2">
                                            <img src="{{ asset($images[0]->image_path) }}"
                                                class="img-fluid rounded d-block m-auto w-100" alt="..."
                                                title="..." style="height: 65px;">
                                        </div>
                                        <div class="col-8">
                                            <div class="card-body p-2">
                                                <h6 class="card-subtitle text-muted">
                                                    <small>{{ $item->company_name }}</small>
                                                </h6>
                                                <h6 class="card-title mt-1" style="color: var(--sky-blue);">
                                                    ${{ $item->business_price }} Per Month
                                                </h6>
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

        <div class="container-fluid container-lg business-details my-5">
            <div class="row">

                <h4 class="mt-5">Similar Businesses</h4>
                <div class="row row-cols-md-2 row-cols-lg-3 g-3">

                    @foreach ($similar as $item)
                        <div class="col">
                            <div class="card border-0 similar-properties-card">
                                <div class="card-body p-2">
                                    <div id="carouselBusinessList_2"
                                        class="carousel slide position-relative hover-play mb-2">
                                        {{-- <small
                                        class="badge text-bg-dark rounded-5 px-2 position-absolute top-0 start-0 z-2 m-2 fw-semibold">
                                        For Rent
                                    </small> --}}

                                        <small
                                            class="badge text-bg-dark rounded-5 px-2 position-absolute bottom-0 start-0 z-2 m-2 fw-semibold">
                                            <i class="bi bi-geo-alt-fill"></i>
                                            {{ $item->city }}, {{ $item->country }}
                                        </small>

                                        <div class="carousel-inner rounded overflow-hidden z-1">
                                            <?php $images = json_decode($item->business_images); ?>
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
                                            data-bs-target="#carouselBusinessList_2" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>

                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselBusinessList_2" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>

                                    <div class="mx-0 mx-md-2">
                                        <small class="card-text fw-semibold text-muted">
                                            <?php
                                            echo date('M d, Y', strtotime($item->created_at));
                                            ?>
                                        </small>
                                        <h5 class="card-title text-truncate fw-bold mt-2">{{ $item->company_name }}</h5>
                                        <h6 class="card-text fw-bold" style="color: var(--sky-blue);">
                                            ${{ $item->business_price }}</h6>


                                        {{-- <div class="mb-2 mt-3 d-flex justify-content-between">
                                            <i class="bi bi-buildings-fill me-1">
                                                <small class="fw-semibold">Villa</small>
                                            </i>

                                            <i class="bi bi-diagram-3-fill me-1">
                                                <small class="fw-semibold">1,800 sqft</small>
                                            </i>

                                            <i class="bi bi-door-open-fill me-1">
                                                <small class="fw-semibold">5</small>
                                            </i>

                                            <i class="bi bi-door-open">
                                                <small class="fw-semibold">3</small>
                                            </i>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


                <!--<div class="contact mt-5 rounded-3 d-flex flex-column justify-content-center align-items-center">-->
                <!--  <h1 class="text-white">Looking for a dream home?</h1>-->

                <!--  <div class="mt-3 text-center">-->
                <!--    <a class="btn btn-secondary rounded-5 px-4 mb-2 me-0 me-md-2 border-0 py-2" href="#" role="button">-->
                <!--      <i class="bi bi-telephone me-1"></i>-->
                <!--      <small class="fw-semibold">+880 1744 555555</small>-->
                <!--    </a>-->

                <!--    <a class="btn btn-secondary rounded-5 px-4 mb-2 me-0 me-md-2 border-0 py-2" href="#" role="button">-->
                <!--      <i class="bi bi-whatsapp me-1"></i>-->
                <!--      <small class="fw-semibold">+880 1744 555555</small>-->
                <!--    </a>-->

                <!--    <a class="btn btn-secondary rounded-5 px-3 me-0 mb-2 border-0 py-2" href="#" role="button">-->
                <!--      <i class="bi bi-envelope me-1"></i>-->
                <!--      <small class="fw-semibold">example@gmail.com</small>-->
                <!--    </a>-->
                <!--  </div>-->

                <!--</div>-->
            </div>



        </div>
    </main>

    <script type="text/javascript">
        jQuery(document).ready(function($) {

            $(".btnrating").on('click', (function(e) {

                var previous_value = $("#selected_rating").val();

                var selected_value = $(this).attr("data-attr");
                $("#selected_rating").val(selected_value);

                $(".selected-rating").empty();
                $(".selected-rating").html(selected_value);

                for (i = 1; i <= selected_value; ++i) {
                    $("#rating-star-" + i).toggleClass('btn-warning');
                    $("#rating-star-" + i).toggleClass('btn-default');
                }

                for (ix = 1; ix <= previous_value; ++ix) {
                    $("#rating-star-" + ix).toggleClass('btn-warning');
                    $("#rating-star-" + ix).toggleClass('btn-default');
                }

            }));


        });
    </script>
@endsection

@section('custom_script')
@endsection
