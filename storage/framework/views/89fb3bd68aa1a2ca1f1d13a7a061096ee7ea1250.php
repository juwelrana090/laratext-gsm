<?php

use App\Models\SocialLink;
$socialLInk = SocialLink::orderBy('id', 'DESC')->first();

$address = json_decode($socialLInk->dubai_address);

?>


<?php $__env->startSection('title'); ?>
    <title>CONTACT US | GSP - The best place to explore your favourite business.</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom_head'); ?>
    <!-- Custom styles for this template -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
                                            <td scope="row">
                                                <small class="fw-semibold">Address</small>
                                            </td>
                                            <td>:</td>
                                            <td style="text-align: justify;">
                                                <small class="fw-semibold"><?php echo e($address->address); ?></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <small class="fw-semibold">Phone</small>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <small class="fw-semibold"><?php echo e($address->mobile); ?></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                <small class="fw-semibold">Email</small>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <small class="fw-semibold"><?php echo e($address->email); ?></small>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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

                            $embedUrl = mapEmbed($address->map);
                            ?>
                            <iframe class="rounded-3" width="100%" height="400" frameborder="0" scrolling="no"
                                marginheight="0" marginwidth="0" src="<?php echo e($embedUrl); ?>"></iframe>
                        </div>
                    </div>

                    <div class="col-12 col-md-5 contact">
                        <h5 class="text-center" style="margin-top: 10px;">Get In Touch</h5>
                        <hr style="margin-top: 5px; border-width: 2px" />

                        <form action="<?php echo e(route('add.get.in.touch')); ?>" method="post" class="px-3">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">
                                    <small>Your Name</small>
                                </label>
                                <input type="text" name="name" class="form-control" id="name"
                                    aria-describedby="nameHelp" value="<?php echo e(old('name')); ?>">
                                <div id="nameHelp" class="form-text d-none">We'll never share your email with anyone
                                    else.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">
                                    <small>Your Email</small>
                                </label>
                                <input type="email" name="email" class="form-control" id="email"
                                    aria-describedby="emailHelp" value="<?php echo e(old('email')); ?>">
                                <div id="emailHelp" class="form-text d-none">We'll never share your email with anyone
                                    else.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label fw-semibold">
                                    <small>Your Phone</small>
                                </label>
                                <input type="text" name="phone" class="form-control" id="phone"
                                    aria-describedby="phoneHelp" value="<?php echo e(old('phone')); ?>">
                                <div id="phoneHelp" class="form-text d-none">We'll never share your email with anyone
                                    else.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="city" class="form-label fw-semibold">
                                    <small>Your City</small>
                                </label>
                                <input type="text" name="city" class="form-control" id="city"
                                    aria-describedby="cityHelp" value="<?php echo e(old('city')); ?>">
                                <div id="cityHelp" class="form-text d-none">We'll never share your email with anyone
                                    else.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="replyTime" class="form-label fw-semibold">
                                    <small>Prefered Replay Time</small>
                                </label>
                                <input type="datetime-local" name="replay_time" class="form-control" id="replyTime"
                                    aria-describedby="replyTimeHelp" value="<?php echo e(old('replay_time')); ?>">
                                <div id="replyTimeHelp" class="form-text d-none">We'll never share your email with
                                    anyone
                                    else.</div>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label fw-semibold">
                                    <small>Your Message</small>
                                </label>
                                <textarea class="form-control" name="message" rows="6" id="message">
                            <?php echo e(old('message')); ?>

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
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\app_gsp\resources\views/contact-us.blade.php ENDPATH**/ ?>