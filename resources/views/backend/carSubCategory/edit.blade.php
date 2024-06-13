@extends('layouts.backend.master')
@section('title', 'Category edit')
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
                    <h4 class="card-title">Edit Sub Category</h4>
                </div>
                <div class="card-content">
                    <div class="card-body" style="position: relative;">
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('admin.car_sub_category.update', $category->id) }}" method="post" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf

                                    <div class="form-group">
                                        <label for="car_type_id" class="first-name-vertical">Category<span
                                                class="text-danger">*</span></label>
                                        <select name="car_type_id" class="form-control select2" id="car_type_id">
                                            @foreach ($carTypes as $item)
                                                <option value="{{ $item->id }}" {{ $category->car_type_id == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="first-name-vertical">Category Name</label>
                                        <input type="text" id="first-name-vertical"
                                            class="form-control @error('name') is-invalid @enderror" value="{{$category->name}}" name="name"
                                            placeholder="Category Name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="catImage">Category Image</label>
                                        <input type="file" class="form-control-file" name="image" id="catImage">
                                    </div>
                                    <div class="form-group">
                                        <label for="categoryDsc">Category Description</label>
                                        <textarea class="form-control" name="cat_dsc" id="categoryDsc" rows="3">{{$category->description}}</textarea>
                                    </div>


                                    <h4 class="card-title">SEO Info</h4>
                                    <hr>
                                    <div class="form-group row">
                                        <label for="meta_title" class="col-sm-12 col-form-label">SEO Title </label>
                                        <div class="col-sm-12">
                                            <input type="text" name="meta_title"
                                                class="form-control @error('meta_title') is-invalid @enderror" id="meta_title"
                                                placeholder="SEO Title" value="{{ $category->meta_title }}">
                                        </div>
                                        @error('meta_title')
                                            <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <label for="meta_keywords" class="col-sm-12 col-form-label">SEO Keywords</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="meta_keywords"
                                                class="form-control @error('meta_keywords') is-invalid @enderror"
                                                id="meta_keywords" placeholder="SEO Keywords"
                                                value="{{ $category->meta_keywords }}">
                                        </div>
                                        @error('meta_keywords')
                                            <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <label for="meta_description" class="col-sm-12 col-form-label">SEO Description</label>
                                        <div class="col-sm-12">
                                            <textarea class="form-control" name="meta_description" id="meta_description" rows="3" placeholder="SEO Description">
                                                {{ $category->meta_description }}
                                            </textarea>
                                        </div>
                                        @error('meta_description')
                                            <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                        @enderror
                                    </div>
\
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
