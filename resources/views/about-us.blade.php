@extends('layouts.frontend')
@section('title')
    <title>About US | GSP - The best place to explore your favourite business.</title>
@endsection
@section('custom_head')
    <!-- Custom styles for this template -->
@endsection
@section('content')
    <main>
        <div class="py-5">
            <div class="container-fluid container-lg bg-white mt-3 mt-md-5">
                <div class="row gx-4 align-items-center justify-content-between">
                    <div class="col-md-5 order-2 order-md-1">
                        <div class="mt-5 mt-md-0">
                            <span class="text-muted">Our Story</span>
                            <h2 class="display-5 fw-bold">About Us</h2>
                            <?php echo $page->page_content; ?>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-1 order-1 order-md-2">

                        <?php
                        $images = [];

                        if ($page->page_images) {
                            $images = json_decode($page->page_images);
                        }
                        ?>
                        <div class="row gx-2 gx-lg-3">
                            @if ($page->page_images)
                                @foreach ($images as $image)
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <img class="img-fluid rounded-3" src="{{ asset($image->image_path) }}">
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('custom_script')
@endsection
