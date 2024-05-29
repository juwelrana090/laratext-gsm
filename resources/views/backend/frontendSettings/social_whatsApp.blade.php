@extends('layouts.backend.master')
@section('title', 'Social And WhatsApp')
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
                    <h4 class="card-title">Social And WhatsApp</h4>
                </div>
                <div class="card-content">
                    <div class="card-body" style="position: relative;">
                        <div class="row">
                            <div class="col-12">
                                <form action="{{route('admin.social.whatsApp.update')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="first-name-vertical">Facebook</label>
                                        <input type="text" id="first-name-vertical"
                                            class="form-control" value="{{$socialLInk->fb}}" name="fb"
                                            placeholder="Facebook Link">
                                    </div>

                                    <div class="form-group">
                                        <label for="first-name-vertical">Instagram</label>
                                        <input type="text" id="first-name-vertical"
                                            class="form-control" value="{{$socialLInk->instagram}}" name="instagram"
                                            placeholder="Instagram Link">
                                    </div>
                                    <div class="form-group">
                                        <label for="first-name-vertical">Twitter</label>
                                        <input type="text" id="first-name-vertical"
                                            class="form-control" value="{{$socialLInk->twitter}}" name="twitter"
                                            placeholder="Twitter Link">
                                    </div>
                                    <div class="form-group">
                                        <label for="first-name-vertical">Youtube</label>
                                        <input type="text" id="first-name-vertical"
                                            class="form-control" value="{{$socialLInk->youtube}}" name="youtube"
                                            placeholder="Youtube Link">
                                    </div>
                                    <div class="form-group">
                                        <label for="first-name-vertical">WhatsApp Number</label>
                                        <input type="text" id="first-name-vertical"
                                            class="form-control" value="{{$socialLInk->whatsApp}}" name="whatsApp"
                                            placeholder="WhatsApp Number">
                                    </div>
                                    <button type="submit" class="btn btn-success">Update</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Dubai Address</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body" style="position: relative;">
                                <div class="row">
                                    <div class="col-12">
                                        <form action="{{route('admin.setting.office.location_update','dubai')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="first-name-vertical">TEL</label>
                                                <input type="text" id="first-name-vertical"
                                                    class="form-control" value="{{dubai_address()?dubai_address()->tel:''}}" name="tel"
                                                    placeholder="number">
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Mobile Number</label>
                                                <input type="text" id="first-name-vertical"
                                                    class="form-control" value="{{dubai_address()?dubai_address()->mobile:''}}" name="mobile"
                                                    placeholder="number">
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Address</label>
                                                <textarea id="first-name-vertical"
                                                    class="form-control" name="address"
                                                    placeholder="Address">{{dubai_address()?dubai_address()->address:''}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Map Link</label>
                                                    <textarea type="text" id="first-name-vertical"
                                                    class="form-control" name="map"
                                                    placeholder="Map Link"> {{dubai_address()?dubai_address()->map:''}}</textarea>
                                            </div>
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Sharjah Address</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body" style="position: relative;">
                                <div class="row">
                                    <div class="col-12">
                                        <form action="{{route('admin.setting.office.location_update','sharjah')}}" method="post">
                                            @csrf

                                            <div class="form-group">
                                                <label for="first-name-vertical">TEL</label>
                                                <input type="text" id="first-name-vertical"
                                                    class="form-control" value="{{sharjah_address()?sharjah_address()->tel:''}}" name="tel"
                                                    placeholder="number">
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Mobile Number</label>
                                                <input type="text" id="first-name-vertical"
                                                    class="form-control" value="{{sharjah_address()?sharjah_address()->mobile:''}}" name="mobile"
                                                    placeholder="number">
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Address</label>
                                                <textarea id="first-name-vertical"
                                                    class="form-control" name="address"
                                                    placeholder="Address">{{sharjah_address()?sharjah_address()->address:''}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Map Link</label>
                                                <textarea type="text" id="first-name-vertical"
                                                    class="form-control" name="map"
                                                    placeholder="Map Link"> {{sharjah_address()?sharjah_address()->map:''}}</textarea>
                                            </div>
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Abu Dabi Address</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body" style="position: relative;">
                                <div class="row">
                                    <div class="col-12">
                                        <form action="{{route('admin.setting.office.location_update','abu_dabi')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="first-name-vertical">TEL</label>
                                                <input type="text" id="first-name-vertical"
                                                    class="form-control" value="{{abu_dabi_address()?abu_dabi_address()->tel:''}}" name="tel"
                                                    placeholder="number">
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Mobile Number</label>
                                                <input type="text" id="first-name-vertical"
                                                    class="form-control" value="{{abu_dabi_address()?abu_dabi_address()->mobile:''}}" name="mobile"
                                                    placeholder="number">
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Address</label>
                                                <textarea id="first-name-vertical"
                                                    class="form-control" name="address"
                                                    placeholder="Address">{{abu_dabi_address()?abu_dabi_address()->address:''}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Map Link</label>

                                                    <textarea type="text" id="first-name-vertical"
                                                    class="form-control" name="map"
                                                    placeholder="Map Link"> {{abu_dabi_address()?abu_dabi_address()->map:''}}</textarea>
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
        </div>
    </div>
@endsection
@push('theme_js')
@endpush
@push('page_js')
@endpush
@push('custom_js')
@endpush
