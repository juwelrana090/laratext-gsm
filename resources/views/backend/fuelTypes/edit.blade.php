@extends('layouts.backend.master')
@section('title', 'Type edit')
@push('meta')
@endpush
@push('theme_css')
@endpush
@push('page_css')
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
            <div class="card" style="background-color: #fde4e477">
                <div class="card-header">
                    <h4 class="card-title">Edit Type</h4>
                </div>
                <div class="card-content">
                    <div class="card-body" style="position: relative;">
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('admin.fuel_types.update', $fuelType->id) }}" method="post" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label for="first-name-vertical">Type Name</label>
                                        <input type="text" id="first-name-vertical"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ $fuelType->name }}" name="name" placeholder="Color Name">
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
                                        <label for="first-name-vertical">Second Image</label>
                                        <input type="file" id="first-name-vertical"
                                            onchange="document.getElementById('imagePreview').src = window.URL.createObjectURL(this.files[0])"
                                            class="form-control @error('sImage') is-invalid @enderror" name="sImage">
                                        @error('sImage')
                                            <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="brnad_description">Brand Description</label>
                                        <textarea name="brnad_description" class="form-control" id="brnad_description"
                                            rows="3">{{ $fuelType->brnad_description }}</textarea>
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
