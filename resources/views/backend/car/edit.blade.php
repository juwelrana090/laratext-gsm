@extends('layouts.backend.master')
@section('title', 'Edit Car Details')
@push('meta')
@endpush
@push('theme_css')
@endpush
@push('page_css')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Backend/app-assets/vendors/css/forms/select/select2.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
@endpush
@push('custom_css')
    <link rel="stylesheet" type="text/css" href="{{ asset('Backend/assets/css/image-uploader.min.css') }}">
    <style>
        input[type="radio"],
        input[type="checkbox"] {
            width: 20px;
            height: 20px;
            cursor: pointer;
        }


        .previews_car {
            display: grid;
            grid-template-columns: auto auto auto;
        }

        .previews_car_img {
            width: 150px;
            height: 150px;
            margin-right: 10px;
            margin-bottom: 10px;
            position: relative;
        }

        .previews_car_img img {
            width: 150px;
            height: 150px;
            object-fit: cover
        }

        .delete_preview_image {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 20px;
            height: 20px;
            color: #ffffff;
            background-color: rgb(255, 0, 0);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            cursor: pointer;
        }

        .form-check {
            margin-bottom: 15px;
        }

        .form-check-label {
            margin-left: 12px;
        }

    </style>
@endpush
@push('head')
@endpush
@section('breadcrumb')
@endsection

