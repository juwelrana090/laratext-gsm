@extends('layouts.frontend.desktop.master')
@push('css')
@endpush
@section('content')
    <div class="container" style="height: 50vh">
        <div class="service_page_section p-4">
            <div class="service_section_title">
                <h4 class="font-weight-bold">About us</h4>
                @if (pages()->page_name == 'about-us')
                    {!! pages()->page_content !!}
                @endif
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
