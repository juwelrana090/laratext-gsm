@extends('layouts.frontend')
@section('title')
    <title>Home | GSP - The best place to explore your favourite business.</title>
@endsection
@section('custom_head')
    <!-- Custom styles for this template -->

    <style>
        .select2-container--default .select2-selection--single {
            border-color: 1px solid #f90b0d;
            height: 38px;
            padding: 2px 0;
            border-radius: 0;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 38px;
        }

        .select2-dropdown {
            border-radius: 0 !important;
            box-shadow: #444 0px 3px 5px;
            border: 0;
            position: absolute;
        }
    </style>
@endsection
@section('content')
    <main>
        <div class="container-fluid container-lg bg-img mt-3 mt-md-5 rounded banner">
            <div class="d-flex flex-column justify-content-center align-items-center h-100">
                <h3 class="mb-3 mb-md-5 text-center banner-title">The best place to explore your favourite business.</h3>

                <div class="trans-bg p-4 rounded" style="width: 60%">
                    <form>
                        <div class="row">
                            <div class="col-3 offset-0 offset-md-1 px-0">
                                <select class="form-control form-select" style="border-radius: 50px 0 0 50px;">
                                    @foreach ($get_locations as $location)
                                        <option value='option-1' data-src="{{ asset($location->image) }}">
                                            {{ $location->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-7 col-md-6 px-0">
                                <input type="text" class="form-control rounded-0" placeholder="Keywords..." />
                            </div>

                            <div class="col-2 px-0">
                                <button type="submit" class="btn btn-primary mb-2 px-3">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container-fluid container-lg mt-5 mb-3">
            <div class="row">
                <div class="col-sm-12 d-flex justify-content-center">
                    <img src="{{ asset($banner->banner_image) }}" class="img-fluid" alt="{{ $banner->banner_title }}">
                </div>
            </div>
        </div>

        <div class="container-fluid container-lg mt-5 mb-3">
            <div class="card category-card border-0">
                <div class="card-body p-0 mb-3">
                    <!-- <img src="{{ asset('images/maintenance.png') }}" alt="" title="" style="width: 50px; height: 50px" /> -->
                    <!-- <span class="fw-semibold ms-2" style="font-size: 1.2rem">Business Listing</span> -->
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-semibold py-2 px-3 rounded-3" style="font-size: 1.2rem" ;>Business Listing</span>
                        <a href="{{ route('business.category') }}">
                            <button type="button" class="btn border-0 fw-semibold" style="font-size: 1.2rem;">View
                                All</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row row-cols-2 row-cols-md-4 row-cols-md-6 g-3">
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


        <div class="container-fluid container-lg mt-5 mb-2">
            <!-- <div class="card category-card border-0">
                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="card-body py-2">
                                                                                                                                                                                                                                                                                                                                                                                                                      <img src="{{ asset('images/maintenance.png') }}" alt="" title="" style="width: 50px; height: 50px" />
                                                                                                                                                                                                                                                                                                                                                                                                                      <span class="fw-semibold ms-2" style="font-size: 1.2rem">Experts</span>
                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                  </div> -->

            <div class="card category-card border-0">
                <div class="card-body p-0 mb-3">
                    <!-- <img src="{{ asset('images/maintenance.png') }}" alt="" title="" style="width: 50px; height: 50px" /> -->
                    <!-- <span class="fw-semibold ms-2" style="font-size: 1.2rem">Business Listing</span> -->
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-semibold py-2 px-3 rounded-3" style="font-size: 1.2rem" ;>Expert Listing</span>
                        <a href="{{ route('expert.category') }}">
                            <button type="button" class="btn border-0 fw-semibold" style="font-size: 1.2rem;">View
                                All</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row row-cols-2 row-cols-md-4 row-cols-md-6 g-3">
                @foreach ($experts_categories as $item)
                    <div class="col">
                        <div class="card category-list-card border- py-2" style="width: 100%">
                            <img class="card-img-top d-block m-auto" src="{{ asset($item->category_image) }}"
                                alt="{{ $item->category_name }}" title="{{ $item->category_name }}"
                                style="width: 3rem; height: 3rem" />
                            <div class="card-body text-truncate py-2">
                                <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">
                                    {{ $item->category_name }}</h6>
                                <a href="{{ route('expert.list.category', $item->category_slug) }}"
                                    class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <div class="container-fluid container-lg mt-5 mb-3">
            <!-- <div class="card category-card border-0">
                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="card-body py-2">
                                                                                                                                                                                                                                                                                                                                                                                                                      <img src="{{ asset('images/maintenance.png') }}" alt="" title="" style="width: 50px; height: 50px" />
                                                                                                                                                                                                                                                                                                                                                                                                                      <span class="fw-semibold ms-2" style="font-size: 1.2rem">Products</span>
                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                  </div> -->

            <div class="card category-card border-0">
                <div class="card-body p-0 mb-3">
                    <!-- <img src="{{ asset('images/maintenance.png') }}" alt="" title="" style="width: 50px; height: 50px" /> -->
                    <!-- <span class="fw-semibold ms-2" style="font-size: 1.2rem">Business Listing</span> -->
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-semibold py-2 px-3 rounded-3" style="font-size: 1.2rem" ;>Product Listing</span>
                        <a href="{{ route('product.category') }}">
                            <button type="button" class="btn border-0 fw-semibold" style="font-size: 1.2rem;">View
                                All</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row row-cols-2 row-cols-md-4 row-cols-md-6 g-3">
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

        <div class="container-fluid container-lg mt-5 mb-2">
            <!-- <div class="card category-card border-0">
                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="card-body py-2">
                                                                                                                                                                                                                                                                                                                                                                                                                      <img src="{{ asset('images/maintenance.png') }}" alt="" title="" style="width: 50px; height: 50px" />
                                                                                                                                                                                                                                                                                                                                                                                                                      <span class="fw-semibold ms-2" style="font-size: 1.2rem">Brands</span>
                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                  </div> -->

            <div class="card category-card border-0">
                <div class="card-body p-0 mb-3">
                    <!-- <img src="{{ asset('images/maintenance.png') }}" alt="" title="" style="width: 50px; height: 50px" /> -->
                    <!-- <span class="fw-semibold ms-2" style="font-size: 1.2rem">Business Listing</span> -->
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-semibold py-2 px-3 rounded-3" style="font-size: 1.2rem;">Brand Listing</span>

                        <a href="{{ route('brand.list') }}">
                            <button type="button" class="btn border-0 fw-semibold" style="font-size: 1.2rem;">View
                                All</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row row-cols-2 row-cols-md-4 row-cols-md-6 g-3">
                @foreach ($brand as $item)
                    <div class="col">
                        <div class="card category-list-card border- py-2" style="width: 100%">
                            <img class="card-img-top d-block m-auto" src="{{ asset($item->image) }}"
                                alt="{{ $item->name }}" title="{{ $item->name }}"
                                style="width: 3rem; height: 3rem" />
                            <div class="card-body text-truncate py-2">
                                <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">
                                    {{ $item->name }}</h6>
                                <a href="{{ route('product.list.brand', $item->id) }}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <div class="container-fluid container-lg mt-5 mb-2">
            <!-- <div class="card category-card border-0">
                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="card-body py-2">
                                                                                                                                                                                                                                                                                                                                                                                                                      <img src="{{ asset('images/maintenance.png') }}" alt="" title="" style="width: 50px; height: 50px" />
                                                                                                                                                                                                                                                                                                                                                                                                                      <span class="fw-semibold ms-2" style="font-size: 1.2rem">Brands</span>
                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                  </div> -->

            <div class="card category-card border-0">
                <div class="card-body p-0 mb-3">
                    <!-- <img src="{{ asset('images/maintenance.png') }}" alt="" title="" style="width: 50px; height: 50px" /> -->
                    <!-- <span class="fw-semibold ms-2" style="font-size: 1.2rem">Business Listing</span> -->
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-semibold py-2 px-3 rounded-3" style="font-size: 1.2rem;">Locations Listing</span>

                        <a href="{{ route('locations.list') }}">
                            <button type="button" class="btn border-0 fw-semibold" style="font-size: 1.2rem;">View
                                All</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row row-cols-2 row-cols-md-4 row-cols-md-6 g-3">
                @foreach ($locations as $item)
                    <div class="col">
                        <div class="card category-list-card border- py-2" style="width: 100%">
                            <img class="card-img-top d-block m-auto" src="{{ asset($item->image) }}"
                                alt="{{ $item->title }}" title="{{ $item->title }}"
                                style="width: 3rem; height: 3rem" />
                            <div class="card-body text-truncate py-2">
                                <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">
                                    {{ $item->title }}</h6>
                                <a href="{{ route('locations.list') }}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container my-5 py-5 price-card bg-light">
            <!-- <div class="row mb-5">
                                                                                                                                                                                                                                                                                                                                                                                                                      <div class="col-sm-12 col-md-5">
                                                                                                                                                                                                                                                                                                                                                                                                                        <h1 class="mb-3 mb-md-0">
                                                                                                                                                                                                                                                                                                                                                                                                                          <span style="color: var(--sky-blue);"> Grow Your </span>
                                                                                                                                                                                                                                                                                                                                                                                                                          <br />
                                                                                                                                                                                                                                                                                                                                                                                                                          <span style="color: var(--deep-orrange);"> Digital Footprint </span>
                                                                                                                                                                                                                                                                                                                                                                                                                        </h1>
                                                                                                                                                                                                                                                                                                                                                                                                                      </div>

                                                                                                                                                                                                                                                                                                                                                                                                                      <div class="col-sm-12 col-md-7">
                                                                                                                                                                                                                                                                                                                                                                                                                        <p style="text-align: justify">Boost your online presence and improve your chances of being found by potential customers with Aiwa's business listing. From free listings and prime position adverts to SEO services, Aiwa offers a diverse suite of features to help your business reach a wider audience in the UAE. Our subscription plans are designed to accommodate the diverse needs of businesses. Whether you are a budding entrepreneur, a solopreneur, or a thriving retail chain, there is a plan for you.</p>
                                                                                                                                                                                                                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                                                                                                                                                                                                                    </div> -->

            <div class="d-flex flex-column justify-content-center align-items-center mb-5 gap-2">
                <h4 class="show-plan">Show Plans</h4>
                <select class="form-select bg-light" id="select_plan" style="width: 220px">
                    <option value="monthly" selected>Monthly</option>
                    <option value="anually">Anually</option>
                </select>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
                <div class="col">
                    <div class="position-relative h-100">
                        <div class="ribbon position-absolute">
                            <span class="text-uppercase position-absolute z-1">{{ $plan_1->name }}</span>
                        </div>
                        <?php $currency = json_decode($plan_1->currency); ?>
                        <div class="card border-0 h-100">
                            <div class="card-header text-center text-white">
                                <i class="bi bi-star-fill fs-1 feature-icon text-white"></i>
                                <div class="d-flex justify-content-center align-items-end">
                                    <span class="fs-3"
                                        id="monthly_price_1"><?php echo $currency->symbol; ?>{{ $plan_1->price_month }}</span>
                                    <span class="fs-5 mb-1" id="monthly_text_1" style="font-size: small">/month</span>
                                    <span class="fs-3" id="yearly_price_1"
                                        style="display: none;"><?php echo $currency->symbol; ?>{{ $plan_1->price_year }}</span>
                                    <span class="fs-5 mb-1" id="yearly_text_1"
                                        style="display: none; font-size: small">/year</span>
                                </div>
                                {{-- <h6 class="text-decoration-line-through text-white">${{ $plan_1->price_month }}/month</h6>
                                <h6 class="text-decoration-line-through text-white" style="display: none;">
                                    ${{ $plan_1->price_year }}/year</h6> --}}
                                <span class="text-uppercase text-white"
                                    style="font-size: small">{{ $plan_1->contract }}</span>
                            </div>
                            <div class="card-body px-0 pb-0">
                                <div class="table-responsive">
                                    <?php
                                    $description = [];
                                    if ($plan_1->description) {
                                        $description = json_decode($plan_1->description);
                                    }
                                    ?>
                                    <table class="table align-middle table-sm mb-0">
                                        <tbody class="fw-semibold">
                                            @foreach ($description as $item)
                                                <tr class="align-middle" style="font-size: small">
                                                    <td>
                                                        @if ($item->show == 'true')
                                                            <i class="bi bi-check-lg fs-5 text-success"></i>
                                                        @else
                                                            <i class="bi bi-x fs-5 text-danger"></i>
                                                        @endif
                                                    </td>
                                                    <td>{{ $item->title }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a class="btn fw-semibold fs-6 d-block rounded-5 text-white order-btn text-center"
                                    href="#" role="button" data-bs-toggle="modal" data-bs-target="#plan1">
                                    <span class="position-relative d-inline-block">Subscribe</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="position-relative h-100">
                        <div class="ribbon position-absolute">
                            <span class="text-uppercase position-absolute z-1">{{ $plan_2->name }}</span>
                        </div>
                        <?php $currency = json_decode($plan_2->currency); ?>
                        <div class="card border-0 h-100">
                            <div class="card-header text-center text-white">
                                <i class="bi bi-star-fill fs-1 feature-icon text-white"></i>
                                <div class="d-flex justify-content-center align-items-end">
                                    <span class="fs-3"
                                        id="monthly_price_2"><?php echo $currency->symbol; ?>{{ $plan_2->price_month }}</span>
                                    <span class="fs-5 mb-1" id="monthly_text_2" style="font-size: small">/month</span>
                                    <span class="fs-3" id="yearly_price_2"
                                        style="display: none;"><?php echo $currency->symbol; ?>{{ $plan_2->price_year }}</span>
                                    <span class="fs-5 mb-1" id="yearly_text_2"
                                        style="display: none; font-size: small">/year</span>
                                </div>
                                {{-- <h6 class="text-decoration-line-through text-white">${{ $plan_2->price_month }}/month</h6>
                                <h6 class="text-decoration-line-through text-white" style="display: none;">
                                    ${{ $plan_2->price_year }}/year</h6> --}}
                                <span class="text-uppercase text-white"
                                    style="font-size: small">{{ $plan_2->contract }}</span>
                            </div>
                            <div class="card-body px-0 pb-0">
                                <div class="table-responsive">
                                    <?php
                                    $description = [];
                                    if ($plan_2->description) {
                                        $description = json_decode($plan_2->description);
                                    }
                                    ?>
                                    <table class="table align-middle table-sm mb-0">
                                        <tbody class="fw-semibold">
                                            @foreach ($description as $item)
                                                <tr class="align-middle" style="font-size: small">
                                                    <td>
                                                        @if ($item->show == 'true')
                                                            <i class="bi bi-check-lg fs-5 text-success"></i>
                                                        @else
                                                            <i class="bi bi-x fs-5 text-danger"></i>
                                                        @endif
                                                    </td>
                                                    <td>{{ $item->title }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a class="btn fw-semibold fs-6 d-block rounded-5 text-white order-btn text-center"
                                    href="#" role="button" data-bs-toggle="modal" data-bs-target="#plan2">
                                    <span class="position-relative d-inline-block">Subscribe</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="position-relative h-100">
                        <div class="ribbon position-absolute">
                            <span class="text-uppercase position-absolute z-1">{{ $plan_3->name }}</span>
                        </div>
                        <?php $currency = json_decode($plan_3->currency); ?>
                        <div class="card border-0 h-100">
                            <div class="card-header text-center text-white">
                                <i class="bi bi-star-fill fs-1 feature-icon text-white"></i>
                                <div class="d-flex justify-content-center align-items-end">
                                    <span class="fs-3"
                                        id="monthly_price_3"><?php echo $currency->symbol; ?>{{ $plan_3->price_month }}</span>
                                    <span class="fs-5 mb-1" id="monthly_text_3" style="font-size: small">/month</span>
                                    <span class="fs-3" id="yearly_price_3"
                                        style="display: none;"><?php echo $currency->symbol; ?>{{ $plan_3->price_year }}</span>
                                    <span class="fs-5 mb-1" id="yearly_text_3"
                                        style="display: none; font-size: small">/year</span>
                                </div>
                                {{-- <h6 class="text-decoration-line-through text-white">${{ $plan_3->price_month }}/month</h6>
                                <h6 class="text-decoration-line-through text-white" style="display: none;">
                                    ${{ $plan_3->price_year }}/year</h6> --}}
                                <span class="text-uppercase text-white"
                                    style="font-size: small">{{ $plan_3->contract }}</span>
                            </div>
                            <div class="card-body px-0 pb-0">
                                <div class="table-responsive">
                                    <?php
                                    $description = [];
                                    if ($plan_3->description) {
                                        $description = json_decode($plan_3->description);
                                    }
                                    ?>
                                    <table class="table align-middle table-sm mb-0">
                                        <tbody class="fw-semibold">
                                            @foreach ($description as $item)
                                                <tr class="align-middle" style="font-size: small">
                                                    <td>
                                                        @if ($item->show == 'true')
                                                            <i class="bi bi-check-lg fs-5 text-success"></i>
                                                        @else
                                                            <i class="bi bi-x fs-5 text-danger"></i>
                                                        @endif
                                                    </td>
                                                    <td>{{ $item->title }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a class="btn fw-semibold fs-6 d-block rounded-5 text-white order-btn text-center"
                                    href="#" role="button" data-bs-toggle="modal" data-bs-target="#plan3"><span
                                        class="position-relative d-inline-block">Subscribe</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="position-relative h-100">
                        <div class="ribbon position-absolute">
                            <span class="text-uppercase position-absolute z-1">{{ $plan_4->name }}</span>
                        </div>
                        <?php $currency = json_decode($plan_4->currency); ?>
                        <div class="card border-0 h-100">
                            <div class="card-header text-center text-white">
                                <i class="bi bi-star-fill fs-1 feature-icon text-white"></i>
                                <div class="d-flex justify-content-center align-items-end">
                                    <span class="fs-3"
                                        id="monthly_price_4"><?php echo $currency->symbol; ?>{{ $plan_4->price_month }}</span>
                                    <span class="fs-5 mb-1" id="monthly_text_4" style="font-size: small">/month</span>
                                    <span class="fs-3" id="yearly_price_4"
                                        style="display: none;"><?php echo $currency->symbol; ?>{{ $plan_4->price_year }}</span>
                                    <span class="fs-5 mb-1" id="yearly_text_4"
                                        style="display: none; font-size: small">/year</span>
                                </div>
                                {{-- <h6 class="text-decoration-line-through text-white">${{ $plan_4->price_month }}/month</h6>
                                <h6 class="text-decoration-line-through text-white" style="display: none;">
                                    ${{ $plan_4->price_year }}/year</h6> --}}
                                <span class="text-uppercase text-white"
                                    style="font-size: small">{{ $plan_4->contract }}</span>
                            </div>
                            <div class="card-body px-0 pb-0">
                                <div class="table-responsive">
                                    <?php
                                    $description = [];
                                    if ($plan_4->description) {
                                        $description = json_decode($plan_4->description);
                                    }
                                    ?>
                                    <table class="table align-middle table-sm mb-0">
                                        <tbody class="fw-semibold">
                                            @foreach ($description as $item)
                                                <tr class="align-middle" style="font-size: small">
                                                    <td>
                                                        @if ($item->show == 'true')
                                                            <i class="bi bi-check-lg fs-5 text-success"></i>
                                                        @else
                                                            <i class="bi bi-x fs-5 text-danger"></i>
                                                        @endif
                                                    </td>
                                                    <td>{{ $item->title }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a class="btn fw-semibold fs-6 d-block rounded-5 text-white order-btn text-center"
                                    data-bs-toggle="modal" data-bs-target="#plan4">
                                    <span class="position-relative d-inline-block">Subscribe</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <div class="modal fade" id="plan1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form class="modal-content" action="{{ route('plans.subscribe') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $plan_1->name }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="plan_id" value="{{ $plan_1->id }}">
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
                                Phone Number <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number"
                                placeholder="Phone number" required>
                        </div>
                        <div class="col-12 mb-2">
                            <label for="description" class="form-label">
                                Description <span class="text-danger">*</span>
                            </label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Confirm Subscribe</button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="plan2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form class="modal-content" action="{{ route('plans.subscribe') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $plan_2->name }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="plan_id" value="{{ $plan_2->id }}">
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
                                Phone Number <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number"
                                placeholder="Phone number" required>
                        </div>
                        <div class="col-12 mb-2">
                            <label for="description" class="form-label">
                                Description <span class="text-danger">*</span>
                            </label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Confirm Subscribe</button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="plan3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form class="modal-content" action="{{ route('plans.subscribe') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $plan_3->name }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="plan_id" value="{{ $plan_3->id }}">
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
                                Phone Number <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number"
                                placeholder="Phone number" required>
                        </div>
                        <div class="col-12 mb-2">
                            <label for="description" class="form-label">
                                Description <span class="text-danger">*</span>
                            </label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Confirm Subscribe</button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="plan4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form class="modal-content" action="{{ route('plans.subscribe') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $plan_4->name }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="plan_id" value="{{ $plan_4->id }}">
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
                                Phone Number <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number"
                                placeholder="Phone number" required>
                        </div>
                        <div class="col-12 mb-2">
                            <label for="description" class="form-label">
                                Description <span class="text-danger">*</span>
                            </label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Confirm Subscribe</button>
                </div>
            </form>
        </div>
    </div>



    <script type="text/javascript">
        $(document).ready(function() {

            function formatState(state) {
                if (!state.id) {
                    return state.text;
                }
                var $state = $(
                    '<span><img src="' + $(state.element).attr('data-src') +
                    '" class="img-flag" style="width: 20px; height: 20px;" /> ' + state
                    .text +
                    '</span>'
                );
                return $state;
            };

            $('select').select2({
                minimumResultsForSearch: Infinity,
                templateResult: formatState,
                templateSelection: formatState
            });


            $('#select_plan').click(function() {
                var plan = $(this).val();
                console.log('plan', plan);
                if (plan == 'monthly') {
                    $('#monthly_price_1').show();
                    $('#monthly_price_2').show();
                    $('#monthly_price_3').show();
                    $('#monthly_price_4').show();
                    $('#monthly_text_1').show();
                    $('#monthly_text_2').show();
                    $('#monthly_text_3').show();
                    $('#monthly_text_4').show();

                    $('#yearly_price_1').hide();
                    $('#yearly_price_2').hide();
                    $('#yearly_price_3').hide();
                    $('#yearly_price_4').hide();
                    $('#yearly_text_1').hide();
                    $('#yearly_text_2').hide();
                    $('#yearly_text_3').hide();
                    $('#yearly_text_4').hide();
                } else {
                    $('#monthly_price_1').hide();
                    $('#monthly_price_2').hide();
                    $('#monthly_price_3').hide();
                    $('#monthly_price_4').hide();
                    $('#monthly_text_1').hide();
                    $('#monthly_text_2').hide();
                    $('#monthly_text_3').hide();
                    $('#monthly_text_4').hide();

                    $('#yearly_price_1').show();
                    $('#yearly_price_2').show();
                    $('#yearly_price_3').show();
                    $('#yearly_price_4').show();
                    $('#yearly_text_1').show();
                    $('#yearly_text_2').show();
                    $('#yearly_text_3').show();
                    $('#yearly_text_4').show();
                }
            })
        });
    </script>
@endsection
