@extends('layouts.frontend')
@section('title')
    <title>Product details | GSP - The best place to explore your favourite business.</title>
@endsection
@section('custom_head')
    <!-- Custom styles for this template -->
@endsection
@section('content')
    <main>
        <div class="container-fluid container-lg product-details my-5">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#" class="text-decoration-none">
                            <small class="fw-semibold text-muted">Home</small>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}/product" class="text-decoration-none">
                            <small class="fw-semibold text-muted">Product</small>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <small class="fw-semibold"> {{ $car->title }}</small>
                    </li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class=" card mb-2">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div id="carouselBusinessList_1" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner rounded overflow-hidden z-1 mt-4">
                                                @foreach ($car_images as $car_image)
                                                    <div class="carousel-item active p-3">
                                                        <img src="{{ thumbnail($car_image->image) }}"
                                                            class="img-fluid d-block w-100 rounded"
                                                            alt="{{ $car->title }}" title=" {{ $car->title }}"
                                                            style="height: 300px;">
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
                                    <div class="col-12 col-md-6 col-lg-6 p-4">


                                        <div class="d-flex flex-column flex-md-row flex-row justify-content-between">
                                            <h2 style="color: var(--dark_blue);"> {{ $car->title }}</h2>
                                            <h4 style="color: var(--deep-orrange);">AED {{ $car->original_price }}</h4>
                                        </div>

                                        <i class="bi bi-calendar3" style="color: var(--sky-blue);">
                                            <small
                                                class="fw-semibold text-muted">{{ $car->created_at->diffForHumans() }}</small>
                                        </i>

                                        <table class="table mt-4">
                                            <tbody>
                                                <tr class="border-top">
                                                    <td scope="row" style="width: 160px;">
                                                        <small class="fw-semibold">Category</small>
                                                    </td>
                                                    <td style="width: 15px;">:</td>
                                                    <td>
                                                        <small class="fw-semibold">{{ $car->category_title }}</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        <small class="fw-semibold">Sub Category</small>
                                                    </td>
                                                    <td>:</td>
                                                    <td style="text-align: justify;">
                                                        <small class="fw-semibold">{{ $car->sub_category_title }}</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        <small class="fw-semibold">Type</small>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <small class="fw-semibold">{{ $car->type }}</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        <small class="fw-semibold">Brand</small>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <small
                                                            class="fw-semibold">{{ $car->Brand ? $car->Brand->name : '' }}</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        <small class="fw-semibold">Condition</small>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <small class="fw-semibold">{{ $car->condition }}</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        <small class="fw-semibold">Part No</small>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <small class="fw-semibold">{{ $car->part_no }}</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        <small class="fw-semibold">Application</small>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <small class="fw-semibold">{{ $car->application }}</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        <small class="fw-semibold">Uses</small>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <small class="fw-semibold">{{ $car->uses }}</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        <small class="fw-semibold">Product Note</small>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <small class="fw-semibold">{{ $car->product_note }}</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        <small class="fw-semibold">Delivery Note</small>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <small class="fw-semibold">{{ $car->delivery_note }}</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        <small class="fw-semibold">Made</small>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <small class="fw-semibold">{{ $car->made }}</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        <small class="fw-semibold">Payment Options</small>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <small class="fw-semibold">{{ $car->payment_options }}</small>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mt-1 mb-2 fw-bolder">Description </h4>
                                </div>
                                <div class="card-body">
                                    <div><?php echo $car->general_dsc; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- <h4 class="mb-3">Location</h4>
                    <div class="mt-2">
                        <iframe class="rounded-3" width="100%" height="400" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0" id="gmap_canvas"
                            src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20New%20Haven+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                        <a href="https://www.embedmap.net/">google maps widget</a>
                        <script type="text/javascript"
                            src="https://embedmaps.com/google-maps-authorization/script.js?id=aeba0eb2a2d1830cfe370c5ed5bd90dfce1c73be">
                        </script>
                    </div> --}}

                {{-- <div class="col-12 col-md-3 col-lg-2 mt-3">
                    <div class="d-grid gap-2">
                        <button type="button" class="btn fw-semibold text-white border-0"
                            style="background-color: var(--deep-orrange);">
                            <i class="bi bi-chat-dots"></i>
                            <small>Chat With Seller</small>
                        </button>

                        <button type="button" class="btn btn-outline-danger fw-semibold">
                            <i class="bi bi-telephone"></i>
                            <small>+880 01789 556677</small>
                        </button>

                        <button type="button" class="btn btn-outline-danger fw-semibold">
                            <i class="bi bi-telephone"></i>
                            <small>+880 01789 556677</small>
                        </button>

                        <button type="button" class="btn btn-outline-danger fw-semibold">
                            <i class="bi bi-telephone"></i>
                            <small>+880 01789 556677</small>
                        </button>

                        <button type="button" class="btn btn-outline-danger fw-semibold">
                            <i class="bi bi-telephone"></i>
                            <small>+880 01789 556677</small>
                        </button>

                        <button type="button" class="btn fw-semibold text-white border-0"
                            style="background-color: #49de82;">
                            <i class="bi bi-whatsapp"></i>
                            <small>+880 01789 556677</small>
                        </button>
                    </div>
                </div> --}}
            </div>
        </div>
    </main>
@endsection

@section('custom_script')
@endsection
