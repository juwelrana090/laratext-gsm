@extends('layouts.frontend.mobile.master')
@push('css')
@endpush
@section('content')
    @include('layouts.frontend.mobile.parts.app_bar')
    <div class="container">
        <br>
        <h4 class="font-weight-bold">About us</h4>
        @if (pages()->page_name == 'about-us')
            {!! pages()->page_content !!}
        @endif
    </div>
@endsection
@push('js')
@endpush
