<header style="margin-bottom: 120px;">
    <!-- <div class="container-fluid container py-1 header-top-icon">
            <div class="d-flex justify-content-between align-items-center">
              <img src="./images/logo2.png" class="img-fluid" alt="..." title="..." style="max-height: 50px; width: auto" />
              <a href="http://" class="btn biz-btn">Business Listing</a>
            </div>
          </div> -->

    <nav class="navbar navbar-expand-md py-3 fixed-top">
        <div class="container-fluid container-lg">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo2.png') }}" class="img-fluid" alt="..." title="..."
                    style="max-height: 40px; width: auto" />
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center w-100">
                    <li class="nav-item">
                        <a class="nav-link fw-bold active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ route('about.us') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ route('business.list') }}">Business Listing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ route('expert.list') }}">Experts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ route('product.list') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#{{ route('brand.list') }}">Brands</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ route('blog.list') }}">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ route('contact.us') }}">Contact</a>
                    </li>
                </ul>
            </div>

            <a href="{{ route('listing') }}" class="btn biz-btn">
                <small class="fw-semibold">Add Listing</small>
            </a>
        </div>
    </nav>
</header>
