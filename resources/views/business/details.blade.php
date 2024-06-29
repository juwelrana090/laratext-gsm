@extends('layouts.frontend')
@section('title')
    <title>Blank | GSP - The best place to explore your favourite business.</title>
@endsection
@section('custom_head')
    <!-- Custom styles for this template -->
@endsection
@section('content')
    <main>
        <div class="container-fluid container-lg business-details my-5">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-9">
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

                    <div id="carouselBusinessList_1" class="carousel slide position-relative" data-bs-ride="carousel">
                        <small
                            class="badge text-bg-dark rounded-5 px-2 position-absolute top-0 start-0 z-2 m-2 fw-semibold">
                            {{ $businesses->business_type }}
                        </small>

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

                        <h2 style="color: var(--dark_blue);">{{ $businesses->company_name }}</h2>

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

                <div class="col-12 col-md-4 col-lg-3">

                    <div class="card profile p-2 border-0">
                        <div class="img-container rounded pt-2">
                            <img src="{{ asset($businesses->contact_image) }}" class="img-fluid rounded d-block m-auto"
                                alt="{{ $businesses->contact_person_name }}"
                                title="{{ $businesses->contact_person_name }}" style="width: auto; height: 235px;">
                        </div>

                        <div class="card-body d-flex flex-column align-items-center">
                            <p class="card-text my-0">Real Estate Agent</p>
                            <h4 class="card-title mb-3">{{ $businesses->contact_person_name }}</h4>

                            <small class="fw-semibold">Office:{{ $businesses->contact_whatsapp }}</small>
                            <small class="fw-semibold">Mobile: {{ $businesses->contact_mobile }}</small>
                            <small class="fw-semibold">Email: {{ $businesses->contact_email }}</small>
                            <small class="fw-semibold">Website: {{ $businesses->contact_website }}</small>

                            <div class="mt-4">
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
                                    href="mail:{{ $businesses->contact_email }}" style="background-color: #4b4b4b;">
                                    <i class="bi bi-envelope fs-5 mb-2 text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-5 py-4 contact-info" style="background-color: white;">
            <div class="container-fluid container-lg">
                <div class="row row-cols-2 row-cols-md-4">
                    <div class="col text-center">
                        <i class="bi bi-house-fill d-block"></i>
                        <span>{{ $businesses->contact_address }}</span>
                    </div>

                    <div class="col text-center">
                        <i class="bi bi-telephone-forward-fill"></i>
                        <span class="d-block">Telephone</span>
                        <span>{{ $businesses->company_mobile }}</span>
                    </div>

                    <div class="col text-center mt-4 mt-md-0">
                        <i class="bi bi-envelope-fill"></i>
                        <span class="d-block">Email</span>
                        <span>{{ $businesses->company_mobile }}</span>
                    </div>

                    <div class="col text-center mt-4 mt-md-0">
                        <i class="bi bi-cash-coin"></i>
                        <span class="d-block">Price</span>
                        <span>{{ $businesses->business_price }}</span>
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

                </div>

                <div class="col-12 col-md-5 contact">
                    <h5 style="margin-top: 10px;">Get In Touch</h5>
                    <hr style="margin-top: 5px; border-width: 2px" />

                    <form action="" method="post" enctype="multipart/form-data" class="px-3">
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">
                                <small>Your Name</small>
                            </label>
                            <input type="text" name="name" class="form-control" id="name"
                                aria-describedby="nameHelp">
                            <div id="nameHelp" class="form-text d-none">We'll never share your email with anyone else.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">
                                <small>Your Email</small>
                            </label>
                            <input type="email" name="email" class="form-control" id="email"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text d-none">We'll never share your email with anyone else.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label fw-semibold">
                                <small>Your Phone</small>
                            </label>
                            <input type="text" name="phone" class="form-control" id="phone"
                                aria-describedby="phoneHelp">
                            <div id="phoneHelp" class="form-text d-none">We'll never share your email with anyone else.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="city" class="form-label fw-semibold">
                                <small>Your City</small>
                            </label>
                            <input type="text" name="city" class="form-control" id="city"
                                aria-describedby="cityHelp">
                            <div id="cityHelp" class="form-text d-none">We'll never share your email with anyone else.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="replyTime" class="form-label fw-semibold">
                                <small>Prefered Replay Time</small>
                            </label>
                            <input type="datetime-local" name="reply_time" class="form-control" id="replyTime"
                                aria-describedby="replyTimeHelp">
                            <div id="replyTimeHelp" class="form-text d-none">We'll never share your email with anyone
                                else.</div>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label fw-semibold">
                                <small>Your Message</small>
                            </label>
                            <textarea class="form-control" name="message" rows="6" id="message" aria-describedby="messageHelp"></textarea>
                            <div id="messageHelp" class="form-text d-none">We'll never share your email with anyone else.
                            </div>
                        </div>

                        <button type="submit" class="btn submit-btn border-0 fw-semibold rounded-5 px-4">
                            <i class="bi bi-send"></i>
                            <small>Submit</small>
                        </button>
                    </form>


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
                    <div class="col">
                        <div class="card border-0 similar-properties-card">
                            <div class="card-body p-2">
                                <div id="carouselBusinessList_2" class="carousel slide position-relative hover-play mb-2">
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
                                        <div class="carousel-item active">
                                            <img src="./images/room_1.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_2.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_3.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_4.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_5.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_6.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_7.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_8.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
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
                                    <small class="card-text fw-semibold text-muted">August 14, 2023</small>
                                    <h5 class="card-title text-truncate fw-bold mt-2">Modern and Luxury Apartment</h5>
                                    <h6 class="card-text fw-bold" style="color: var(--sky-blue);">$3,600 per Month</h6>


                                    <div class="mb-2 mt-3 d-flex justify-content-between">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-0 similar-properties-card">
                            <div class="card-body p-2">
                                <div id="carouselBusinessList_2" class="carousel slide position-relative hover-play mb-2">
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
                                        <div class="carousel-item active">
                                            <img src="./images/room_4.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_2.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_3.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_4.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_5.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_6.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_7.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_8.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
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
                                    <small class="card-text fw-semibold text-muted">August 14, 2023</small>
                                    <h5 class="card-title text-truncate fw-bold mt-2">Modern and Luxury Apartment</h5>
                                    <h6 class="card-text fw-bold" style="color: var(--sky-blue);">$3,600 per Month</h6>


                                    <div class="mb-2 mt-3 d-flex justify-content-between">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-0 similar-properties-card">
                            <div class="card-body p-2">
                                <div id="carouselBusinessList_2" class="carousel slide position-relative hover-play mb-2">
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
                                        <div class="carousel-item active">
                                            <img src="./images/room_8.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_2.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_3.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_4.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_5.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_6.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_7.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_8.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
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
                                    <small class="card-text fw-semibold text-muted">August 14, 2023</small>
                                    <h5 class="card-title text-truncate fw-bold mt-2">Modern and Luxury Apartment</h5>
                                    <h6 class="card-text fw-bold" style="color: var(--sky-blue);">$3,600 per Month</h6>


                                    <div class="mb-2 mt-3 d-flex justify-content-between">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-0 similar-properties-card">
                            <div class="card-body p-2">
                                <div id="carouselBusinessList_2" class="carousel slide position-relative hover-play mb-2">
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
                                        <div class="carousel-item active">
                                            <img src="./images/room_7.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_2.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_3.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_4.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_5.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_6.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_7.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_8.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
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
                                    <small class="card-text fw-semibold text-muted">August 14, 2023</small>
                                    <h5 class="card-title text-truncate fw-bold mt-2">Modern and Luxury Apartment</h5>
                                    <h6 class="card-text fw-bold" style="color: var(--sky-blue);">$3,600 per Month</h6>


                                    <div class="mb-2 mt-3 d-flex justify-content-between">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-0 similar-properties-card">
                            <div class="card-body p-2">
                                <div id="carouselBusinessList_2" class="carousel slide position-relative hover-play mb-2">
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
                                        <div class="carousel-item active">
                                            <img src="./images/room_6.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_2.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_3.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_4.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_5.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_6.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_7.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_8.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
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
                                    <small class="card-text fw-semibold text-muted">August 14, 2023</small>
                                    <h5 class="card-title text-truncate fw-bold mt-2">Modern and Luxury Apartment</h5>
                                    <h6 class="card-text fw-bold" style="color: var(--sky-blue);">$3,600 per Month</h6>


                                    <div class="mb-2 mt-3 d-flex justify-content-between">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-0 similar-properties-card">
                            <div class="card-body p-2">
                                <div id="carouselBusinessList_2" class="carousel slide position-relative hover-play mb-2">
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
                                        <div class="carousel-item active">
                                            <img src="./images/room_5.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_5.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_3.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_4.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_5.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_6.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_7.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/room_8.jpg" class="img-fluid d-block w-100 rounded"
                                                alt="..." title="..." style="height: 200px;">
                                        </div>
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
                                    <small class="card-text fw-semibold text-muted">August 14, 2023</small>
                                    <h5 class="card-title text-truncate fw-bold mt-2">Modern and Luxury Apartment</h5>
                                    <h6 class="card-text fw-bold" style="color: var(--sky-blue);">$3,600 per Month</h6>


                                    <div class="mb-2 mt-3 d-flex justify-content-between">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
@endsection

@section('custom_script')
@endsection
