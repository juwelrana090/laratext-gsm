<?php $__env->startSection('title'); ?>
    <title>Business List| GSP - The best place to explore your favourite business.</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom_head'); ?>
    <!-- Custom styles for this template -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main>

        <div class="container-fluid container-lg business-list my-5">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <!-- <form action="" method="get" enctype="multipart/form-data" class="p-3 rounded-3 bg-white">
                  <div class="accordion" id="accordionFilter">

                    <div class="accordion-item rounded-5 mb-3">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStatus" aria-expanded="false" aria-controls="collapseStatus" style="padding: 12px 15px;">
                          <small class="fw-semibold">Status</small>
                        </button>
                      </h2>
                      <div id="collapseStatus" class="accordion-collapse collapse" data-bs-parent="#accordionFilter">
                        <div class="accordion-body">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="showAll" checked>
                            <label class="form-check-label" for="showAll">
                              <small class="fw-semibold">Show All</small>
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="forSale">
                            <label class="form-check-label" for="forSale">
                              <small class="fw-semibold">For Sale</small>
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="forRent">
                            <label class="form-check-label" for="forRent">
                              <small class="fw-semibold">For Rent</small>
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="offPlan">
                            <label class="form-check-label" for="offPlan">
                              <small class="fw-semibold">Off Plan</small>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item rounded-5 mb-3">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseType" aria-expanded="false" aria-controls="collapseType" style="padding: 12px 15px;">
                          <small class="fw-semibold">Type</small>
                        </button>
                      </h2>
                      <div id="collapseType" class="accordion-collapse collapse" data-bs-parent="#accordionFilter">
                        <div class="accordion-body">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="showAll" checked>
                            <label class="form-check-label" for="showAll">
                              <small class="fw-semibold">Show All</small>
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="apartment">
                            <label class="form-check-label" for="apartment">
                              <small class="fw-semibold">Apartment</small>
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="loft">
                            <label class="form-check-label" for="loft">
                              <small class="fw-semibold">Loft</small>
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="studio">
                            <label class="form-check-label" for="studio">
                              <small class="fw-semibold">Studio</small>
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="townhouse">
                            <label class="form-check-label" for="townhouse">
                              <small class="fw-semibold">Townhouse</small>
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="villa">
                            <label class="form-check-label" for="villa">
                              <small class="fw-semibold">Villa</small>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item rounded-5 mb-3">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLocation" aria-expanded="false" aria-controls="collapseLocation" style="padding: 12px 15px;">
                          <small class="fw-semibold">Location</small>
                        </button>
                      </h2>
                      <div id="collapseLocation" class="accordion-collapse collapse" data-bs-parent="#accordionFilter">
                        <div class="accordion-body">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="location" id="showAll" checked>
                            <label class="form-check-label" for="showAll">
                              <small class="fw-semibold">Show All</small>
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="location" id="australia">
                            <label class="form-check-label" for="australia">
                              <small class="fw-semibold">Australia</small>
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="location" id="france">
                            <label class="form-check-label" for="france">
                              <small class="fw-semibold">France</small>
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="location" id="germany">
                            <label class="form-check-label" for="germany">
                              <small class="fw-semibold">Germany</small>
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="location" id="usa">
                            <label class="form-check-label" for="usa">
                              <small class="fw-semibold">USA</small>
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="location" id="uk">
                            <label class="form-check-label" for="uk">
                              <small class="fw-semibold">UK</small>
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="canada">
                            <label class="form-check-label" for="canada">
                              <small class="fw-semibold">Canada</small>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <button type="submit" class="btn submit-btn border-0 fw-semibold rounded-5 w-100">
                    <i class="bi bi-send"></i>
                    <small>Search</small>
                  </button>
                </form> -->

                    <form action="" method="get" enctype="multipart/form-data"
                        class="p-3 rounded-3 bg-white mt-3">
                        <div class="input-group rounded-5">
                            <input type="text" class="form-control rounded-start-5 border-end-0"
                                placeholder="Search..." aria-label="Search" aria-describedby="searchAddon">
                            <span class="input-group-text rounded-end-5 border-start-0 bg-white" id="searchAddon">
                                <i class="bi bi-search"></i>
                            </span>
                        </div>
                    </form>

                    <button class="btn btn-primary d-md-none" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#filtersOffcanvas" aria-controls="filtersOffcanvas">Open Filters</button>

                    <div class="offcanvas offcanvas-start" tabindex="-1" id="filtersOffcanvas"
                        aria-labelledby="filtersOffcanvasLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="filtersOffcanvasLabel">Filters</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <form action="" method="get" enctype="multipart/form-data"
                                class="p-3 rounded-3 bg-white mt-3">
                                <!-- Your form content here -->
                            </form>
                        </div>
                    </div>

                    <!--<form action="" method="get" enctype="multipart/form-data" class="p-3 rounded-3 bg-white mt-3">-->
                    <!--  <h5>Furnishing</h5>-->
                    <!--  <div class="form-check">-->
                    <!--    <input class="form-check-input" type="checkbox" name="furnishing" id="furnishingShowAll">-->
                    <!--    <label class="form-check-label" for="furnishingShowAll">-->
                    <!--      <small class="fw-semibold" style="cursor: pointer;">Show All</small>-->
                    <!--    </label>-->
                    <!--  </div>-->

                    <!--  <div class="form-check">-->
                    <!--    <input class="form-check-input" type="checkbox" name="furnishing" id="furnished">-->
                    <!--    <label class="form-check-label" for="furnished">-->
                    <!--      <small class="fw-semibold" style="cursor: pointer;">Furnished</small>-->
                    <!--    </label>-->
                    <!--  </div>-->
                    <!--  <div class="form-check">-->
                    <!--    <input class="form-check-input" type="checkbox" name="furnishing" id="partly">-->
                    <!--    <label class="form-check-label" for="partly">-->
                    <!--      <small class="fw-semibold" style="cursor: pointer;">Partly</small>-->
                    <!--    </label>-->
                    <!--  </div>-->

                    <!--  <div class="form-check">-->
                    <!--    <input class="form-check-input" type="checkbox" name="furnishing" id="unfurnished">-->
                    <!--    <label class="form-check-label" for="unfurnished">-->
                    <!--      <small class="fw-semibold" style="cursor: pointer;">Unfurnished</small>-->
                    <!--    </label>-->
                    <!--  </div>-->


                    <!--  <h5 class="mt-3">Bedrooms</h5>-->
                    <!--  <div class="accordion" id="accordionFilter">-->
                    <!--    <div class="accordion-item rounded-5 mb-3">-->
                    <!--      <h2 class="accordion-header">-->
                    <!--        <button class="accordion-button collapsed rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStatus" aria-expanded="false" aria-controls="collapseStatus" style="padding: 12px 15px;">-->
                    <!--          <small class="fw-semibold">Status</small>-->
                    <!--        </button>-->
                    <!--      </h2>-->
                    <!--      <div id="collapseStatus" class="accordion-collapse collapse" data-bs-parent="#accordionFilter">-->
                    <!--        <div class="accordion-body">-->
                    <!--          <div class="form-check">-->
                    <!--            <input class="form-check-input" type="radio" name="status" id="showAll" checked>-->
                    <!--            <label class="form-check-label" for="showAll">-->
                    <!--              <small class="fw-semibold">Show All</small>-->
                    <!--            </label>-->
                    <!--          </div>-->

                    <!--          <div class="form-check">-->
                    <!--            <input class="form-check-input" type="radio" name="status" id="forSale">-->
                    <!--            <label class="form-check-label" for="forSale">-->
                    <!--              <small class="fw-semibold">For Sale</small>-->
                    <!--            </label>-->
                    <!--          </div>-->

                    <!--          <div class="form-check">-->
                    <!--            <input class="form-check-input" type="radio" name="status" id="forRent">-->
                    <!--            <label class="form-check-label" for="forRent">-->
                    <!--              <small class="fw-semibold">For Rent</small>-->
                    <!--            </label>-->
                    <!--          </div>-->

                    <!--          <div class="form-check">-->
                    <!--            <input class="form-check-input" type="radio" name="status" id="offPlan">-->
                    <!--            <label class="form-check-label" for="offPlan">-->
                    <!--              <small class="fw-semibold">Off Plan</small>-->
                    <!--            </label>-->
                    <!--          </div>-->
                    <!--        </div>-->
                    <!--      </div>-->
                    <!--    </div>-->
                    <!--  </div>-->


                    <!--  <h5 class="mt-3">Bathrooms</h5>-->
                    <!--  <div class="accordion" id="accordionFilter">-->
                    <!--    <div class="accordion-item rounded-5 mb-3">-->
                    <!--      <h2 class="accordion-header">-->
                    <!--        <button class="accordion-button collapsed rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStatus" aria-expanded="false" aria-controls="collapseStatus" style="padding: 12px 15px;">-->
                    <!--          <small class="fw-semibold">Status</small>-->
                    <!--        </button>-->
                    <!--      </h2>-->
                    <!--      <div id="collapseStatus" class="accordion-collapse collapse" data-bs-parent="#accordionFilter">-->
                    <!--        <div class="accordion-body">-->
                    <!--          <div class="form-check">-->
                    <!--            <input class="form-check-input" type="radio" name="status" id="showAll" checked>-->
                    <!--            <label class="form-check-label" for="showAll">-->
                    <!--              <small class="fw-semibold">Show All</small>-->
                    <!--            </label>-->
                    <!--          </div>-->

                    <!--          <div class="form-check">-->
                    <!--            <input class="form-check-input" type="radio" name="status" id="forSale">-->
                    <!--            <label class="form-check-label" for="forSale">-->
                    <!--              <small class="fw-semibold">For Sale</small>-->
                    <!--            </label>-->
                    <!--          </div>-->

                    <!--          <div class="form-check">-->
                    <!--            <input class="form-check-input" type="radio" name="status" id="forRent">-->
                    <!--            <label class="form-check-label" for="forRent">-->
                    <!--              <small class="fw-semibold">For Rent</small>-->
                    <!--            </label>-->
                    <!--          </div>-->

                    <!--          <div class="form-check">-->
                    <!--            <input class="form-check-input" type="radio" name="status" id="offPlan">-->
                    <!--            <label class="form-check-label" for="offPlan">-->
                    <!--              <small class="fw-semibold">Off Plan</small>-->
                    <!--            </label>-->
                    <!--          </div>-->
                    <!--        </div>-->
                    <!--      </div>-->
                    <!--    </div>-->
                    <!--  </div>-->


                    <!--  <h5 class="mt-3">Price</h5>-->
                    <!--  <input type="range" class="form-range" min="0" max="5" step="0.5">-->
                    <!--  <small class="text-muted fw-semibold">Price: $16,093 - $630,000</small>-->



                    <!--  <h5 class="mt-3">Area</h5>-->
                    <!--  <input type="range" class="form-range" min="0" max="5" step="0.5">-->
                    <!--  <small class="text-muted fw-semibold">Area: 550 sqft - 3500 sqft</small>-->


                    <!--  <h5 class="mt-3">Year Built</h5>-->
                    <!--  <div class="accordion" id="accordionFilter">-->
                    <!--    <div class="accordion-item rounded-5 mb-3">-->
                    <!--      <h2 class="accordion-header">-->
                    <!--        <button class="accordion-button collapsed rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStatus" aria-expanded="false" aria-controls="collapseStatus" style="padding: 12px 15px;">-->
                    <!--          <small class="fw-semibold">Status</small>-->
                    <!--        </button>-->
                    <!--      </h2>-->
                    <!--      <div id="collapseStatus" class="accordion-collapse collapse" data-bs-parent="#accordionFilter">-->
                    <!--        <div class="accordion-body">-->
                    <!--          <div class="form-check">-->
                    <!--            <input class="form-check-input" type="radio" name="status" id="showAll" checked>-->
                    <!--            <label class="form-check-label" for="showAll">-->
                    <!--              <small class="fw-semibold">Show All</small>-->
                    <!--            </label>-->
                    <!--          </div>-->

                    <!--          <div class="form-check">-->
                    <!--            <input class="form-check-input" type="radio" name="status" id="forSale">-->
                    <!--            <label class="form-check-label" for="forSale">-->
                    <!--              <small class="fw-semibold">For Sale</small>-->
                    <!--            </label>-->
                    <!--          </div>-->

                    <!--          <div class="form-check">-->
                    <!--            <input class="form-check-input" type="radio" name="status" id="forRent">-->
                    <!--            <label class="form-check-label" for="forRent">-->
                    <!--              <small class="fw-semibold">For Rent</small>-->
                    <!--            </label>-->
                    <!--          </div>-->

                    <!--          <div class="form-check">-->
                    <!--            <input class="form-check-input" type="radio" name="status" id="offPlan">-->
                    <!--            <label class="form-check-label" for="offPlan">-->
                    <!--              <small class="fw-semibold">Off Plan</small>-->
                    <!--            </label>-->
                    <!--          </div>-->
                    <!--        </div>-->
                    <!--      </div>-->
                    <!--    </div>-->
                    <!--  </div>-->



                    <!--  <h5 class="mt-3">Garages</h5>-->
                    <!--  <div class="accordion" id="accordionFilter">-->
                    <!--    <div class="accordion-item rounded-5 mb-3">-->
                    <!--      <h2 class="accordion-header">-->
                    <!--        <button class="accordion-button collapsed rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStatus" aria-expanded="false" aria-controls="collapseStatus" style="padding: 12px 15px;">-->
                    <!--          <small class="fw-semibold">Status</small>-->
                    <!--        </button>-->
                    <!--      </h2>-->
                    <!--      <div id="collapseStatus" class="accordion-collapse collapse" data-bs-parent="#accordionFilter">-->
                    <!--        <div class="accordion-body">-->
                    <!--          <div class="form-check">-->
                    <!--            <input class="form-check-input" type="radio" name="status" id="showAll" checked>-->
                    <!--            <label class="form-check-label" for="showAll">-->
                    <!--              <small class="fw-semibold">Show All</small>-->
                    <!--            </label>-->
                    <!--          </div>-->

                    <!--          <div class="form-check">-->
                    <!--            <input class="form-check-input" type="radio" name="status" id="forSale">-->
                    <!--            <label class="form-check-label" for="forSale">-->
                    <!--              <small class="fw-semibold">For Sale</small>-->
                    <!--            </label>-->
                    <!--          </div>-->

                    <!--          <div class="form-check">-->
                    <!--            <input class="form-check-input" type="radio" name="status" id="forRent">-->
                    <!--            <label class="form-check-label" for="forRent">-->
                    <!--              <small class="fw-semibold">For Rent</small>-->
                    <!--            </label>-->
                    <!--          </div>-->

                    <!--          <div class="form-check">-->
                    <!--            <input class="form-check-input" type="radio" name="status" id="offPlan">-->
                    <!--            <label class="form-check-label" for="offPlan">-->
                    <!--              <small class="fw-semibold">Off Plan</small>-->
                    <!--            </label>-->
                    <!--          </div>-->
                    <!--        </div>-->
                    <!--      </div>-->
                    <!--    </div>-->
                    <!--  </div>-->



                    <!--  <h5>Amenities</h5>-->
                    <!--  <div class="form-check">-->
                    <!--    <input class="form-check-input" type="checkbox" name="furnishing" id="furnishingShowAll">-->
                    <!--    <label class="form-check-label" for="furnishingShowAll">-->
                    <!--      <small class="fw-semibold" style="cursor: pointer;">Show All</small>-->
                    <!--    </label>-->
                    <!--  </div>-->

                    <!--  <div class="form-check">-->
                    <!--    <input class="form-check-input" type="checkbox" name="furnishing" id="furnished">-->
                    <!--    <label class="form-check-label" for="furnished">-->
                    <!--      <small class="fw-semibold" style="cursor: pointer;">Furnished</small>-->
                    <!--    </label>-->
                    <!--  </div>-->
                    <!--  <div class="form-check">-->
                    <!--    <input class="form-check-input" type="checkbox" name="furnishing" id="partly">-->
                    <!--    <label class="form-check-label" for="partly">-->
                    <!--      <small class="fw-semibold" style="cursor: pointer;">Partly</small>-->
                    <!--    </label>-->
                    <!--  </div>-->

                    <!--  <div class="form-check">-->
                    <!--    <input class="form-check-input" type="checkbox" name="furnishing" id="unfurnished">-->
                    <!--    <label class="form-check-label" for="unfurnished">-->
                    <!--      <small class="fw-semibold" style="cursor: pointer;">Unfurnished</small>-->
                    <!--    </label>-->
                    <!--  </div>-->




                    <!--</form>-->

                    <h5 class="mt-4">Featured Businesses</h5>
                    <div class="row row-cols-1 mt-3 g-2">
                        <div class="col">
                            <div class="card feature-list border-0">
                                <div class="row g-0">
                                    <div class="col-4 p-2">
                                        <img src="<?php echo e(asset('images/room_1.jpg')); ?>" class="img-fluid rounded d-block m-auto w-100"
                                            alt="..." title="..." style="height: 65px;">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body p-2">
                                            <h6 class="card-subtitle text-muted"><small>Lorem ipsum dolor sit, amet
                                                    consectetur...</small></h6>
                                            <h6 class="card-title mt-1" style="color: var(--sky-blue);">$2,250 Per Month
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card feature-list border-0">
                                <div class="row g-0">
                                    <div class="col-4 p-2">
                                        <img src="<?php echo e(asset('images/room_2.jpg')); ?>" class="img-fluid rounded d-block m-auto w-100"
                                            alt="..." title="..." style="height: 65px;">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body p-2">
                                            <h6 class="card-subtitle text-muted"><small>Lorem ipsum dolor sit, amet
                                                    consectetur...</small></h6>
                                            <h6 class="card-title mt-1" style="color: var(--sky-blue);">$2,250 Per Month
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card feature-list border-0">
                                <div class="row g-0">
                                    <div class="col-4 p-2">
                                        <img src="<?php echo e(asset('images/room_3.jpg')); ?>" class="img-fluid rounded d-block m-auto w-100"
                                            alt="..." title="..." style="height: 65px;">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body p-2">
                                            <h6 class="card-subtitle text-muted"><small>Lorem ipsum dolor sit, amet
                                                    consectetur...</small></h6>
                                            <h6 class="card-title mt-1" style="color: var(--sky-blue);">$2,250 Per Month
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card feature-list border-0">
                                <div class="row g-0">
                                    <div class="col-4 p-2">
                                        <img src="<?php echo e(asset('images/room_4.jpg')); ?>" class="img-fluid rounded d-block m-auto w-100"
                                            alt="..." title="..." style="height: 65px;">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body p-2">
                                            <h6 class="card-subtitle text-muted"><small>Lorem ipsum dolor sit, amet
                                                    consectetur...</small></h6>
                                            <h6 class="card-title mt-1" style="color: var(--sky-blue);">$2,250 Per Month
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card feature-list border-0">
                                <div class="row g-0">
                                    <div class="col-4 p-2">
                                        <img src="<?php echo e(asset('images/room_5.jpg')); ?>" class="img-fluid rounded d-block m-auto w-100"
                                            alt="..." title="..." style="height: 65px;">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body p-2">
                                            <h6 class="card-subtitle text-muted"><small>Lorem ipsum dolor sit, amet
                                                    consectetur...</small></h6>
                                            <h6 class="card-title mt-1" style="color: var(--sky-blue);">$2,250 Per Month
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card feature-list border-0">
                                <div class="row g-0">
                                    <div class="col-4 p-2">
                                        <img src="<?php echo e(asset('images/room_6.jpg')); ?>" class="img-fluid rounded d-block m-auto w-100"
                                            alt="..." title="..." style="height: 65px;">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body p-2">
                                            <h6 class="card-subtitle text-muted"><small>Lorem ipsum dolor sit, amet
                                                    consectetur...</small></h6>
                                            <h6 class="card-title mt-1" style="color: var(--sky-blue);">$2,250 Per Month
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="row row-cols-1 g-4">
                        <div class="col">
                            <div class="card border-0">
                                <div class="row g-0">
                                    <div class="col-lg-6 p-2">
                                        <div id="carouselBusinessList_1"
                                            class="carousel slide position-relative hover-play">
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
                                                    <img src="<?php echo e(asset('images/room_1.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_2.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_3.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_4.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_5.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_6.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_7.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_8.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
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

                                    <div class="col-lg-6">
                                        <div class="card-body">
                                            <h5 class="card-title mt-1 mb-2 fw-bolder">
                                                <a href="http://" class="text-decoration-none"
                                                    style="color: #0d293d;">Cozy Studio Residence</a>
                                            </h5>
                                            <h6 class="card-title mt-1 mb-2 fw-bolder" style="color: #12bcff;">$2,760 per
                                                Month</h6>
                                            <p class="card-text text-truncate fw-semibold text-muted">
                                                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
                                                    nulla error neque optio dicta? Odit!</small>
                                            </p>

                                            <ul class="list-group list-group-flush">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-buildings me-1"></i>
                                                        <small>Business Type</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">Studio</small>
                                                </li>

                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-diagram-3-fill me-1"></i>
                                                        <small>Business Category</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">600 sqft</small>
                                                </li>

                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-clock me-1"></i>
                                                        <small>Business Hours</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">5</small>
                                                </li>

                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-person-rolodex me-1"></i>
                                                        <small>Contact Number</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">4</small>
                                                </li>
                                            </ul>

                                            <div class="mt-3">
                                                <a class="btn btn-primary rounded-5 py-1 px-3 message-btn fw-semibold me-lg-2 border-0"
                                                    href="#" role="button">
                                                    <i class="bi bi-geo-alt"></i>
                                                    <small>View Map</small>
                                                </a>

                                                <a class="btn btn-primary rounded-5 py-1 px-3 whatsapp-btn fw-semibold border-0"
                                                    href="#" role="button">
                                                    <i class="bi bi-whatsapp"></i>
                                                    <small>Whatsapp</small>
                                                </a>

                                                <a class="btn rounded-5 float-end py-1 px-3 profile-btn fw-semibold border-0"
                                                    href="./business_details.html" role="button">
                                                    <small>View Business</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <div class="card border-0">
                                <div class="row g-0">
                                    <div class="col-lg-6 p-2">
                                        <div id="carouselBusinessList_2"
                                            class="carousel slide position-relative hover-play">
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
                                                    <img src="<?php echo e(asset('images/room_8.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_2.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_3.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_4.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_5.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_6.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_7.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_8.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
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
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="card-body">
                                            <h5 class="card-title mt-1 mb-2 fw-bolder">
                                                <a href="http://" class="text-decoration-none"
                                                    style="color: #0d293d;">Cozy Studio Residence</a>
                                            </h5>
                                            <h6 class="card-title mt-1 mb-2 fw-bolder" style="color: #12bcff;">$2,760 per
                                                Month</h6>
                                            <p class="card-text text-truncate fw-semibold text-muted">
                                                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
                                                    nulla error neque optio dicta? Odit!</small>
                                            </p>

                                            <ul class="list-group list-group-flush">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-buildings me-1"></i>
                                                        <small>Business Type</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">Studio</small>
                                                </li>

                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-diagram-3-fill me-1"></i>
                                                        <small>Business Category</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">600 sqft</small>
                                                </li>

                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-tools me-1"></i>
                                                        <small>Bedrooms</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">5</small>
                                                </li>

                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-gear me-1"></i>
                                                        <small>Bathrooms</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">4</small>
                                                </li>
                                            </ul>

                                            <div class="mt-3">
                                                <a class="btn btn-primary rounded-5 py-1 px-3 message-btn fw-semibold me-lg-2 border-0"
                                                    href="#" role="button">
                                                    <i class="bi bi-geo-alt"></i>
                                                    <small>View Map</small>
                                                </a>

                                                <a class="btn btn-primary rounded-5 py-1 px-3 whatsapp-btn fw-semibold border-0"
                                                    href="#" role="button">
                                                    <i class="bi bi-whatsapp"></i>
                                                    <small>Whatsapp</small>
                                                </a>

                                                <a class="btn rounded-5 float-end py-1 px-3 profile-btn fw-semibold border-0"
                                                    href="./business_details.html" role="button">
                                                    <small>View Business</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <div class="card border-0">
                                <div class="row g-0">
                                    <div class="col-lg-6 p-2">
                                        <div id="carouselBusinessList" class="carousel slide position-relative">
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
                                                    <img src="<?php echo e(asset('images/room_7.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_2.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_3.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_4.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_5.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_6.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_7.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_8.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                            </div>

                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselBusinessList" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>

                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselBusinessList" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="card-body">
                                            <h5 class="card-title mt-1 mb-2 fw-bolder">
                                                <a href="http://" class="text-decoration-none"
                                                    style="color: #0d293d;">Cozy Studio Residence</a>
                                            </h5>
                                            <h6 class="card-title mt-1 mb-2 fw-bolder" style="color: #12bcff;">$2,760 per
                                                Month</h6>
                                            <p class="card-text text-truncate fw-semibold text-muted">
                                                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
                                                    nulla error neque optio dicta? Odit!</small>
                                            </p>

                                            <ul class="list-group list-group-flush">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-buildings me-1"></i>
                                                        <small>Business Type</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">Studio</small>
                                                </li>

                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-diagram-3-fill me-1"></i>
                                                        <small>Business Category</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">600 sqft</small>
                                                </li>

                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-tools me-1"></i>
                                                        <small>Bedrooms</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">5</small>
                                                </li>

                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-gear me-1"></i>
                                                        <small>Bathrooms</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">4</small>
                                                </li>
                                            </ul>

                                            <div class="mt-3">
                                                <a class="btn btn-primary rounded-5 py-1 px-3 message-btn fw-semibold me-lg-2 border-0"
                                                    href="#" role="button">
                                                    <i class="bi bi-geo-alt"></i>
                                                    <small>View Map</small>
                                                </a>

                                                <a class="btn btn-primary rounded-5 py-1 px-3 whatsapp-btn fw-semibold border-0"
                                                    href="#" role="button">
                                                    <i class="bi bi-whatsapp"></i>
                                                    <small>Whatsapp</small>
                                                </a>

                                                <a class="btn rounded-5 float-end py-1 px-3 profile-btn fw-semibold border-0"
                                                    href="./business_details.html" role="button">
                                                    <small>View Business</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col">
                            <div class="card border-0">
                                <div class="row g-0">
                                    <div class="col-lg-6 p-2">
                                        <div id="carouselBusinessList" class="carousel slide position-relative">
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
                                                    <img src="<?php echo e(asset('images/room_6.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_2.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_3.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_4.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_5.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_6.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_7.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_8.jpg')); ?>" class="img-fluid d-block w-100 rounded"
                                                        alt="..." title="..." style="height: 330px;">
                                                </div>
                                            </div>

                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselBusinessList" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>

                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselBusinessList" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="card-body">
                                            <h5 class="card-title mt-1 mb-2 fw-bolder">
                                                <a href="http://" class="text-decoration-none"
                                                    style="color: #0d293d;">Cozy Studio Residence</a>
                                            </h5>
                                            <h6 class="card-title mt-1 mb-2 fw-bolder" style="color: #12bcff;">$2,760
                                                per Month</h6>
                                            <p class="card-text text-truncate fw-semibold text-muted">
                                                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
                                                    nulla error neque optio dicta? Odit!</small>
                                            </p>

                                            <ul class="list-group list-group-flush">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-buildings me-1"></i>
                                                        <small>Business Type</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">Studio</small>
                                                </li>

                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-diagram-3-fill me-1"></i>
                                                        <small>Business Category</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">600 sqft</small>
                                                </li>

                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-tools me-1"></i>
                                                        <small>Bedrooms</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">5</small>
                                                </li>

                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-gear me-1"></i>
                                                        <small>Bathrooms</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">4</small>
                                                </li>
                                            </ul>

                                            <div class="mt-3">
                                                <a class="btn btn-primary rounded-5 py-1 px-3 message-btn fw-semibold me-lg-2 border-0"
                                                    href="#" role="button">
                                                    <i class="bi bi-geo-alt"></i>
                                                    <small>View Map</small>
                                                </a>

                                                <a class="btn btn-primary rounded-5 py-1 px-3 whatsapp-btn fw-semibold border-0"
                                                    href="#" role="button">
                                                    <i class="bi bi-whatsapp"></i>
                                                    <small>Whatsapp</small>
                                                </a>

                                                <a class="btn rounded-5 float-end py-1 px-3 profile-btn fw-semibold border-0"
                                                    href="./business_details.html" role="button">
                                                    <small>View Business</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col">
                            <div class="card border-0">
                                <div class="row g-0">
                                    <div class="col-lg-6 p-2">
                                        <div id="carouselBusinessList" class="carousel slide position-relative">
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
                                                    <img src="<?php echo e(asset('images/room_5.jpg')); ?>"
                                                        class="img-fluid d-block w-100 rounded" alt="..."
                                                        title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_2.jpg')); ?>"
                                                        class="img-fluid d-block w-100 rounded" alt="..."
                                                        title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_3.jpg')); ?>"
                                                        class="img-fluid d-block w-100 rounded" alt="..."
                                                        title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_4.jpg')); ?>"
                                                        class="img-fluid d-block w-100 rounded" alt="..."
                                                        title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_5.jpg')); ?>"
                                                        class="img-fluid d-block w-100 rounded" alt="..."
                                                        title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_6.jpg')); ?>"
                                                        class="img-fluid d-block w-100 rounded" alt="..."
                                                        title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_7.jpg')); ?>"
                                                        class="img-fluid d-block w-100 rounded" alt="..."
                                                        title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_8.jpg')); ?>"
                                                        class="img-fluid d-block w-100 rounded" alt="..."
                                                        title="..." style="height: 330px;">
                                                </div>
                                            </div>

                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselBusinessList" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>

                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselBusinessList" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="card-body">
                                            <h5 class="card-title mt-1 mb-2 fw-bolder">
                                                <a href="http://" class="text-decoration-none"
                                                    style="color: #0d293d;">Cozy Studio Residence</a>
                                            </h5>
                                            <h6 class="card-title mt-1 mb-2 fw-bolder" style="color: #12bcff;">$2,760
                                                per Month</h6>
                                            <p class="card-text text-truncate fw-semibold text-muted">
                                                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
                                                    nulla error neque optio dicta? Odit!</small>
                                            </p>

                                            <ul class="list-group list-group-flush">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-buildings me-1"></i>
                                                        <small>Business Type</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">Studio</small>
                                                </li>

                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-diagram-3-fill me-1"></i>
                                                        <small>Business Category</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">600 sqft</small>
                                                </li>

                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-tools me-1"></i>
                                                        <small>Bedrooms</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">5</small>
                                                </li>

                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-gear me-1"></i>
                                                        <small>Bathrooms</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">4</small>
                                                </li>
                                            </ul>

                                            <div class="mt-3">
                                                <a class="btn btn-primary rounded-5 py-1 px-3 message-btn fw-semibold me-lg-2 border-0"
                                                    href="#" role="button">
                                                    <i class="bi bi-geo-alt"></i>
                                                    <small>View Map</small>
                                                </a>

                                                <a class="btn btn-primary rounded-5 py-1 px-3 whatsapp-btn fw-semibold border-0"
                                                    href="#" role="button">
                                                    <i class="bi bi-whatsapp"></i>
                                                    <small>Whatsapp</small>
                                                </a>

                                                <a class="btn rounded-5 float-end py-1 px-3 profile-btn fw-semibold border-0"
                                                    href="./business_details.html" role="button">
                                                    <small>View Business</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col">
                            <div class="card border-0">
                                <div class="row g-0">
                                    <div class="col-lg-6 p-2">
                                        <div id="carouselBusinessList" class="carousel slide position-relative">
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
                                                    <img src="<?php echo e(asset('images/room_4.jpg')); ?>"
                                                        class="img-fluid d-block w-100 rounded" alt="..."
                                                        title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_2.jpg')); ?>"
                                                        class="img-fluid d-block w-100 rounded" alt="..."
                                                        title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_3.jpg')); ?>"
                                                        class="img-fluid d-block w-100 rounded" alt="..."
                                                        title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_4.jpg')); ?>"
                                                        class="img-fluid d-block w-100 rounded" alt="..."
                                                        title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_5.jpg')); ?>"
                                                        class="img-fluid d-block w-100 rounded" alt="..."
                                                        title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_6.jpg')); ?>"
                                                        class="img-fluid d-block w-100 rounded" alt="..."
                                                        title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_7.jpg')); ?>"
                                                        class="img-fluid d-block w-100 rounded" alt="..."
                                                        title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_8.jpg')); ?>"
                                                        class="img-fluid d-block w-100 rounded" alt="..."
                                                        title="..." style="height: 330px;">
                                                </div>
                                            </div>

                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselBusinessList" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>

                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselBusinessList" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="card-body">
                                            <h5 class="card-title mt-1 mb-2 fw-bolder">
                                                <a href="http://" class="text-decoration-none"
                                                    style="color: #0d293d;">Cozy Studio Residence</a>
                                            </h5>
                                            <h6 class="card-title mt-1 mb-2 fw-bolder" style="color: #12bcff;">$2,760
                                                per Month</h6>
                                            <p class="card-text text-truncate fw-semibold text-muted">
                                                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
                                                    nulla error neque optio dicta? Odit!</small>
                                            </p>

                                            <ul class="list-group list-group-flush">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-buildings me-1"></i>
                                                        <small>Business Type</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">Studio</small>
                                                </li>

                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-diagram-3-fill me-1"></i>
                                                        <small>Business Category</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">600 sqft</small>
                                                </li>

                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-tools me-1"></i>
                                                        <small>Bedrooms</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">5</small>
                                                </li>

                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-gear me-1"></i>
                                                        <small>Bathrooms</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">4</small>
                                                </li>
                                            </ul>

                                            <div class="mt-3">
                                                <a class="btn btn-primary rounded-5 py-1 px-3 message-btn fw-semibold me-lg-2 border-0"
                                                    href="#" role="button">
                                                    <i class="bi bi-geo-alt"></i>
                                                    <small>View Map</small>
                                                </a>

                                                <a class="btn btn-primary rounded-5 py-1 px-3 whatsapp-btn fw-semibold border-0"
                                                    href="#" role="button">
                                                    <i class="bi bi-whatsapp"></i>
                                                    <small>Whatsapp</small>
                                                </a>

                                                <a class="btn rounded-5 float-end py-1 px-3 profile-btn fw-semibold border-0"
                                                    href="./business_details.html" role="button">
                                                    <small>View Business</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col">
                            <div class="card border-0">
                                <div class="row g-0">
                                    <div class="col-lg-6 p-2">
                                        <div id="carouselBusinessList" class="carousel slide position-relative">
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
                                                    <img src="<?php echo e(asset('images/room_3.jpg')); ?>"
                                                        class="img-fluid d-block w-100 rounded" alt="..."
                                                        title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_2.jpg')); ?>"
                                                        class="img-fluid d-block w-100 rounded" alt="..."
                                                        title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_3.jpg')); ?>"
                                                        class="img-fluid d-block w-100 rounded" alt="..."
                                                        title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_4.jpg')); ?>"
                                                        class="img-fluid d-block w-100 rounded" alt="..."
                                                        title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_5.jpg')); ?>"
                                                        class="img-fluid d-block w-100 rounded" alt="..."
                                                        title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_6.jpg')); ?>"
                                                        class="img-fluid d-block w-100 rounded" alt="..."
                                                        title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_7.jpg')); ?>"
                                                        class="img-fluid d-block w-100 rounded" alt="..."
                                                        title="..." style="height: 330px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo e(asset('images/room_8.jpg')); ?>"
                                                        class="img-fluid d-block w-100 rounded" alt="..."
                                                        title="..." style="height: 330px;">
                                                </div>
                                            </div>

                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselBusinessList" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>

                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselBusinessList" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="card-body">
                                            <h5 class="card-title mt-1 mb-2 fw-bolder">
                                                <a href="http://" class="text-decoration-none"
                                                    style="color: #0d293d;">Cozy Studio Residence</a>
                                            </h5>
                                            <h6 class="card-title mt-1 mb-2 fw-bolder" style="color: #12bcff;">$2,760
                                                per Month</h6>
                                            <p class="card-text text-truncate fw-semibold text-muted">
                                                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
                                                    nulla error neque optio dicta? Odit!</small>
                                            </p>

                                            <ul class="list-group list-group-flush">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-buildings me-1"></i>
                                                        <small>Business Type</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">Studio</small>
                                                </li>

                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-diagram-3-fill me-1"></i>
                                                        <small>Business Category</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">600 sqft</small>
                                                </li>

                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-tools me-1"></i>
                                                        <small>Bedrooms</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">5</small>
                                                </li>

                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div class="fw-semibold">
                                                        <i class="bi bi-gear me-1"></i>
                                                        <small>Bathrooms</small>
                                                    </div>

                                                    <small class="fw-semibold text-muted">4</small>
                                                </li>
                                            </ul>

                                            <div class="mt-3">
                                                <a class="btn btn-primary rounded-5 py-1 px-3 message-btn fw-semibold me-lg-2 border-0"
                                                    href="#" role="button">
                                                    <i class="bi bi-geo-alt"></i>
                                                    <small>View Map</small>
                                                </a>

                                                <a class="btn btn-primary rounded-5 py-1 px-3 whatsapp-btn fw-semibold border-0"
                                                    href="#" role="button">
                                                    <i class="bi bi-whatsapp"></i>
                                                    <small>Whatsapp</small>
                                                </a>

                                                <a class="btn rounded-5 float-end py-1 px-3 profile-btn fw-semibold border-0"
                                                    href="./business_details.html" role="button">
                                                    <small>View Business</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\app_gsp\resources\views\business\index.blade.php ENDPATH**/ ?>