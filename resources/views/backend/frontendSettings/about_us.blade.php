@extends('layouts.backend.master')
@section('title', 'About Us')
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
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update About Us Page</h4>
                </div>
                <div class="card-content">
                    <div class="card-body" style="position: relative;">
                        <form action="{{ route('admin.frontend.about_us.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-1">
                                <label for="exampleFormControlSelect1" class="font-weight-bold">About Us Content</label>
                                <textarea name="general_dsc" class="form-control ckeditor" id="exampleFormControlTextarea1" rows="6">
                                @if (pages()->page_name=='about-us')
                                    {!!pages()->page_content!!}
                                @endif
                            </textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('theme_js')
@endpush
@push('page_js')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endpush
@push('custom_js')
@endpush
