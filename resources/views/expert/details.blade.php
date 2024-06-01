@extends('layouts.frontend')
@section('title')
    <title>Blank | GSP - The best place to explore your favourite business.</title>
@endsection
@section('custom_head')
    <!-- Custom styles for this template -->
@endsection
@section('content')
    <main>
        <div class="expert-profile pb-5">
            <div class="container-fluid p-0">
                <img src="{{ asset('images/hospital.jpg') }}" class="img-fluid w-100" alt="..." title="..."
                    style="max-height: 400px" />
            </div>

            <div class="container-fluid container-lg">
                <div class="row">
                    <div class="col-3 col-lg-2 position-relative">
                        <img src="{{ asset('images/person1.png') }}"
                            class="img-fluid d-block m-auto rounded-circle position-absolute profile-picture" alt="..."
                            title="..." style="height: 170px; width: 170px; top: -20px" />
                    </div>

                    <div class="col-9 col-md-6 col-lg-4">
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

                        <h3 class="mt-1 mb-3 expert-name">Herman Rehema, CL</h3>

                        <div class="header-info">
                            <small class="bg-color p-1 rounded">Demo Text 1</small>
                            <small class="text-muted"> | </small>
                            <small class="bg-color-2 p-1 rounded">Demo Text 2</small>
                            <small class="text-muted"> | </small>
                            <small class="bg-color-2 p-1 rounded">Demo Text 3</small>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-6 d-flex justify-content-center align-items-center">
                        <a href="tel:+" class="btn bg-color call-btn mt-3">
                            <i class="bi bi-telephone-forward-fill"></i>
                            Call Now
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-5 py-4 contact-info">
                <div class="container-fluid container-lg">
                    <div class="row row-cols-2 row-cols-md-4">
                        <div class="col text-center">
                            <i class="bi bi-house-fill d-block"></i>
                            <span>Lorem ipsum dolor sit amet consectet adipi.</span>
                        </div>

                        <div class="col text-center">
                            <i class="bi bi-telephone-forward-fill"></i>
                            <span class="d-block">Telephone</span>
                            <span>555552534534</span>
                        </div>

                        <div class="col text-center mt-4 mt-md-0">
                            <i class="bi bi-envelope-fill"></i>
                            <span class="d-block">Email</span>
                            <span>demo@gmail.com</span>
                        </div>

                        <div class="col text-center mt-4 mt-md-0">
                            <i class="bi bi-cash-coin"></i>
                            <span class="d-block">Demo Price</span>
                            <span>1050</span>
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
                                                <small class="fw-semibold">Mark</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <small class="fw-semibold">About</small>
                                            </td>
                                            <td>:</td>
                                            <td style="text-align: justify;">
                                                <small class="fw-semibold">Lorem ipsum, dolor sit amet consectetur
                                                    adipisicing elit. Provident
                                                    quasi fugit autem optio, repudiandae commodi doloribus nostrum culpa
                                                    laudantium iste
                                                    reprehenderit odit recusandae nemo. Repudiandae ad deleniti eos possimus
                                                    nemo ducimus autem,
                                                    reprehenderit veritatis libero nam, quibusdam dolore amet, mollitia
                                                    commodi est quae
                                                    voluptas.</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <small class="fw-semibold">Working Hours</small>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <small class="fw-semibold">Mon-Fri : 09:30 AM - 05:30 PM</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <small class="fw-semibold">Services</small>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <small class="fw-semibold">Lorem ipsum dolor sit amet consectetur
                                                    adipisicing elit. Nihil,
                                                    vero!</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <small class="fw-semibold">Starting Prices</small>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <small class="fw-semibold">10$</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <small class="fw-semibold">Email</small>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <small class="fw-semibold">example@gmail.com</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <small class="fw-semibold">Telephone</small>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <small class="fw-semibold">3456435634563</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <small class="fw-semibold">Social Profile</small>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <a class="icon-link text-decoration-none me-2" href="#">
                                                    <i class="bi bi-twitter-x text-color"></i>
                                                    Twitter
                                                </a>

                                                <a class="icon-link text-decoration-none me-2" href="#">
                                                    <i class="bi bi-linkedin text-color"></i>
                                                    Linkedin
                                                </a>

                                                <a class="icon-link text-decoration-none me-2" href="#">
                                                    <i class="bi bi-instagram text-color"></i>
                                                    Instagram
                                                </a>

                                                <a class="icon-link text-decoration-none me-2" href="#">
                                                    <i class="bi bi-telegram text-color"></i>
                                                    Telegram
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="pills-review" role="tabpanel"
                                aria-labelledby="pills-review-tab">Lorem
                                ipsum dolor sit amet consectetur adipisicing elit. Architecto nesciunt neque impedit
                                obcaecati explicabo
                                temporibus ad molestiae omnis quas? Harum in perferendis voluptatum delectus ratione
                                laudantium
                                dignissimos, deserunt sunt dolorem libero sapiente nihil quidem sit architecto voluptatem,
                                culpa ab
                                pariatur sequi quam. Rem itaque dicta nisi odio, quasi ex voluptatem exercitationem maiores
                                impedit quis
                                placeat error fuga unde? Inventore, ea saepe aliquam animi laboriosam fugit ipsam provident
                                enim quidem
                                cupiditate sed quaerat tenetur ab sint distinctio aspernatur aut corporis facere ipsum
                                facilis
                                perferendis similique? Dolorem consequuntur reiciendis accusantium rerum eveniet eos fugit
                                illum quod
                                consequatur aliquid, vero aliquam perferendis reprehenderit.</div>
                        </div>

                        <div class="mt-2">
                            <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0" id="gmap_canvas"
                                src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20New%20Haven+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                            <a href="https://www.embedmap.net/">google maps widget</a>
                            <script type="text/javascript"
                                src="https://embedmaps.com/google-maps-authorization/script.js?id=aeba0eb2a2d1830cfe370c5ed5bd90dfce1c73be">
                            </script>
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
                                <div id="nameHelp" class="form-text d-none">We'll never share your email with anyone
                                    else.</div>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">
                                    <small>Your Email</small>
                                </label>
                                <input type="email" name="email" class="form-control" id="email"
                                    aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text d-none">We'll never share your email with anyone
                                    else.</div>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label fw-semibold">
                                    <small>Your Phone</small>
                                </label>
                                <input type="text" name="phone" class="form-control" id="phone"
                                    aria-describedby="phoneHelp">
                                <div id="phoneHelp" class="form-text d-none">We'll never share your email with anyone
                                    else.</div>
                            </div>

                            <div class="mb-3">
                                <label for="city" class="form-label fw-semibold">
                                    <small>Your City</small>
                                </label>
                                <input type="text" name="city" class="form-control" id="city"
                                    aria-describedby="cityHelp">
                                <div id="cityHelp" class="form-text d-none">We'll never share your email with anyone
                                    else.</div>
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
                                <div id="messageHelp" class="form-text d-none">We'll never share your email with anyone
                                    else.</div>
                            </div>

                            <button type="submit" class="btn submit-btn border-0 fw-semibold rounded-5 px-4">
                                <i class="bi bi-send"></i>
                                <small>Submit</small>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('custom_script')
@endsection
