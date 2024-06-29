<?php $__env->startSection('title'); ?>
    <title>Blank | GSP - The best place to explore your favourite business.</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom_head'); ?>
    <!-- Custom styles for this template -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main>
        <div class="expert-profile pb-5">
            <div class="container-fluid p-0">
                <img src="<?php echo e(asset('images/hospital.jpg')); ?>" class="img-fluid w-100" alt="..." title="..."
                    style="max-height: 400px" />
            </div>

            <div class="container-fluid container-lg">
                <div class="row">
                    <div class="col-3 col-lg-2 position-relative">
                        <img src="<?php echo e(asset($expert->expert_image)); ?>"
                            class="img-fluid d-block m-auto rounded-circle position-absolute profile-picture"
                            alt="<?php echo e($expert->title); ?>" title="<?php echo e($expert->title); ?>"
                            style="height: 170px; width: 170px; top: -20px" />
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

                        <h3 class="mt-1 mb-3 expert-name"><?php echo e($expert->contact_person_name); ?></h3>

                        
                    </div>

                    <div class="col-12 col-md-3 col-lg-6 d-flex justify-content-center align-items-center">
                        <a href="tel:<?php echo e($expert->mobile); ?>" class="btn bg-color call-btn mt-3">
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
                            <span><?php echo e($expert->title); ?></span>
                        </div>

                        <div class="col text-center">
                            <i class="bi bi-telephone-forward-fill"></i>
                            <span class="d-block">Telephone</span>
                            <span><?php echo e($expert->telephone); ?></span>
                        </div>

                        <div class="col text-center mt-4 mt-md-0">
                            <i class="bi bi-envelope-fill"></i>
                            <span class="d-block">Email</span>
                            <span><?php echo e($expert->email); ?></span>
                        </div>

                        <div class="col text-center mt-4 mt-md-0">
                            <i class="bi bi-cash-coin"></i>
                            <span class="d-block">Price</span>
                            <span><?php echo e($expert->price); ?></span>
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
                                                <small class="fw-semibold"><?php echo e($expert->title); ?></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <small class="fw-semibold">About</small>
                                            </td>
                                            <td>:</td>
                                            <td style="text-align: justify;">
                                                <small class="fw-semibold"><?php echo e($expert->about); ?></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <small class="fw-semibold">Working Hours</small>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <small class="fw-semibold"><?php echo e($expert->working_hours); ?></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <small class="fw-semibold">Services</small>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <small class="fw-semibold"><?php echo e($expert->services); ?></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <small class="fw-semibold">Starting Prices</small>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <small class="fw-semibold"><?php echo e($expert->starting_prices); ?>$</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <small class="fw-semibold">Email</small>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <small class="fw-semibold"><?php echo e($expert->email); ?></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <small class="fw-semibold">Telephone</small>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <small class="fw-semibold"><?php echo e($expert->telephone); ?></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <small class="fw-semibold">Social Profile</small>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <?php $social_media = json_decode($expert->social_profile); ?>

                                                <?php if(!empty($social_media->facebook)): ?>
                                                    <a class="icon-link text-decoration-none me-2"
                                                        href="<?php echo e($social_media->facebook); ?>">
                                                        <i class="bi bi-facebook text-color"></i>
                                                        Facebook
                                                    </a>
                                                <?php endif; ?>

                                                <?php if(!empty($social_media->instagram)): ?>
                                                    <a class="icon-link text-decoration-none me-2"
                                                        href="<?php echo e($social_media->instagram); ?>">
                                                        <i class="bi bi-instagram text-color"></i>
                                                        Instagram
                                                    </a>
                                                <?php endif; ?>

                                                <?php if(!empty($social_media->twitter)): ?>
                                                    <a class="icon-link text-decoration-none me-2"
                                                        href="<?php echo e($social_media->twitter); ?>">
                                                        <i class="bi bi-twitter-x text-color"></i>
                                                        Twitter
                                                    </a>
                                                <?php endif; ?>

                                                <?php if(!empty($social_media->linkedin)): ?>
                                                    <a class="icon-link text-decoration-none me-2"
                                                        href="<?php echo e($social_media->linkedin); ?>">
                                                        <i class="bi bi-linkedin text-color"></i>
                                                        Linkedin
                                                    </a>
                                                <?php endif; ?>
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
                                marginwidth="0" id="gmap_canvas" src="<?php echo e($embedUrl); ?>"></iframe>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\app_gsp\resources\views/expert/details.blade.php ENDPATH**/ ?>