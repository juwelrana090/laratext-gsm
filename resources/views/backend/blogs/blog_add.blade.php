@extends('layouts.backend.master')
@section('title', 'Blog Add')
@push('meta')
@endpush
@push('theme_css')
@endpush
@push('page_css')
    <link rel="stylesheet" type="text/css" href="{{ asset('Backend/app-assets/vendors/css/forms/select/select2.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
@endpush
@push('custom_css')
    <style>
        input[type="radio"],
        input[type="checkbox"] {
            width: 20px;
            height: 20px;
            cursor: pointer;
        }

        .form-check {
            margin-bottom: 15px;
        }

        .form-check-label {
            margin-left: 12px;
        }

        .cke_contents {
            height: 325px !important;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="{{ asset('Backend/assets/css/image-uploader.min.css') }}">
@endpush
@push('head')
@endpush
@section('breadcrumb')
@endsection

@section('content')
    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body" style="position: relative;">
                            <h4 class="card-title">Blog Info</h4>
                            <hr>
                            <div class="form-group row">
                                <label for="title" class="col-sm-12 col-form-label">Title<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    <input type="text" name="post_title"
                                        class="form-control @error('post_title') is-invalid @enderror" id="post_title"
                                        placeholder="Blog Title">
                                </div>
                                @error('post_title')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <h4 class="card-title">Blog Description</h4>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="post_description" class="form-control ckeditor" id="post_description" rows="6"></textarea>
                                </div>
                                <div class="col-md-12">
                                    @error('post_description')
                                        <span class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="post_category_id" class="col-sm-12 col-form-label">Blog Catgory <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-sm-12">
                                    <select name="post_category_id" class="form-control select2" id="post_category_id">
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->category_title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="post_image" class="col-sm-12 col-form-label">Blog Image</label>
                                <div class="col-sm-12">
                                    <input type="file" class="form-control-file" name="post_image" id="post_image">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="post_status" class="col-sm-12 col-form-label">Blog status <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-sm-12">
                                    <select name="post_status" class="form-control select2" id="post_status">
                                        <option value="published">Published</option>
                                        <option value="draft">Draft</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body" style="position: relative;">
                            <h4 class="card-title">SEO Info</h4>
                            <hr>
                            <div class="form-group row">
                                <label for="seo_title" class="col-sm-12 col-form-label">SEO Title </label>
                                <div class="col-sm-12">
                                    <input type="text" name="post_title"
                                        class="form-control @error('seo_title') is-invalid @enderror" id="seo_title"
                                        placeholder="SEO Title">
                                </div>
                                @error('seo_title')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="seo_keywords" class="col-sm-12 col-form-label">SEO Keywords</label>
                                <div class="col-sm-12">
                                    <input type="text" name="seo_keywords"
                                        class="form-control @error('seo_keywords') is-invalid @enderror" id="seo_keywords"
                                        placeholder="SEO Keywords">
                                </div>
                                @error('seo_keywords')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="seo_description" class="col-sm-12 col-form-label">SEO Description</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="seo_description" id="seo_description" rows="3"
                                        placeholder="SEO Description"></textarea>
                                </div>
                                @error('seo_description')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>

        </div>
    </form>
@endsection

@push('theme_js')
@endpush
@push('page_js')
    <script src="{{ asset('Backend/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
@endpush
@push('custom_js')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    <script src="{{ asset('Backend/assets/js/image-uploader.min.js') }}"></script>
    <script>
        $('.blogs-images').imageUploader();
    </script>
    <script type="text/javascript">
        function convertToSlug(str) {
            console.log(str)
            //replace all special characters | symbols with a space
            str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ')
                .toLowerCase();
            // trim spaces at start and end of string
            str = str.replace(/^\s+|\s+$/gm, '');

            // replace space with dash/hyphen
            str = str.replace(/\s+/g, '-');
            document.getElementById("title_slug").value = str;
            //return str;
        }
    </script>
    <script>
        $(".select2").select2({
            dropdownAutoWidth: true,
            width: '100%'
        });
        $(".select2#brand_model").select2({
            dropdownAutoWidth: true,
            width: '100%',
            placeholder: 'Select Model'
        });

        $(function() {
            $(".datepicker-2").datepicker({
                format: "yyyy",
                viewMode: "years",
                minViewMode: "years",
                autoclose: true
            });
        });
        $(document).ready(function() {
            let id = $('#brandSelect').val();
            let url = '/get/model/' + id
            $.ajax(url, {
                success: function(data) {
                    $('#brand_model').empty();
                    let models = data;
                    var html = '';
                    for (var i = 0; i < models.length; i++) {
                        let GetValue = models[i].name;
                        let getId = models[i].id;
                        html += "<option value=" + getId + ">" + GetValue + "</option>";
                    }
                    console.log(html)
                    $('#brand_model').append(html);
                }
            })
        });
        $("#brandSelect").on("change", function(event) {
            let id = $('#brandSelect').val();
            let url = '/get/model/' + id
            $.ajax(url, {
                success: function(data) {
                    $('#brand_model').empty();
                    let models = data;
                    var html = '';
                    for (var i = 0; i < models.length; i++) {
                        let GetValue = models[i].name;
                        let getId = models[i].id;
                        html += "<option value=" + getId + ">" + GetValue + "</option>";
                    }
                    console.log(html)
                    $('#brand_model').append(html);
                }
            })
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endpush
