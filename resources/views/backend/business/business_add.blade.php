@extends('layouts.backend.master')
@section('title', 'Business Add')
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
    <form action="{{ route('business.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body" style="position: relative;">
                            <h4 class="card-title">Contact Person</h4>
                            <hr>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Contact Person Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="contact_person_name"
                                        class="form-control @error('contact_person_name') is-invalid @enderror"
                                        id="contact_person_name" placeholder="Title">
                                </div>
                                @error('contact_person_name')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Contact Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="contact_email"
                                        class="form-control @error('contact_email') is-invalid @enderror" id="contact_email"
                                        placeholder="Title">
                                </div>
                                @error('contact_email')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Contact Mobile</label>
                                <div class="col-sm-10">
                                    <input type="text" name="contact_mobile"
                                        class="form-control @error('contact_mobile') is-invalid @enderror"
                                        id="contact_mobile" placeholder="Title">
                                </div>
                                @error('contact_mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Contact WhatsApp</label>
                                <div class="col-sm-10">
                                    <input type="text" name="contact_whatsapp"
                                        class="form-control @error('contact_whatsapp') is-invalid @enderror"
                                        id="contact_whatsapp" placeholder="Title">
                                </div>
                                @error('contact_whatsapp')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Contact Google Map</label>
                                <div class="col-sm-10">
                                    <input type="text" name="contact_google_map"
                                        class="form-control @error('contact_google_map') is-invalid @enderror"
                                        id="contact_google_map" placeholder="Title">
                                </div>
                                @error('contact_google_map')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Contact Google Map</label>
                                <div class="col-sm-10">
                                    <input type="text" name="contact_google_map"
                                        class="form-control @error('contact_google_map') is-invalid @enderror"
                                        id="contact_google_map" placeholder="Title">
                                </div>
                                @error('contact_google_map')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Contact Website</label>
                                <div class="col-sm-10">
                                    <input type="text" name="contact_website"
                                        class="form-control @error('contact_website') is-invalid @enderror"
                                        id="contact_website" placeholder="Title">
                                </div>
                                @error('contact_website')
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
                <div class="card">
                    <div class="card-content">
                        <div class="card-body" style="position: relative;">
                            <h4 class="card-title">Company Info</h4>
                            <hr>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Company Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="company_name"
                                        class="form-control @error('company_name') is-invalid @enderror" id="company_name"
                                        placeholder="Title">
                                </div>
                                @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Company Mobile</label>
                                <div class="col-sm-10">
                                    <input type="text" name="company_mobile"
                                        class="form-control @error('company_mobile') is-invalid @enderror"
                                        id="company_mobile" placeholder="Title">
                                </div>
                                @error('company_mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Company Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="company_email"
                                        class="form-control @error('company_email') is-invalid @enderror"
                                        id="company_email" placeholder="Title">
                                </div>
                                @error('company_email')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <h4 class="card-title">Company Description</h4>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="general_dsc" class="form-control ckeditor" id="company_description" rows="6"></textarea>
                                </div>
                                <div class="col-md-12">
                                    @error('company_description')
                                        <span class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </span>
                                    @enderror
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
                            <h4 class="card-title">Business Info</h4>
                            <hr>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Business Type</label>
                                <div class="col-sm-10">
                                    <input type="text" name="business_type"
                                        class="form-control @error('business_type') is-invalid @enderror"
                                        id="business_type" placeholder="Title">
                                </div>
                                @error('business_type')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="business_category_id" class="col-sm-2 col-form-label">Business Catgory</label>
                                <div class="col-sm-10">
                                    <select name="business_category_id" class="form-control select2"
                                        id="business_category_id">
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Business Hours</label>
                                <div class="col-sm-10">
                                    <input type="text" name="business_hours"
                                        class="form-control @error('business_hours') is-invalid @enderror"
                                        id="business_hours" placeholder="Title">
                                </div>
                                @error('business_hours')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">WhatsApp Number</label>
                                <div class="col-sm-10">
                                    <input type="text" name="whatsapp_number"
                                        class="form-control @error('whatsapp_number') is-invalid @enderror"
                                        id="whatsapp_number" placeholder="Title">
                                </div>
                                @error('whatsapp_number')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Social Media</label>
                                <div class="col-sm-10">
                                    <input type="text" name="social_media"
                                        class="form-control @error('social_media') is-invalid @enderror"
                                        id="social_media" placeholder="Title">
                                </div>
                                @error('social_media')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Website</label>
                                <div class="col-sm-10">
                                    <input type="text" name="social_media"
                                        class="form-control @error('website') is-invalid @enderror" id="website"
                                        placeholder="Title">
                                </div>
                                @error('website')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-10">
                                    <input type="text" name="city"
                                        class="form-control @error('city') is-invalid @enderror" id="city"
                                        placeholder="Title">
                                </div>
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Country</label>
                                <div class="col-sm-10">
                                    <input type="text" name="country"
                                        class="form-control @error('country') is-invalid @enderror" id="country"
                                        placeholder="Country">
                                </div>
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <input type="text" name="country"
                                        class="form-control @error('country') is-invalid @enderror" id="country"
                                        placeholder="Country">
                                </div>
                                @error('country')
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
                <div class="card">
                    <div class="card-content">
                        <div class="card-body" style="position: relative;">
                            <h4 class="card-title text-uppercase">Business Images</h4>
                            <hr>
                            <div class="business-images"></div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Add</button>
                <hr>
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
        $('.business-images').imageUploader();
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
