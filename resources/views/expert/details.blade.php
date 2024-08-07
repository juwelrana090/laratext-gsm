@extends('layouts.frontend')
@section('title')
    <title>Expert | GSP - The best place to explore your favourite business.</title>
@endsection
@section('custom_head')
    <!-- Custom styles for this template -->

    <style>
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
        <div class="expert-profile pb-5">
            <div class="container-fluid p-0">
                <img src="{{ asset($expert->cover_photo) }}" class="img-fluid w-100" alt="..." title="..."
                    style="max-height: 400px" />
            </div>

            <div class="container-fluid container-lg">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-2 mb-2 position-relative" style="height: 170px;">
                        <img src="{{ asset($expert->expert_image) }}"
                            class="img-fluid d-block m-auto rounded-circle position-absolute profile-picture"
                            alt="{{ $expert->title }}" title="{{ $expert->title }}"
                            style="height: 170px; width: 170px; top: -20px" />
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-4 mb-2 ">
                        <div class="d-flex mt-2 mt-md-4 rating">
                            <div>
                                <i class="bi bi-star-fill text-color"></i>
                                <i class="bi bi-star-fill text-color"></i>
                                <i class="bi bi-star-fill text-color"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <small class="ms-3 text-muted rating-text fw-semibold">3 Out Of 5</small>
                        </div>

                        <h3 class="mt-1 mb-3 expert-name">{{ $expert->contact_person_name }}</h3>

                        {{-- <div class="header-info">
                            <small class="bg-color p-1 rounded">Demo Text 1</small>
                            <small class="text-muted"> | </small>
                            <small class="bg-color-2 p-1 rounded">Demo Text 2</small>
                            <small class="text-muted"> | </small>
                            <small class="bg-color-2 p-1 rounded">Demo Text 3</small>
                        </div> --}}
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-6 d-flex justify-content-center">
                        <a href="tel:{{ $expert->mobile }}" class="btn bg-color call-btn mt-3">
                            <i class="bi bi-telephone-forward-fill"></i>
                            Call Now
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-5 py-4 contact-info">
                <div class="container-fluid container-lg">
                    <div class="row ">
                        <div class="col-sm-6 col-md-3 text-center">
                            <i class="bi bi-house-fill d-block"></i>
                            <span>{{ $expert->title }}</span>
                        </div>

                        <div class="col-sm-6 col-md-3 text-center">
                            <i class="bi bi-telephone-forward-fill"></i>
                            <span class="d-block">Telephone</span>
                            <span>{{ $expert->telephone }}</span>
                        </div>

                        <div class="col-sm-6 col-md-3 text-center mt-4 mt-md-0">
                            <i class="bi bi-envelope-fill"></i>
                            <span class="d-block">Email</span>
                            <span>{{ $expert->email }}</span>
                        </div>

                        <div class="col-sm-6 col-md-3 text-center mt-4 mt-md-0">
                            <i class="bi bi-cash-coin"></i>
                            <span class="d-block">Price</span>
                            <span>{{ $expert->price }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid container-lg mt-5">
                <div class="row">
                    <div class="col-12 col-md-7 expert-details">
                        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-overview-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-overview" type="button" role="tab"
                                    aria-controls="pills-overview" aria-selected="true">Overview</button>
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
                                                <small class="fw-semibold">Title</small>
                                            </td>
                                            <td style="border-top: none">:</td>
                                            <td style="border-top: none">
                                                <small class="fw-semibold">{{ $expert->title }}</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <small class="fw-semibold">About</small>
                                            </td>
                                            <td>:</td>
                                            <td style="text-align: justify;">
                                                <small class="fw-semibold">{{ $expert->about }}</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <small class="fw-semibold">Working Hours</small>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <?php $business_hours = json_decode($expert->working_hours); ?>
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
                                                <small class="fw-semibold">Services</small>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <small class="fw-semibold">{{ $expert->services }}</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <small class="fw-semibold">Starting Prices</small>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <small class="fw-semibold">{{ $expert->starting_prices }}$</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <small class="fw-semibold">Email</small>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <small class="fw-semibold">{{ $expert->email }}</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <small class="fw-semibold">Telephone</small>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <small class="fw-semibold">{{ $expert->telephone }}</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <small class="fw-semibold">Social Profile</small>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <?php $social_media = json_decode($expert->social_profile); ?>

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
                            <div class="tab-pane fade" id="pills-review" role="tabpanel"
                                aria-labelledby="pills-review-tab"><?php echo $expert->description; ?></div>
                        </div>

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

                            $embedUrl = mapEmbed($expert->google_map);
                            ?>

                            <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0" id="gmap_canvas" src="{{ $embedUrl }}"></iframe>
                        </div>

                        <div class="mt-3 contact">

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

                                            <input type="hidden" name="expert_id" value="{{ $expert->id }}">
                                            <input type="hidden" name="type" value="Expert">
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
                                                        <input type="radio" name="rating" value="5"
                                                            id="5">
                                                        <label for="5">☆</label>
                                                        <input type="radio" name="rating" value="4"
                                                            id="4">
                                                        <label for="4">☆</label>
                                                        <input type="radio" name="rating" value="3"
                                                            id="3">
                                                        <label for="3">☆</label>
                                                        <input type="radio" name="rating" value="2"
                                                            id="2">
                                                        <label for="2">☆</label>
                                                        <input type="radio" name="rating" value="1"
                                                            id="1">
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
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('custom_script')
@endsection
