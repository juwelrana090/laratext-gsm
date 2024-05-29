@extends('layouts.backend.master')
@section('title', 'Brand')
@push('meta')
@endpush
@push('theme_css')
@endpush
@push('page_css')
@endpush
@push('custom_css')
    <style>
        .brand {
            margin-right: 20px;
            cursor: pointer;
            width: 100px;
            height: 80px;
            display: flex;
            color: black;
            align-items: center;
            flex-direction: column;
            border-radius: 5px;
            justify-content: center;
            border: 1px solid rgb(252, 228, 228);
            margin-bottom: 20px;
            box-shadow: rgb(0 0 0 / 8%) 0px 0px 15px -3px, rgb(0 0 0 / 4%) 0px 4px 6px -2px !important;
        }

        .brandIcon {
            height: 40px;
            padding: 5px;
        }

        .brandIcon img {
            width: 100%;
            height: 40px;
        }

    </style>
@endpush
@push('head')
@endpush
@section('breadcrumb')
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Brands</h4>
                    <div class="brand">
                        <div class="brandIcon">
                            <img id="imagePreview" src="{{ asset('images/audi.png') }}" alt="" srcset="">
                        </div>
                        <div class="brandName">
                            <p>Name</p>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body" style="position: relative;">
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('admin.brands.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="first-name-vertical">Brand Name</label>
                                        <input type="text" id="first-name-vertical"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            placeholder="Brand Name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="first-name-vertical">Brand Logo(<span class="text-danger">make sure
                                                this
                                                logo is png format and less than 100 kb</span>)</label>
                                        <input type="file" id="first-name-vertical"
                                            onchange="document.getElementById('imagePreview').src = window.URL.createObjectURL(this.files[0])"
                                            class="form-control @error('image') is-invalid @enderror" name="image">
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="brnad_description">Brand Description</label>
                                        <textarea name="brnad_description" class="form-control" id="brnad_description" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-success">Create</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Brand List</h4>
                </div>
                <div class="card-content">
                    <div class="card-body" style="position: relative;">
                        @include('backend.brands.brand_list')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('theme_js')
@endpush
@push('page_js')
@endpush
@push('custom_js')
@endpush
