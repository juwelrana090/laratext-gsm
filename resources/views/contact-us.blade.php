@extends('layouts.frontend')
@section('title')
    <title>About US | GSP - The best place to explore your favourite business.</title>
@endsection
@section('custom_head')
    <!-- Custom styles for this template -->
@endsection
@section('content')
    <main>
        <div class="expert-profile pb-5">
            <div class="container-fluid p-0">
                <div class="jumbotron text-center">
                    <div class="container">
                        <h1 class="jumbotron-heading"> CONTACT US</h1>
                        <p class="lead text-muted mb-0">Contact Page build with Company</p>
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
                                <h5 style="margin-top: 10px;">Address</h5>
                            </li>
                        </ul>

                        <hr style="margin-top: -18px; border-width: 2px" />

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-overview" role="tabpanel"
                                aria-labelledby="pills-overview-tab">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td scope="row" style="width: 115px; border-top: none">
                                                <small class="fw-semibold">Company</small>
                                            </td>
                                            <td style="border-top: none">:</td>
                                            <td style="border-top: none">
                                                <small class="fw-semibold">Mark</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <small class="fw-semibold">Address</small>
                                            </td>
                                            <td>:</td>
                                            <td style="text-align: justify;">
                                                <small class="fw-semibold">4435 Berkshire Circle Knoxville</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <small class="fw-semibold">Phone</small>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <small class="fw-semibold">+ 879-890-9767</small>
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
                                                <small class="fw-semibold">Website</small>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <small class="fw-semibold">www.website.com</small>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
                        <h5 class="text-center" style="margin-top: 10px;">Get In Touch</h5>
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
                                <div id="replyTimeHelp" class="form-text d-none">We'll never share your email with
                                    anyone else.</div>
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
