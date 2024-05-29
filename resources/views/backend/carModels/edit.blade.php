@extends('layouts.backend.master')
@section('title', 'Car Model edit')
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
                    <h4 class="card-title">Edit Car Model</h4>
                </div>
                <div class="card-content">
                    <div class="card-body" style="position: relative;">
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('admin.car_models.update', $carModel->id) }}" method="post">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Brand</label>
                                        <select name="brand_id" class="form-control" id="exampleFormControlSelect1">
                                            @foreach ($brands as $brand)
                                                <option value="{{$brand->id}}" {{($brand->id==$carModel->brand_id)?'selected':''}} >{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('brand_id')
                                        <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                        @enderror
                                      </div>
                                    <div class="form-group">
                                        <label for="first-name-vertical">Model</label>
                                        <input type="text" id="first-name-vertical"
                                            class="form-control @error('name') is-invalid @enderror" value="{{$carModel->name}}" name="name"
                                            placeholder="Color Name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                        @enderror
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
