@extends('layouts.backend.master')
@section('title', 'Show Rooms')
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
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Show Rooms</h4>
                </div>
                <div class="card-content">
                    <div class="card-body" style="position: relative;">
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('admin.show_rooms.store') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="first-name-vertical">Show Room Name </label>
                                        <input type="text" id="first-name-vertical"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            placeholder="Shoow Room">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="first-name-vertical">Show Room Contact Number </label>
                                        <input type="text" id="first-name-vertical"
                                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                                            placeholder="Contact Number">
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="first-name-vertical">Show Room Owner Name </label>
                                        <input type="text" id="first-name-vertical"
                                            class="form-control @error('owner_name') is-invalid @enderror" name="owner_name"
                                            placeholder="name">
                                        @error('owner_name')
                                            <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="first-name-vertical">Show Room Address</label>
                                        <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="" rows="3" ></textarea>
                                        @error('address')
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
                    <h4 class="card-title">Shoow Room List</h4>
                </div>
                <div class="card-content">
                    <div class="card-body" style="position: relative;">
                        @include('backend.show_rooms.list')
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
