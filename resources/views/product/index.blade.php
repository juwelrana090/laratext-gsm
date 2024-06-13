@extends('layouts.frontend')
@section('title')
    <title>Product List| GSP - The best place to explore your favourite business.</title>
@endsection
@section('custom_head')
    <!-- Custom styles for this template -->
@endsection
@section('content')
    <main>
        <div class="container-fluid container-lg product my-5">
            <div class="row row-cols-1 g-4">
                @foreach ($cars as $car)
                    <div class="col">
                        <div class="card product-list border-0">
                            <div class="row g-0">
                                <div class="col-md-4 p-2">
                                    <div class="img-container rounded">
                                        <img src="{{ thumbnail($car->CarImage[0]->image) }}"
                                            class="img-fluid rounded d-block m-auto" alt="{{ $car->title }}" title="{{ $car->title }}"
                                            style="width: auto; height: 235px;">
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div>
                                            <small class="badge fw-semibold rounded-5"
                                                style="background-color: var(--sky-blue);">Featured</small>
                                            <small class="badge fw-semibold rounded-5"
                                                style="background-color: var(--deep-orrange);">HistoryCheck</small>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-sm-12 col-md-8">
                                                <h5 class="card-title mt-1 mb-2 fw-bolder" style="color: #0d293d;">
                                                    {{ $car->title }}</h5>
                                            </div>
                                            <div class="col-sm-12 col-md-4">
                                                <h6 class="card-subtitle text-muted text-sm-start text-md-end">
                                                    <small style="color: var(--sky-blue);">AED
                                                        {{ $car->original_price }}</small>
                                                </h6>
                                            </div>
                                        </div>

                                        <div class="row row-cols-md-1 row-cols-md-2 g-sm-0 g-md-2 g-lg-4 mb-3">
                                            <div class="col">
                                                <ol class="list-group list-group-flush">
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-start border-top px-1">
                                                        <small class="fw-semibold">Brand:</small>
                                                        <small
                                                            class="fw-semibold">{{ $car->Brand ? $car->Brand->name : '' }}</small>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-start px-1">
                                                        <small class="fw-semibold">Category:</small>
                                                        <small class="fw-semibold">{{ $car->category_title }}</small>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-start border-bottom px-1">
                                                        <small class="fw-semibold">Sub Category:</small>
                                                        <small class="fw-semibold">{{ $car->sub_category_title }}</small>
                                                    </li>
                                                </ol>
                                            </div>

                                            <div class="col">
                                                <ol class="list-group list-group-flush">
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-start border-top px-1">
                                                        <small class="fw-semibold">Part No:</small>
                                                        <small class="fw-semibold">{{ $car->part_no }}</small>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-start px-1">
                                                        <small class="fw-semibold">Type:</small>
                                                        <small class="fw-semibold">{{ $car->type }}</small>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-start border-bottom px-1">
                                                        <small class="fw-semibold">Condition:</small>
                                                        <small class="fw-semibold">{{ $car->condition }}</small>
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>


                                        <div class="row g-2">
                                            <div class="col-sm-12 col-md-8 col-lg-9 text-truncate">
                                                <i class="bi bi-geo-alt-fill" style="color: var(--sky-blue);">
                                                    <small class="fw-semibold text-muted">{{ $car->pub_place }}</small>
                                                </i>
                                            </div>
                                            <div class="col-sm-12 col-md-4 col-lg-3 text-sm-start text-md-end">
                                                <i class="bi bi-calendar3" style="color: var(--sky-blue);">
                                                    <small
                                                        class="fw-semibold text-muted">{{ $car->created_at->diffForHumans() }}</small>
                                                </i>
                                            </div>
                                        </div>

                                        <a href="{{ route('home') }}/product/{{ $car->slug }}"
                                            class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-lg-12 mb-5">
                    {{ $cars->links() }}
                </div>
            </div>
        </div>
    </main>
@endsection

@section('custom_script')
@endsection
