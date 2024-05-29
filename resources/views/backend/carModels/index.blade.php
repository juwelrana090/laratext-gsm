@extends('layouts.backend.master')
@section('title', 'Car Model')
@push('meta')

@endpush
@push('theme_css')
@endpush
@push('page_css')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Backend/app-assets/vendors/css/forms/select/select2.min.css') }}">
@endpush
@push('custom_css')

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
                    <h4 class="card-title">Add Car Model</h4>
                </div>
                <div class="card-content">
                    <div class="card-body" style="position: relative;">
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('admin.car_models.store') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Brand</label>
                                        <select name="brand_id" class="form-control select2" id="exampleFormControlSelect1">
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('brand_id')
                                            <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="first-name-vertical">Car Model</label>
                                        <input type="text" id="first-name-vertical"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            placeholder="Model">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                        @enderror
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
                    <h4 class="card-title">Model List</h4>
                </div>
                <div class="card-content">
                    <div class="card-body" style="position: relative;">
                        @include('backend.carModels.model_list')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('theme_js')
@endpush
@push('page_js')
    <script src="{{ asset('Backend/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script>
        $(".select2").select2({
            dropdownAutoWidth: true,
            width: '100%'
        });
    </script>
@endpush
@push('custom_js')
@endpush