@section('content')
    <form action="{{ route('admin.cars.update', $car->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body" style="position: relative;">
                            <h4 class="card-title">Edit Basic Specs</h4>
                            <hr>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Prouct Title</label>
                                <div class="col-sm-10">
                                    <input type="text" onkeyup="convertToSlug(this.value)" name="title" value="{{ $car->title }}"
                                        class="form-control @error('title') is-invalid @enderror" id="title"
                                        placeholder="Title">
                                </div>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label for="title_slug" class="col-sm-2 col-form-label">Product Slug</label>
                                <div class="col-sm-10">
                                    <input type="text" name="slug" value="{{ $car->slug}}" class="form-control" id="title_slug"
                                        placeholder="Slug">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="car_type" class="col-sm-2 col-form-label">Select Catgory</label>
                                <div class="col-sm-10">
                                    <select name="car_type_id" class="form-control select2" id="car_type">
                                        @foreach ($car_types as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $car->car_type_id == $item->id ? 'selected' : '' }}>
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="brandSelect" class="col-sm-2 col-form-label">Menufacturer Brands</label>
                                <div class="col-sm-10">
                                    <select class="form-control select2" name="brand_id" id="brandSelect">
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}"
                                                {{ $car->brand_id == $brand->id ? 'selected' : '' }}>{{ $brand->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fuelType" class="col-sm-2 col-form-label">Vehicle Brand</label>
                                <div class="col-sm-10">
                                    <select name="vehicle_brands" class="form-control select2" id="fuelType">
                                        @foreach ($fuels as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $car->fuel_type_id == $item->id ? 'selected' : '' }}>
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <h4 class="card-title">General Description</h4>
                            <div class="form-group mt-1">
                                <label for="exampleFormControlSelect1" class="font-weight-bold">English</label>
                                <textarea name="general_dsc" class="form-control ckeditor" id="exampleFormControlTextarea1"
                                    rows="3">{{ $car->general_dsc }}</textarea>
                            </div>
                            <hr>
                            <div style="background-color: red;color:white" class="p-2">
                                <h4 class="card-title text-white">Select What you are showing</h4>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"
                                        {{ $car->pub_place == 'new_arrivals' ? 'checked' : '' }} name="pub_place"
                                        id="new_arrivals" value="new_arrivals">
                                    <label class="form-check-label text-white" for="new_arrivals">Compressors</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"
                                        {{ $car->pub_place == 'best_selling' ? 'checked' : '' }} name="pub_place"
                                        id="best_selling" value="best_selling">
                                    <label class="form-check-label text-white" for="best_selling">Condensers & Evaporators</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"
                                        {{ $car->pub_place == 'AC Parts' ? 'checked' : '' }} name="pub_place" id="sold"
                                        value="AC Parts">
                                    <label class="form-check-label text-white" for="sold">AC Parts</label>
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body" style="position: relative;">
                            <h4 class="card-title text-uppercase">Car Images
                                {{--<a href="{{ route('car_image_reset', $car->id) }}">Reset Image</a>--}}
                                </h4>
                            <hr>
                            <div class="previews_car">
                                @if ($car->CarImage)
                                    @foreach ($car->CarImage as $image)
                                        <div class="previews_car_img">
                                            <img src="{{ thumbnail($image->image) }}" alt="" srcset="">
                                            <div class="delete_preview_image"><a
                                                    href="{{ route('car.image.delete', $image->id) }}"
                                                    class="text-white">x</a></div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="input-images-1" style="padding-top: .5rem;"></div>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-body" style="position: relative;">
                            <h4 class="card-title text-uppercase">Interior Design</h4>
                            <hr>
                            <div class="form-group row">
                                <label for="part_no" class="col-sm-2 col-form-label">Part No</label>
                                <div class="col-sm-10">
                                    <input name="part_no" value="{{ $car->part_no }}" type="text" class="form-control" id="part_no"
                                        placeholder="Part No">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="vehicle" class="col-sm-2 col-form-label">Vehicle</label>
                                <div class="col-sm-10">
                                    <input name="vehicle" value="{{ $car->vehicle }}" type="text" class="form-control" id="vehicle"
                                        placeholder="Vehiclle No">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="year" class="col-sm-2 col-form-label">Year</label>
                                <div class="col-sm-10">
                                    <input type="text" name="car_year" value="{{ $car->year }}"
                                        class="form-control datepicker-2" id="year" placeholder="Select Year">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="grooves" class="col-sm-2 col-form-label">No. of Grooves</label>
                                <div class="col-sm-10">
                                    <input type="text" name="grooves" value="{{ $car->grooves }}" class="form-control" id="grooves"
                                        placeholder="Grooves">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Application</label>
                                <div class="col-sm-10">
                                    <input name="voltage" type="text" value="{{ $car->voltage }}" class="form-control" id="inputPassword"
                                        placeholder="Application">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Cylinders" class="col-sm-2 col-form-label">No. of Cylinders</label>
                                <div class="col-sm-10">
                                    <input name="cylinder" value="{{ $car->cylinder }}" type="text" class="form-control" id="Cylinders"
                                        placeholder="No. of Cylinders">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Sensor" class="col-sm-2 col-form-label">Control Valve / Sensor</label>
                                <div class="col-sm-10">
                                    <input name="sensor" value="{{ $car->sensor }}" type="text" class="form-control" id="Sensor"
                                        placeholder="Control Valve / Sensor">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pulley" class="col-sm-2 col-form-label">Pulley Diameter</label>
                                <div class="col-sm-10">
                                    <input name="pully_diameter" value="{{ $car->pully_diameter }}" type="text" class="form-control" id="pulley"
                                        placeholder="Pulley Diameter">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="origin" class="col-sm-2 col-form-label">Origin</label>
                                <div class="col-sm-10">
                                    <input name="origin" type="text" value="{{ $car->origin }}" class="form-control" id="origin"
                                        placeholder="Origin">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="menufacturer" class="col-sm-2 col-form-label">Manufacturer</label>
                                <div class="col-sm-10">
                                    <input name="menufacturer" value="{{ $car->menufacturer }}" type="text" class="form-control" id="menufacturer"
                                        placeholder="Manufacturer">
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>

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
        $('.input-images-1').imageUploader();
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
            let url = '/get/model/' + id;
            let carModel_id = {{ $car->model_id }};
            $.ajax(url, {
                success: function(data) {
                    $('#brand_model').empty();
                    let models = data;
                    var html = '';
                    for (var i = 0; i < models.length; i++) {
                        let GetValue = models[i].name;
                        let getId = models[i].id;
                        html +=
                            `<option value="${getId}" ${(carModel_id==getId)?'selected':''} >${GetValue}</option>`;
                    }
                    console.log(html)
                    $('#brand_model').append(html);
                }
            })


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
                            html += "<option value=" + getId + "  >" + GetValue + "</option>";
                        }
                        console.log(html)
                        $('#brand_model').append(html);
                    }
                })
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endpush
