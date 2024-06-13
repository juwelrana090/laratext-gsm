<?php $__env->startSection('title'); ?>
    <title>Product details | GSP - The best place to explore your favourite business.</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom_head'); ?>
    <!-- Custom styles for this template -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
                        <a href="<?php echo e(route('home')); ?>/product" class="text-decoration-none">
                            <small class="fw-semibold text-muted">Product</small>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <small class="fw-semibold"> <?php echo e($car->title); ?></small>
                    </li>
                </ol>
            </nav>

            <div class="d-flex flex-column flex-md-row flex-row justify-content-between">
                <h2 style="color: var(--dark_blue);"> <?php echo e($car->title); ?></h2>
                <h4 style="color: var(--deep-orrange);">AED <?php echo e($car->original_price); ?></h4>
            </div>

            <i class="bi bi-calendar3" style="color: var(--sky-blue);">
                <small class="fw-semibold text-muted"><?php echo e($car->created_at->diffForHumans()); ?></small>
            </i>

            <div class="row">
                <div class="col-12 col-md-8 col-lg-9">
                    <div id="carouselBusinessList_1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner rounded overflow-hidden z-1 mt-4">
                            <?php $__currentLoopData = $car_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car_image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="carousel-item active p-3">
                                    <img src="<?php echo e(thumbnail($car_image->image)); ?>" class="img-fluid d-block w-100 rounded"
                                        alt="<?php echo e($car->title); ?>" title=" <?php echo e($car->title); ?>" style="height: 300px;">
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

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


                    <table class="table mt-4">
                        <tbody>
                            <tr class="border-top">
                                <td scope="row" style="width: 160px;">
                                    <small class="fw-semibold">Category</small>
                                </td>
                                <td style="width: 15px;">:</td>
                                <td>
                                    <small class="fw-semibold">4 doors</small>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <small class="fw-semibold">Sub Category</small>
                                </td>
                                <td>:</td>
                                <td style="text-align: justify;">
                                    <small class="fw-semibold">Good Condition</small>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <small class="fw-semibold">Type</small>
                                </td>
                                <td>:</td>
                                <td>
                                    <small class="fw-semibold">Good Condition</small>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <small class="fw-semibold">Brand</small>
                                </td>
                                <td>:</td>
                                <td>
                                    <small class="fw-semibold">Automatic</small>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <small class="fw-semibold">Condition</small>
                                </td>
                                <td>:</td>
                                <td>
                                    <small class="fw-semibold">SEDAN</small>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <small class="fw-semibold">Part No</small>
                                </td>
                                <td>:</td>
                                <td>
                                    <small class="fw-semibold">4</small>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <small class="fw-semibold">Application</small>
                                </td>
                                <td>:</td>
                                <td>
                                    <small class="fw-semibold">GCC Specs</small>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <small class="fw-semibold">Uses</small>
                                </td>
                                <td>:</td>
                                <td>
                                    <small class="fw-semibold">Airbags front and side , ABS ,</small>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <small class="fw-semibold">Product Note</small>
                                </td>
                                <td>:</td>
                                <td>
                                    <small class="fw-semibold">Dealer</small>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <small class="fw-semibold">Delivery Note</small>
                                </td>
                                <td>:</td>
                                <td>
                                    <small class="fw-semibold">Dealer</small>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <small class="fw-semibold">Made</small>
                                </td>
                                <td>:</td>
                                <td>
                                    <small class="fw-semibold">Dealer</small>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <small class="fw-semibold">Payment Options</small>
                                </td>
                                <td>:</td>
                                <td>
                                    <small class="fw-semibold">Dealer</small>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" colspan="3">
                                    <h4>Description</h4>
                                    <div>
                                        <p>
                                            TOYOTA COROLLA 1.6L 2023
                                            WE HAVE OVER 200 STOCK OF EXCELLENT CARS
                                            1. IF YOU PAY 20% DOWN PAYMENT MONTHLY AED 1147/=
                                            2. ZERO DOWN PAYMENT MONTHLY AED 1434/=
                                            3. 100% BANK LOAN WITHOUT DOWN PAYMENT + (INSURANCE, REGISTRATION, LOAN
                                            PROCESSING & PASSING) MONTHLY AED 1513/=
                                            TOYOTA COROLLA 1.6L 2023
                                            Airbags, Original Paint, Accident Free, Low Km, Single Owner, Very Good
                                            Condition.
                                            HURRY LIMITED PERIOD OFFER.
                                            FEATURES:
                                            100 % finance available
                                            3.24% starting profit rate
                                            No down payments
                                            First payment after 90 days.
                                            Finance up to 60 month.
                                            Insurance service and finance available
                                            REQUIREMENTS FOR PERSONAL:-
                                            Minimum salary AED: 3000/= Only
                                            1. Salary certificate
                                            2. Passport and Visa Copy
                                            3. Emirates ID copy
                                            4. Driving License Copy
                                            5. Last Three month bank statement.
                                            MANY THINGS WE CAN HELP YOU AS YOUR REQUIREMENTS:
                                            Window Tinting
                                            Parking sensors
                                            Reg. service and insurance service
                                            AAA road side assistance
                                            NOTE: If u are a serious buyer don’t hesitate to call us or come and see the
                                            car.
                                            Friday Open From 4pm to 11pm
                                            PLEASE CALL:
                                            A.K AZAD:0505781258
                                            MR SHANKAR:0509415863
                                            MR SHANAWAZ:0509415936
                                            MR PARVEEZ:0509415625
                                            EMAIL: MOONCARCARE(AT)HOTMAIL(.)COM
                                            FACEBOOK PAGE:
                                            EMAIL: MOONCARCARE(AT)HOTMAIL(.)COM
                                            FACEBOOK PAGE:
                                            AUTO AGENT DETAILS:
                                            NAME: MOON CAR USED AUTOMOBILE TRADING
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <h4 class="mb-3">Location</h4>
                    <div class="mt-2">
                        <iframe class="rounded-3" width="100%" height="400" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0" id="gmap_canvas"
                            src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20New%20Haven+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                        <a href="https://www.embedmap.net/">google maps widget</a>
                        <script type="text/javascript"
                            src="https://embedmaps.com/google-maps-authorization/script.js?id=aeba0eb2a2d1830cfe370c5ed5bd90dfce1c73be">
                        </script>
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-3 mt-4">
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
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\app_gsp\resources\views/product/details.blade.php ENDPATH**/ ?>