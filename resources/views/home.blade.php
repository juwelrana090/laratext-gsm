<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <style>
        :root {
            --dark_orange: #ee5007;
            --dark_blue: #060047;
            --blue_violet: #6a1fcb;
            --white_smoke: #f5f6f7;
            --deep-orrange: #ff0c0e;
            --sky-blue: #12bcff;
            --jomolhari: font-family: "Jomolhari", serif;
            --adamina: font-family: "Adamina", serif;
            --ledger: font-family: "Ledger", serif;
            --castoro: font-family: 'Castoro', serif;
            --lora: font-family: 'Lora', serif;
        }

        body {
            background-color: var(--white_smoke);
        }

        .biz-btn {
            background-color: var(--deep-orrange);
            color: white !important;
            font-weight: 500;
            transition: all 0.5s ease-in-out;
            /* background: linear-gradient(to right, #ff0c0e, #12bcff); */
            background-color: var(--deep-orrange);
            border: none;
        }

        .biz-btn:hover {
            /* background: linear-gradient(to right, #12bcff, #ff0c0e); */
            background-color: var(--sky-blue);
        }

        header .navbar {
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
            background-color: #f5f6f7;
        }

        header .nav-link {
            text-transform: capitalize;
            font-family: "Castoro", serif;
            font-weight: 400;
            color: black;
        }

        header .nav-link.active,
        header .nav-link:hover {
            color: var(--deep-orrange) !important;
        }




        .bg-img {
            height: 270px;
            background-image: url(./images/duba_bg.png);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .trans-bg {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .banner-title {
            color: var(--dark_blue);
        }

        .banner select {
            border-top-left-radius: 50px !important;
            border-bottom-left-radius: 50px !important;
            border: 1px solid #12bcff;
        }

        .banner input {
            border-top: 1px solid #12bcff;
            border-bottom: 1px solid #12bcff;
        }

        .banner button {
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
            /* border: 1px solid #12bcff; */
            /* background: linear-gradient(to right, #ff0c0e, #12bcff); */
            border: 1px solid var(--deep-orrange);
            background-color: var(--deep-orrange);
        }

        .banner button:hover {
            border: 1px solid var(--sky-blue);
            background-color: var(--sky-blue);
        }


        @media screen and (max-width: 800px) {
            .banner .trans-bg {
                width: 80% !important;
            }
        }

        @media screen and (max-width: 400px) {
            .bg-img {
                height: 200px !important;
            }

            .banner .trans-bg {
                width: 95% !important;
            }
        }


        input[type="text"],
        select.form-select {
            border: 1px solid var(--deep-orrange);
            background-color: var(--white_smoke);
        }

        input[type="text"]:focus,
        select.form-select:focus {
            box-shadow: none;
            border: 1px solid var(--deep-orrange);
        }

        input::placeholder {
            color: rgb(209, 206, 206) !important;
        }

        input:focus::placeholder {
            color: rgb(240, 171, 171) !important;
            transform: translateX(7px);
            transition: all 0.5s ease-in-out;
        }




        /* .category-card {
            box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
            background: linear-gradient(to right, #ff0c0e, #12bcff);
            color: white;
            font-family: "Castoro", serif;
        } */

        .category-card {
            background-color: var(--white_smoke);
        }

        .category-card span {
            box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
            background-color: var(--deep-orrange);
            color: white;
            font-family: "Castoro", serif;
        }

        .category-card button {
            color: var(--deep-orrange);
            font-family: "Castoro", serif;
        }

        .category-card button:hover {
            color: var(--sky-blue);
        }

        .category-list-card {
            border: 1px solid #f8dcdc;
            /* border: none; */
            transition: all 0.5s ease-in-out;
            background-color: #f5f6f7;
            box-shadow: -4px -2px 4px 0px #ffffff, 4px 2px 6px 0px #dfe4ea;
        }

        .category-list-card:hover {
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
            transform: translateX(2px);
        }

        .category-list-card .card-title {
            font-size: small !important;
        }





        .show-plan {
            color: white !important;
            font-weight: 500;
            transition: all 0.5s ease-in-out;
            /* background: linear-gradient(to right, #ff0c0e, #12bcff); */
            background-color: var(--deep-orrange);
            border: none;
            border-radius: 5px;
            padding: 4px 30px;
        }

        .show-plan:hover {
            /* background: linear-gradient(to right, #12bcff, #ff0c0e); */
            background-color: var(--deep-orrange);
        }

        .price-card .card {
            background-color: #f5f6f7;
            box-shadow: -4px -2px 4px 0px #ffffff, 4px 2px 6px 0px #dfe4ea;
            transition: transform .5s ease;
        }

        .price-card .card:hover {
            transform: scale(1.03);
        }

        .price-card .card-header {
            /* background: linear-gradient(to right, #ff0c0e, #12bcff); */
            background-color: var(--sky-blue);
            border-bottom-right-radius: 40px;
        }

        .price-card .row .col:nth-child(1) .feature-icon {
            color: #9b0000;
        }

        .price-card .row .col:nth-child(2) .feature-icon {
            color: #f76e11;
        }

        .price-card .row .col:nth-child(3) .feature-icon {
            color: #3bb210;
        }

        .price-card .row .col:nth-child(4) .feature-icon {
            color: #8a39e1;
        }

        .price-card .ribbon {
            top: -10px;
            left: -10px;
            width: 150px;
            height: 150px;
            overflow: hidden;
        }

        .price-card .ribbon::before,
        .price-card .ribbon::after {
            position: absolute;
            content: "";
            display: block;
            border-top-color: transparent;
            border-left-color: transparent;
        }

        .price-card .row .col:nth-child(1) .ribbon::before,
        .price-card .row .col:nth-child(1) .ribbon::after {
            border: 7px solid #740606;
            border: 7px solid var(--sky-blue);
        }

        .price-card .row .col:nth-child(2) .ribbon::before,
        .price-card .row .col:nth-child(2) .ribbon::after {
            border: 7px solid #873803;
            border: 7px solid var(--sky-blue);
        }

        .price-card .row .col:nth-child(3) .ribbon::before,
        .price-card .row .col:nth-child(3) .ribbon::after {
            border: 7px solid #206407;
            border: 7px solid var(--sky-blue);
        }

        .price-card .row .col:nth-child(4) .ribbon::before,
        .price-card .row .col:nth-child(4) .ribbon::after {
            border: 7px solid #3b0376;
            border: 7px solid var(--sky-blue);
        }

        .price-card .ribbon::before {
            top: 0;
            right: 17px;
        }

        .price-card .ribbon::after {
            bottom: 15px;
            left: -2px;
        }

        .price-card .ribbon span {
            width: 200px;
            padding: 10px 0;
            color: #fff;
            text-align: center;
            top: 30px;
            right: 0;
            transform: rotate(-45deg);
        }

        .price-card .row .col:nth-child(1) .ribbon span,
        .price-card .row .col:nth-child(1) .card-footer {
            /* background-color: #9b0000; */
            /* background: linear-gradient(to right, #ff0c0e, #12bcff); */
            background-color: var(--deep-orrange);
        }

        .price-card .row .col:nth-child(2) .ribbon span,
        .price-card .row .col:nth-child(2) .card-footer {
            /* background-color: #f76e11; */
            /* background-color: var(--sky-blue); */
            background-color: var(--deep-orrange);
        }

        .price-card .row .col:nth-child(3) .ribbon span,
        .price-card .row .col:nth-child(3) .card-footer {
            /* background-color: #3bb210; */
            /* background-color: var(--sky-blue); */
            background-color: var(--deep-orrange);
        }

        .price-card .row .col:nth-child(4) .ribbon span,
        .price-card .row .col:nth-child(4) .card-footer {
            /* background-color: #8a39e1; */
            /* background-color: var(--sky-blue); */
            background-color: var(--deep-orrange);
        }


        .price-card .card-footer {
            /* background: linear-gradient(to right, #ff0c0e, #12bcff); */
            background-color: var(--deep-orrange);
        }


        .price-card .order-btn {
            transition: all 0.5s;
        }

        .price-card .order-btn span {
            transition: 0.5s;
        }

        .price-card .order-btn span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .price-card .order-btn:hover span {
            padding-right: 20px;
        }

        .price-card .order-btn:hover span:after {
            opacity: 1;
            right: 0;
        }














        .footer h4,
        .footer hr,
        .footer a,
        .footer p {
            color: #b9d3f6 !important;
        }

        .footer .col:hover h4,
        .col:hover hr {
            transition: all 0.5s ease-in-out;
            color: red !important;
        }

        .footer a:hover {
            color: #12bcff !important;
        }

        .footer .company_description,
        .footer .copyright,
        .footer .developed-by,
        .footer .policy {
            font-size: 12px;
            text-align: justify;
        }

        .footer a span {
            font-size: small !important;
        }

        .footer a:hover span {
            transition: all 0.5s ease-in-out;
            margin-left: 7px !important;
        }
    </style>
</head>

<body>
    <header style="margin-bottom: 120px;">
        <!-- <div class="container-fluid container py-1 header-top-icon">
            <div class="d-flex justify-content-between align-items-center">
              <img src="./images/logo2.png" class="img-fluid" alt="..." title="..." style="max-height: 50px; width: auto" />
              <a href="http://" class="btn biz-btn">Business Listing</a>
            </div>
          </div> -->

        <nav class="navbar navbar-expand-md py-3 fixed-top">
            <div class="container-fluid container-lg">
                <a class="navbar-brand" href="#">
                    <img src="./images/logo2.png" class="img-fluid" alt="..." title="..."
                        style="max-height: 40px; width: auto" />
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center w-100">
                        <li class="nav-item">
                            <a class="nav-link fw-bold active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="./about-us.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="./business_list.html">Business Listing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="./expert_list.html">Experts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="./product_list.html">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#">Brands</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="./blogs.html">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="./contact-us.html">Contact</a>
                        </li>
                    </ul>
                </div>

                <a href="./listing.html" class="btn biz-btn">
                    <small class="fw-semibold">Add Listing</small>
                </a>
            </div>
        </nav>
    </header>

    <main>
        <div class="container-fluid container-lg bg-img mt-3 mt-md-5 rounded banner">
            <div class="d-flex flex-column justify-content-center align-items-center h-100">
                <h3 class="mb-3 mb-md-5 text-center banner-title">The best place to explore your favourite business.
                </h3>

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
                    <!-- <img src="./images/maintenance.png" alt="" title="" style="width: 50px; height: 50px" /> -->
                    <!-- <span class="fw-semibold ms-2" style="font-size: 1.2rem">Business Listing</span> -->
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-semibold py-2 px-3 rounded-3" style="font-size: 1.2rem" ;>Business
                            Listing</span>
                        <button type="button" class="btn border-0 fw-semibold" style="font-size: 1.2rem";>View
                            All</button>
                    </div>
                </div>
            </div>

            <div class="row row-cols-2 row-cols-md-4 row-cols-md-6 g-3">
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Auto Spare
                                Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Hardware &
                                Tools</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Electronics
                                Part</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Industrial
                                Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Safety &
                                Secuirity</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Construction &
                                Machinary</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Mobile &
                                Computer</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">office
                                Equipment</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Home Appliance
                            </h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid container-lg mt-5 mb-2">
            <!-- <div class="card category-card border-0">
        <div class="card-body py-2">
          <img src="./images/maintenance.png" alt="" title="" style="width: 50px; height: 50px" />
          <span class="fw-semibold ms-2" style="font-size: 1.2rem">Experts</span>
        </div>
      </div> -->

            <div class="card category-card border-0">
                <div class="card-body p-0 mb-3">
                    <!-- <img src="./images/maintenance.png" alt="" title="" style="width: 50px; height: 50px" /> -->
                    <!-- <span class="fw-semibold ms-2" style="font-size: 1.2rem">Business Listing</span> -->
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-semibold py-2 px-3 rounded-3" style="font-size: 1.2rem" ;>Expert
                            Listing</span>
                        <button type="button" class="btn border-0 fw-semibold" style="font-size: 1.2rem";>View
                            All</button>
                    </div>
                </div>
            </div>

            <div class="row row-cols-2 row-cols-md-4 row-cols-md-6 g-3">
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid container-lg mt-5 mb-3">
            <!-- <div class="card category-card border-0">
        <div class="card-body py-2">
          <img src="./images/maintenance.png" alt="" title="" style="width: 50px; height: 50px" />
          <span class="fw-semibold ms-2" style="font-size: 1.2rem">Products</span>
        </div>
      </div> -->

            <div class="card category-card border-0">
                <div class="card-body p-0 mb-3">
                    <!-- <img src="./images/maintenance.png" alt="" title="" style="width: 50px; height: 50px" /> -->
                    <!-- <span class="fw-semibold ms-2" style="font-size: 1.2rem">Business Listing</span> -->
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-semibold py-2 px-3 rounded-3" style="font-size: 1.2rem" ;>Product
                            Listing</span>
                        <button type="button" class="btn border-0 fw-semibold" style="font-size: 1.2rem";>View
                            All</button>
                    </div>
                </div>
            </div>

            <div class="row row-cols-2 row-cols-md-4 row-cols-md-6 g-3">
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Truck Parts
                            </h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Electronics
                                parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Bike Parts
                            </h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Yachts Parts
                            </h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Hardware and
                                Tools</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Machine Parts
                            </h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Car Parts</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid container-lg mt-5 mb-2">
            <!-- <div class="card category-card border-0">
        <div class="card-body py-2">
          <img src="./images/maintenance.png" alt="" title="" style="width: 50px; height: 50px" />
          <span class="fw-semibold ms-2" style="font-size: 1.2rem">Brands</span>
        </div>
      </div> -->

            <div class="card category-card border-0">
                <div class="card-body p-0 mb-3">
                    <!-- <img src="./images/maintenance.png" alt="" title="" style="width: 50px; height: 50px" /> -->
                    <!-- <span class="fw-semibold ms-2" style="font-size: 1.2rem">Business Listing</span> -->
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-semibold py-2 px-3 rounded-3" style="font-size: 1.2rem" ;>Brand Listing</span>
                        <button type="button" class="btn border-0 fw-semibold" style="font-size: 1.2rem";>View
                            All</button>
                    </div>
                </div>
            </div>

            <div class="row row-cols-2 row-cols-md-4 row-cols-md-6 g-3">
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Toyota</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Nissan</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Honda</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Mitshubisini
                            </h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Mazda</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Kia</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Hyundai</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Mercedes</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">BMW</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Audi</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Renault</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">BentLey</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Sujuki</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Lexes</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Infinity
                            </h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Land Rover
                            </h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Jeep</h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card category-list-card border- py-2" style="width: 100%">
                        <img class="card-img-top d-block m-auto" src="./images/technology.png" alt="..."
                            title="..." style="width: 3rem; height: 3rem" />
                        <div class="card-body text-truncate py-2">
                            <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">Rchevrolet
                            </h6>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
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

    <footer>
        <div class="footer">
            <div class="container-fluid bg-dark pt-4 pb-1">
                <div class="row row-cols-1 row-cols-md-4 pb-4">

                    <div class="col">
                        <div class="mx-1">
                            <img src="./images/logo2.png" class="mx-auto d-block company_logo"
                                alt="Biz Info BD Logo" title="Biz Info BD Logo"
                                style="height: 50px; width: auto;">
                            <!-- <h4 class="text-center company_name">Your Comany Name Here</h4> -->
                            <hr class="mt-0 horizontal_line">
                            <p class="company_description">Lorem ipsum, iusto doloribus natus pariatur suscipit
                                delectus error doloremque aspernatur qui beatae iure quibusdam eligendi minima deserunt
                                dolorem incidunt fuga ratione quos corrupti aliquid? Incidunt minima cupiditate expedita
                                deserunt repellat placeat et perspiciatis numquam, quis ex nulla, ab odio a, aperiam
                                autem eum fugiat officiis vitae ducimus rem dolore temporibus dicta exercitationem!
                                Accusantium voluptatum voluptates tenetur perferendis expedita.</p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="m-3">
                            <h4>Contact Info</h4>
                            <hr class="mt-0 horizontal_line">
                            <a href="#" class="text-decoration-none d-block mb-1" title="Phone Number">
                                <i class="bi bi-telephone fs-6"></i>
                                <span class="fs-6 ms-1">0123456789</span>
                            </a>
                            <a href="#" class="text-decoration-none d-block mb-1" title="Email Link">
                                <i class="bi bi-envelope fs-6"></i>
                                <span class="fs-6 ms-1">example@gmail.com</span>
                            </a>
                            <a href="#" class="text-decoration-none d-block mb-1" target="_blank"
                                title="Whatsapp Link">
                                <i class="bi bi-whatsapp fs-6"></i>
                                <span class="fs-6 ms-1">Whatsapp</span>
                            </a>
                            <a href="#" class="text-decoration-none d-block mb-1" target="_blank"
                                title="Facebook Messenger link">
                                <i class="bi bi-messenger fs-6"></i>
                                <span class="fs-6 ms-1">Messenger</span>
                            </a>
                            <a href="#" class="text-decoration-none d-block mb-1" target="_blank"
                                title="Skype link">
                                <i class="bi bi-skype fs-6"></i>
                                <span class="fs-6 ms-1">Skype</span>
                            </a>
                            <a href="#" class="text-decoration-none d-block mb-1" target="_blank"
                                title="Google map direction">
                                <i class="bi bi-geo-alt fs-6"></i>
                                <span class="fs-6 ms-1">Sharjah, UAE</span>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="m-3">
                            <h4 class="">Quick Link</h4>
                            <hr class="mt-0 horizontal_line">
                            <a href="#" class="text-decoration-none d-block mb-1" title="Visit home page">
                                <i class="bi bi-house-door fs-6"></i>
                                <span class="fs-6 ms-1">Home</span>
                            </a>
                            <a href="#" class="text-decoration-none d-block mb-1"
                                title="Visit about us page">
                                <i class="bi bi-person-vcard fs-6"></i>
                                <span class="fs-6 ms-1">About Us</span>
                            </a>
                            <a href="#" class="text-decoration-none d-block mb-1"
                                title="Visit service page">
                                <i class="bi bi-tools fs-6"></i>
                                <span class="fs-6 ms-1">Business Listing</span>
                            </a>
                            <a href="#" class="text-decoration-none d-block mb-1"
                                title="Visit search companies page">
                                <i class="bi bi-buildings fs-6"></i>
                                <span class="fs-6 ms-1">Experts</span>
                            </a>
                            <a href="#" class="text-decoration-none d-block mb-1"
                                title="Visit company page">
                                <i class="bi bi-building-add fs-6"></i>
                                <span class="fs-6 ms-1">Products</span>
                            </a>
                            <a href="#" class="text-decoration-none d-block mb-1"
                                title="Visit search companies page">
                                <i class="bi bi-buildings fs-6"></i>
                                <span class="fs-6 ms-1">Brands</span>
                            </a>
                            <a href="#" class="text-decoration-none d-block mb-1"
                                title="Visit contact page">
                                <i class="bi bi-telephone fs-6"></i>
                                <span class="fs-6 ms-1">Contact Us</span>
                            </a>
                        </div>
                    </div>

                    <div class="col">
                        <div class="m-3 footer-social-icon">
                            <h4>Follow Us</h4>
                            <hr class="mt-0 horizontal_line">
                            <a href="http://" class="text-decoration-none d-block mb-1">
                                <i class="bi bi-facebook fs-6"></i>
                                <span class="fs-6 ms-1">Facebook</span>
                            </a>
                            <a href="http://" class="text-decoration-none d-block mb-1">
                                <i class="bi bi-linkedin fs-6"></i>
                                <span class="fs-6 ms-1">LinkedIn</span>
                            </a>
                            <a href="http://" class="text-decoration-none d-block mb-1">
                                <i class="bi bi-twitter fs-6"></i>
                                <span class="fs-6 ms-1">Twitter</span>
                            </a>
                            <a href="http://" class="text-decoration-none d-block mb-1">
                                <i class="bi bi-instagram fs-6"></i>
                                <span class="fs-6 ms-1">Instagram</span>
                            </a>
                            <a href="http://" class="text-decoration-none d-block mb-1">
                                <i class="bi bi-youtube fs-6"></i>
                                <span class="fs-6 ms-1">YouTube</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="row row-cols-1 row-cols-md-3 border-top border-1 border-primary px-3 border-opacity-50 pt-3">
                    <div class="col text-center text-md-start copyright ps-2">
                        <p>Copyright <i class="bi bi-c-circle"></i> 2024 xxx xxx xxx | All Rights Reserved</p>
                    </div>
                    <div class="col text-center policy mb-3 mb-md-0">
                        <a href="./privacy-policy.html" class="text-decoration-none"
                            title="Visit privacy policy page">
                            Privacy Policy
                        </a>
                        <span class="mx-1 text-primary">|</span>
                        <a href="./terms-and-conditions.html" class="text-decoration-none"
                            title="Visit terms and conditions page">
                            Terms & Conditions
                        </a>
                        <span class="mx-1 text-primary">|</span>
                        <a href="#" class="text-decoration-none" title="Visit terms and conditions page">
                            Refund Policy
                        </a>
                    </div>
                    <div class="col text-center text-md-end developed-by pe-2">
                        <!-- <p>Developed By <a href="#" target="_blank" title="Visit BIZ INFO BD About page">Ringer Soft Ltd.</a></p> -->
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
