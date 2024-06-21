<?php $__env->startSection('title'); ?>
    <title>Home | GSP - The best place to explore your favourite business.</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom_head'); ?>
    <!-- Custom styles for this template -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main>
        <div class="container-fluid container-lg bg-img mt-3 mt-md-5 rounded banner">
            <div class="d-flex flex-column justify-content-center align-items-center h-100">
                <h3 class="mb-3 mb-md-5 text-center banner-title">The best place to explore your favourite business.</h3>

                <div class="trans-bg p-4 rounded" style="width: 60%">
                    <form>
                        <div class="row">
                            <div class="col-3 offset-0 offset-md-1 px-0">
                                <select class="form-select" aria-label="Country Search">
                                    <option value="1">UAE</option>
                                    <option value="2">USA</option>
                                    <option value="3">UK</option>
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
            <div class="card category-card border-0">
                <div class="card-body p-0 mb-3">
                    <!-- <img src="<?php echo e(asset('images/maintenance.png')); ?>" alt="" title="" style="width: 50px; height: 50px" /> -->
                    <!-- <span class="fw-semibold ms-2" style="font-size: 1.2rem">Business Listing</span> -->
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-semibold py-2 px-3 rounded-3" style="font-size: 1.2rem" ;>Business Listing</span>
                        <button type="button" class="btn border-0 fw-semibold" style="font-size: 1.2rem";>View All</button>
                    </div>
                </div>
            </div>

            <div class="row row-cols-2 row-cols-md-4 row-cols-md-6 g-3">
                <?php $__currentLoopData = $business_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col">
                        <div class="card category-list-card border- py-2" style="width: 100%">
                            <img class="card-img-top d-block m-auto" src="<?php echo e(asset($item->category_image)); ?>"
                                alt="<?php echo e($item->category_name); ?>" title="<?php echo e($item->category_name); ?>"
                                style="width: 3rem; height: 3rem" />
                            <div class="card-body text-truncate py-2">
                                <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">
                                    <?php echo e($item->category_name); ?></h6>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>


        <div class="container-fluid container-lg mt-5 mb-2">
            <!-- <div class="card category-card border-0">
                            <div class="card-body py-2">
                              <img src="<?php echo e(asset('images/maintenance.png')); ?>" alt="" title="" style="width: 50px; height: 50px" />
                              <span class="fw-semibold ms-2" style="font-size: 1.2rem">Experts</span>
                            </div>
                          </div> -->

            <div class="card category-card border-0">
                <div class="card-body p-0 mb-3">
                    <!-- <img src="<?php echo e(asset('images/maintenance.png')); ?>" alt="" title="" style="width: 50px; height: 50px" /> -->
                    <!-- <span class="fw-semibold ms-2" style="font-size: 1.2rem">Business Listing</span> -->
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-semibold py-2 px-3 rounded-3" style="font-size: 1.2rem" ;>Expert Listing</span>
                        <button type="button" class="btn border-0 fw-semibold" style="font-size: 1.2rem";>View
                            All</button>
                    </div>
                </div>
            </div>

            <div class="row row-cols-2 row-cols-md-4 row-cols-md-6 g-3">
                <?php $__currentLoopData = $experts_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col">
                        <div class="card category-list-card border- py-2" style="width: 100%">
                            <img class="card-img-top d-block m-auto" src="<?php echo e(asset($item->category_image)); ?>" alt="<?php echo e($item->category_name); ?>""
                                title="<?php echo e($item->category_name); ?>" style="width: 3rem; height: 3rem" />
                            <div class="card-body text-truncate py-2">
                                <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem"><?php echo e($item->category_name); ?>"</h6>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>


        <div class="container-fluid container-lg mt-5 mb-3">
            <!-- <div class="card category-card border-0">
                            <div class="card-body py-2">
                              <img src="<?php echo e(asset('images/maintenance.png')); ?>" alt="" title="" style="width: 50px; height: 50px" />
                              <span class="fw-semibold ms-2" style="font-size: 1.2rem">Products</span>
                            </div>
                          </div> -->

            <div class="card category-card border-0">
                <div class="card-body p-0 mb-3">
                    <!-- <img src="<?php echo e(asset('images/maintenance.png')); ?>" alt="" title="" style="width: 50px; height: 50px" /> -->
                    <!-- <span class="fw-semibold ms-2" style="font-size: 1.2rem">Business Listing</span> -->
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-semibold py-2 px-3 rounded-3" style="font-size: 1.2rem" ;>Product Listing</span>
                        <button type="button" class="btn border-0 fw-semibold" style="font-size: 1.2rem";>View
                            All</button>
                    </div>
                </div>
            </div>

            <div class="row row-cols-2 row-cols-md-4 row-cols-md-6 g-3">
                <?php $__currentLoopData = $car_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="<?php echo e(asset($item->image)); ?>" alt="<?php echo e($item->name); ?>"
                            title="<?php echo e($item->name); ?>" style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem"><?php echo e($item->name); ?></h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <div class="container-fluid container-lg mt-5 mb-2">
            <!-- <div class="card category-card border-0">
                            <div class="card-body py-2">
                              <img src="<?php echo e(asset('images/maintenance.png')); ?>" alt="" title="" style="width: 50px; height: 50px" />
                              <span class="fw-semibold ms-2" style="font-size: 1.2rem">Brands</span>
                            </div>
                          </div> -->

            <div class="card category-card border-0">
                <div class="card-body p-0 mb-3">
                    <!-- <img src="<?php echo e(asset('images/maintenance.png')); ?>" alt="" title="" style="width: 50px; height: 50px" /> -->
                    <!-- <span class="fw-semibold ms-2" style="font-size: 1.2rem">Business Listing</span> -->
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-semibold py-2 px-3 rounded-3" style="font-size: 1.2rem" ;>Brand Listing</span>
                        <button type="button" class="btn border-0 fw-semibold" style="font-size: 1.2rem";>View
                            All</button>
                    </div>
                </div>
            </div>

            <div class="row row-cols-2 row-cols-md-4 row-cols-md-6 g-3">
                <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="<?php echo e(asset($item->image)); ?>" alt="<?php echo e($item->name); ?>"
                            title="<?php echo e($item->name); ?>" style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem"><?php echo e($item->name); ?></h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                <select class="form-select bg-light" aria-label="Default select example" style="width: 220px">
                    <option selected>Anually</option>
                    <option value="1">Monthly</option>
                </select>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
                <div class="col">
                    <div class="position-relative h-100">
                        <div class="ribbon position-absolute">
                            <span class="text-uppercase position-absolute z-1">STANDARD</span>
                        </div>
                        <div class="card border-0 h-100">
                            <div class="card-header text-center text-white">
                                <i class="bi bi-star-fill fs-1 feature-icon text-white"></i>
                                <div class="d-flex justify-content-center align-items-end">
                                    <span class="fs-3">$10.75</span>
                                    <span class="fs-5 mb-1" style="font-size: small">/month</span>
                                </div>
                                <h6 class="text-decoration-line-through text-white">$10.75/month</h6>
                                <span class="text-uppercase text-white" style="font-size: small">Minimum 6 months
                                    contract</span>
                            </div>
                            <div class="card-body px-0 pb-0">
                                <div class="table-responsive">
                                    <table class="table align-middle table-sm mb-0">
                                        <tbody class="fw-semibold">
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-check-lg fs-5 text-success"></i></td>
                                                <td>Dedicated client dashboard</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-check-lg fs-5 text-success"></i></td>
                                                <td>10 Keyword Research</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-check-lg fs-5 text-success"></i></td>
                                                <td>Dedicated client dashboard</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-check-lg fs-5 text-success"></i></td>
                                                <td>2 contextual and editorial guest posts</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-check-lg fs-5 text-success"></i></td>
                                                <td>Dedicated client dashboard</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-x fs-5 text-danger"></i></td>
                                                <td>Dedicated client dashboard</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-x fs-5 text-danger"></i></td>
                                                <td>10 Keyword Research</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-x fs-5 text-danger"></i></td>
                                                <td>Dedicated client dashboard</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-x fs-5 text-danger"></i></td>
                                                <td>2 contextual and editorial guest posts</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-x fs-5 text-danger"></i></td>
                                                <td>Dedicated client dashboard</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a class="btn fw-semibold fs-6 d-block rounded-5 text-white order-btn text-center"
                                    href="#" role="button"><span
                                        class="position-relative d-inline-block">Subscribe Standard</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="position-relative h-100 price-card">
                        <div class="ribbon position-absolute">
                            <span class="text-uppercase position-absolute z-1">PROFESSIONAL</span>
                        </div>
                        <div class="card border-0 h-100">
                            <div class="card-header text-center text-white">
                                <i class="bi bi-stars fs-1 feature-icon text-white"></i>
                                <div class="d-flex justify-content-center align-items-end">
                                    <span class="fs-3">$10.75</span>
                                    <span class="fs-5 mb-1" style="font-size: small">/month</span>
                                </div>
                                <h6 class="text-decoration-line-through text-white">$10.75/month</h6>
                                <span class="text-uppercase text-white" style="font-size: small">Minimum 6 months
                                    contract</span>
                            </div>
                            <div class="card-body px-0 pb-0">
                                <div class="table-responsive">
                                    <table class="table align-middle table-sm mb-0">
                                        <tbody class="fw-semibold">
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-check-lg fs-5 text-success"></i></td>
                                                <td>Dedicated client dashboard</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-check-lg fs-5 text-success"></i></td>
                                                <td>10 Keyword Research</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-check-lg fs-5 text-success"></i></td>
                                                <td>Dedicated client dashboard</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-check-lg fs-5 text-success"></i></td>
                                                <td>2 contextual and editorial guest posts</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-check-lg fs-5 text-success"></i></td>
                                                <td>Dedicated client dashboard</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-x fs-5 text-danger"></i></td>
                                                <td>Dedicated client dashboard</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-x fs-5 text-danger"></i></td>
                                                <td>10 Keyword Research</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-x fs-5 text-danger"></i></td>
                                                <td>Dedicated client dashboard</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-x fs-5 text-danger"></i></td>
                                                <td>2 contextual and editorial guest posts</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-x fs-5 text-danger"></i></td>
                                                <td>Dedicated client dashboard</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a class="btn fw-semibold fs-6 d-block rounded-5 text-white order-btn text-center"
                                    href="#" role="button"><span
                                        class="position-relative d-inline-block">Subscribe Professional</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="position-relative h-100 price-card">
                        <div class="ribbon position-absolute">
                            <span class="text-uppercase position-absolute z-1">Recommented</span>
                        </div>
                        <div class="card border-0 h-100">
                            <div class="card-header text-center text-white">
                                <i class="bi bi-check2-circle fs-1 feature-icon text-white"></i>
                                <div class="d-flex justify-content-center align-items-end">
                                    <span class="fs-3">$10.75</span>
                                    <span class="fs-5 mb-1" style="font-size: small">/month</span>
                                </div>
                                <h6 class="text-decoration-line-through text-white">$10.75/month</h6>
                                <span class="text-uppercase text-white" style="font-size: small">Minimum 6 months
                                    contract</span>
                            </div>
                            <div class="card-body px-0 pb-0">
                                <div class="table-responsive">
                                    <table class="table align-middle table-sm mb-0">
                                        <tbody class="fw-semibold">
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-check-lg fs-5 text-success"></i></td>
                                                <td>Dedicated client dashboard</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-check-lg fs-5 text-success"></i></td>
                                                <td>10 Keyword Research</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-check-lg fs-5 text-success"></i></td>
                                                <td>Dedicated client dashboard</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-check-lg fs-5 text-success"></i></td>
                                                <td>2 contextual and editorial guest posts</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-check-lg fs-5 text-success"></i></td>
                                                <td>Dedicated client dashboard</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-x fs-5 text-danger"></i></td>
                                                <td>Dedicated client dashboard</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-x fs-5 text-danger"></i></td>
                                                <td>10 Keyword Research</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-x fs-5 text-danger"></i></td>
                                                <td>Dedicated client dashboard</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-x fs-5 text-danger"></i></td>
                                                <td>2 contextual and editorial guest posts</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-x fs-5 text-danger"></i></td>
                                                <td>Dedicated client dashboard</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a class="btn fw-semibold fs-6 d-block rounded-5 text-white order-btn text-center text-truncate"
                                    href="#" role="button"><span
                                        class="position-relative d-inline-block">Subscribe Recommended</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="position-relative h-100 price-card">
                        <div class="ribbon position-absolute">
                            <span class="text-uppercase position-absolute z-1">PREMIUM</span>
                        </div>
                        <div class="card border-0 h-100">
                            <div class="card-header text-center text-white">
                                <i class="bi bi-gem fs-1 feature-icon text-white"></i>
                                <div class="d-flex justify-content-center align-items-end">
                                    <span class="fs-3">$10.75</span>
                                    <span class="fs-5 mb-1" style="font-size: small">/month</span>
                                </div>
                                <h6 class="text-decoration-line-through text-white">$10.75/month</h6>
                                <span class="text-uppercase text-white" style="font-size: small">Minimum 6 months
                                    contract</span>
                            </div>
                            <div class="card-body px-0 pb-0">
                                <div class="table-responsive">
                                    <table class="table align-middle table-sm mb-0">
                                        <tbody class="fw-semibold">
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-check-lg fs-5 text-success"></i></td>
                                                <td>Dedicated client dashboard</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-check-lg fs-5 text-success"></i></td>
                                                <td>10 Keyword Research</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-check-lg fs-5 text-success"></i></td>
                                                <td>Dedicated client dashboard</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-check-lg fs-5 text-success"></i></td>
                                                <td>2 contextual and editorial guest posts</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-check-lg fs-5 text-success"></i></td>
                                                <td>Dedicated client dashboard</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-x fs-5 text-danger"></i></td>
                                                <td>Dedicated client dashboard</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-x fs-5 text-danger"></i></td>
                                                <td>10 Keyword Research</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-x fs-5 text-danger"></i></td>
                                                <td>Dedicated client dashboard</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-x fs-5 text-danger"></i></td>
                                                <td>2 contextual and editorial guest posts</td>
                                            </tr>
                                            <tr class="align-middle" style="font-size: small">
                                                <td><i class="bi bi-x fs-5 text-danger"></i></td>
                                                <td>Dedicated client dashboard</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a class="btn fw-semibold fs-6 d-block rounded-5 text-white order-btn text-center"
                                    href="#" role="button"><span
                                        class="position-relative d-inline-block">Subscribe Premium</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\app_gsp\resources\views/home.blade.php ENDPATH**/ ?>