@extends('layouts.backend.master')
@section('title', 'Expert Status edit')
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
                    <h4 class="card-title">Edit  Status</h4>
                </div>
                <div class="card-content">
                    <div class="card-body" style="position: relative;">
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('admin.expert_status.update', $expertStatus->id) }}" method="post">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label for="first-name-vertical">Status</label>
                                        <input type="text" id="first-name-vertical"
                                            class="form-control @error('status') is-invalid @enderror" value="{{$expertStatus->status}}" name="status"
                                            placeholder="status">
                                        @error('status')
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
