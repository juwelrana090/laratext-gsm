@extends('layouts.backend.master')
@section('title', 'Banner')
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
        <div class="col-lg-12 col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Banner Setting</h4>
                </div>

                <div class="card-content">
                    <div class="card-body" style="position: relative;">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{ asset($banner->banner_image) }}" alt="{{ $banner->banner_title }}">
                            </div>
                            <div class="col-12">
                                <form action="{{ route('banner.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $banner->id }}">

                                    <div class="form-group">
                                        <label for="banner_title">Banner Title</label>
                                        <input type="text" id="banner_title" class="form-control" name="banner_title"
                                            value="{{ $banner->banner_title }}" placeholder="Banner Title" />
                                    </div>

                                    <div class="form-group">
                                        <label for="banner_image">Banner Image</label>
                                        <input type="file" id="banner_image" class="form-control" name="banner_image">
                                    </div>
                                    <button type="submit" class="btn btn-success">Update</button>
                                </form>

                            </div>
                        </div>
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
