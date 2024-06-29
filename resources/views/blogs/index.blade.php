@extends('layouts.frontend')
@section('title')
    <title>blogs | GSP - The best place to explore your favourite business.</title>
@endsection
@section('custom_head')
    <!-- Custom styles for this template -->
@endsection
@section('content')
    <main>
        <div class="container-fluid container-lg bg-white mt-3 mt-md-5">

            <!-- Page header with logo and tagline-->
            <header class="py-5 bg-light border-bottom mb-4">
                <div class="container">
                    <div class="text-center my-5">
                        <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                        <p class="lead mb-0">A starter layout for your next blog homepage</p>
                    </div>
                </div>
            </header>
            <!-- Page content-->
            <div class="container">
                <div class="row">
                    <!-- Blog entries-->
                    <div class="col-lg-8">
                        <!-- Featured blog post-->
                        {{-- <div class="card mb-4">
                            <a href="./blog_details.html"><img class="card-img-top"
                                    src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg') }}" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">January 1, 2023</div>
                                <h2 class="card-title">Featured Post Title</h2>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta
                                    expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                                <a class="btn btn-primary" href="./blog_details.html">Read more →</a>
                            </div>
                        </div> --}}
                        <!-- Nested row for non-featured blog posts-->
                        <div class="row">
                            @foreach ($blogs as $blog)
                                <div class="col-lg-6">
                                    <!-- Blog post-->
                                    <div class="card mb-4">
                                        <a href="{{ route('home') }}/blog/{{ $blog->post_slug }}" class="nav-link">
                                            <img class="card-img-top" src="{{ asset($blog->post_image) }}"
                                                alt="{{ $blog->post_title }}" />
                                        </a>
                                        <div class="card-body">
                                            <div class="small text-muted">{{date("F d, Y", strtotime($blog->created_at)) }}</div>
                                            <h2 class="card-title h4">{{ $blog->post_title }}</h2>
                                            <p class="card-text">{{ $blog->meta_description }}</p>
                                            <a class="btn btn-primary" href="{{ route('home') }}/blog/{{ $blog->post_slug }}">Read more →</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Pagination Links -->
                        {{ $blogs->links() }}
                    </div>
                    <!-- Side widgets-->
                    <div class="col-lg-4">
                        <!-- Search widget-->
                        <div class="card mb-4">
                            <div class="card-header">Search</div>
                            <div class="card-body">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Enter search term..."
                                        aria-label="Enter search term..." aria-describedby="button-search" />
                                    <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                                </div>
                            </div>
                        </div>
                        <!-- Categories widget-->
                        <div class="card mb-4">
                            <div class="card-header">Categories</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul class="row list-unstyled mb-0">
                                            @foreach ($categories as $category)
                                            <li class="col-6 col-lg-6"><a href="#">{{$category->category_title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Side widget-->
                        {{-- <div class="card mb-4">
                            <div class="card-header">Side Widget</div>
                            <div class="card-body">You can put anything you want inside of these side widgets. They are
                                easy to use, and feature the card component!</div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('custom_script')
@endsection
