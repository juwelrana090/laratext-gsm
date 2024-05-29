@extends('layouts.frontend.desktop.master')
@push('css')
    <style>
        .title_block {
            font: 400 19px/22px "Raleway", sans-serif;
            color: #000;
            border-left: 5px solid rgba(251, 221, 18, 0.6);
            background: #ededed;
            text-transform: uppercase;
            padding: 15px;
            margin: 0 0 20px 0;
            border-left-color: rgba(27, 144, 225, 0.6);
        }

        .dhtml {
            border-top: 1px solid #d6d4d4;
        }

        .dhtml li {
            position: relative;
        }

        .dhtml li li a {
            font-weight: normal;
            color: #777777;
        }

        .dhtml li a {
            font-weight: bold;
            color: #333333;
            display: block;
            font-size: 13px;
            line-height: 20px;
            padding: 5px 30px 5px 19px;
            border-bottom: 1px solid #d6d4d4;
        }

        .content_scene_cat {
            border-top: 1px solid #d6d4d4;
            line-height: 19px;
            margin: 0 0 26px 0;
        }

        .content_scene_cat .content_scene_cat_bg {
            padding: 20px 0 0 0;
        }

        .img-responsive {
            display: block;
            width: 100%;
            max-width: 100%;
            height: auto;
        }

        .content_scene_cat span.category-name {
            font: 600 25px/30px "Raleway", sans-serif;
            margin-bottom: 12px;
            display: inline-block;
        }

        .page-heading.product-listing {
            border-bottom: none;
            margin-bottom: 0;
        }

        .page-heading {
            font: 600 18px/22px "Raleway", sans-serif;
            color: #555454;
            text-transform: uppercase;
            padding: 0 0 17px 0;
            margin: 0 0 30px;
            border-bottom: 1px solid #d6d4d4;
            overflow: hidden;
        }

        .page-heading span.heading-counter {
            font: bold 13px/22px "Raleway", sans-serif;
            float: right;
            color: #333333;
            text-transform: none;
            margin-bottom: 10px;
        }

        #subcategories {
            border-top: 1px solid #d6d4d4;
            padding: 15px 0 0 0;
        }

        #subcategories p.subcategory-heading {
            font-weight: bold;
            color: #333333;
            margin: 0 0 15px 0;
        }

        #subcategories ul {
            margin: 0 0 0 -20px;
        }

        #subcategories ul li {
            float: left;
            width: 128px;
            margin: 0 0 13px 20px;
            text-align: center;
            height: 202px;
        }

        #subcategories ul li .subcategory-image {
            padding: 0 0 8px 0;
        }

        #subcategories ul li .subcategory-image a {
            display: block;
            border: 1px solid #d6d4d4;
            padding: 9px;
            position: relative;
            background: white;
            border-color: #EDEDED;
            -moz-transition: all 0.25s ease;
            -o-transition: all 0.25s ease;
            -webkit-transition: all 0.25s ease;
            transition: all 0.25s ease;
        }

        #subcategories ul li .subcategory-image a img {
            max-width: 100%;
            vertical-align: top;
            height: auto;
        }

        #subcategories ul li .subcategory-name {
            font: 600 15px/18px "Raleway", sans-serif;
            color: #666;
            text-transform: uppercase;
        }

        #subcategories ul li .subcategory-name:hover {
            color: #000;
            -moz-transition: color 0.1s ease;
            -o-transition: color 0.1s ease;
            -webkit-transition: color 0.1s ease;
            transition: color 0.1s ease;
        }

        #subcategories ul li:hover .subcategory-image a {
            border-width: 7px;
        }

        #subcategories ul li h5 {
            margin: 0;
            font-family: 'Droid Sans', sans-serif !important;
            font-size: 14px;
        }

        a:hover,
        a:focus {
            text-decoration: none;
            outline: none;
        }

        #accordion .panel {
            border: none;
            border-radius: 3px;
            box-shadow: none;
            margin-bottom: 15px;
        }

        #accordion .panel-heading {
            padding: 0;
            border: none;
            border-radius: 3px;
        }

        #accordion .panel-title a {
            display: block;
            padding: 12px 15px;
            background: #fff;
            font-size: 14px;
            font-weight: bold;
            color: #2b2b2b;
            border: 1px solid #ececec;
            box-shadow: 0 0 10px rgba(0, 0, 0, .05);
            position: relative;
            transition: all 0.5s ease 0s;
        }

        #accordion .panel-title a.collapsed {
            box-shadow: none;
            color: #676767;
        }

        #accordion .panel-title a:before,
        #accordion .panel-title a.collapsed:before {
            content: "+";
            font-family: "Font Awesome 5 Free";
            width: 25px;
            height: 25px;
            line-height: 28px;
            font-size: 14px;
            font-weight: 900;
            color: #f81ac1;
            text-align: center;
            position: absolute;
            top: 8px;
            right: 15px;
            transform: rotate(135deg);
            transition: all 0.3s ease 0s;
        }

        #accordion .panel-title a.collapsed:before {
            color: #676767;
            transform: rotate(0);
        }

        #accordion .panel-title a:after {
            content: "";
            width: 1px;
            height: 100%;
            background: #ececec;
            position: absolute;
            top: 0;
            right: 55px;
        }

        #accordion .panel-body {
            padding: 10px 15px 15px;
            border: none;
            font-size: 14px;
            color: #615f5f;
            line-height: 27px;
        }

    </style>
@endpush
@section('content')
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-lg-3">
                <h4 class="title_block">
                    {{ $category->name }}
                </h4>
                <ul class="tree dhtml">
                    <li class="last">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            @foreach (CarTypes() as $cat)
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#collapseTwo{{ $cat->id }}"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                {{ $cat->name }}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo{{ $cat->id }}" class="panel-collapse collapse {{$category->id==$cat->id?'show':''}}" role="tabpanel"
                                        aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <p>
                                            <ul style="display: block;">

                                                @foreach ($cat->cars->groupBy('fuel_type_id') as $brand_id => $car)
                                                    <li>
                                                        <a href="{{ route('car.search.by.car_type_id.brand_id', [$category->id, $brand_id]) }}"
                                                            title="">
                                                            {{getBrandName($brand_id)? getBrandName($brand_id)->name:'' }}
                                                        </a>
                                                    </li>
                                                @endforeach

                                            </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </li>

                </ul>
            </div>
            <div class="col-lg-8">
                <div class="content_scene_cat">
                    <!-- Category image -->
                    <div class="content_scene_cat_bg row">
                        <div class="category-image hidden-xs col-xs-12 col-sm-5 col-md-4 col-lg-3">
                            <img class="img-responsive" src="{{ asset($category->image) }}" alt="{{ $category->name }}">
                        </div>
                        <div class="cat_desc  col-xs-12 col-sm-7 col-md-8 col-lg-9">
                            <span class="category-name">
                                {{ $category->name }} </span>
                            <div id="category_description_short" class="rte">
                                <p>{{ $category->description }}</p>
                            </div>

                        </div>
                    </div>
                </div>
                <h1 class="page-heading product-listing">
                    <span class="cat-name">{{ $category->name }} </span>
                    {{-- <span class="heading-counter">There are 1171 products.</span> --}}
                </h1>
                <div id="subcategories">
                    {{-- <p class="subcategory-heading">Subcategories</p> --}}
                    <ul class="clearfix">
                        @foreach ($cars as $brand_id => $car)
                            <li>
                                <div class="subcategory-image">
                                    <a href="{{ route('car.search.by.car_type_id.brand_id', [$category->id, $brand_id]) }}"
                                        title=" {{ getBrandName($brand_id)->name }}" class="img">
                                        <img class="replace-2x"
                                            src=" {{ asset(getBrandName($brand_id)->second_image) }}"
                                            alt=" {{ getBrandName($brand_id)->name }}">
                                    </a>
                                </div>
                                <h5>
                                    <a class="subcategory-name"
                                        href="{{ route('car.search.by.car_type_id.brand_id', [$category->id, $brand_id]) }}"
                                        title="ACURA"> {{ getBrandName($brand_id)->name }}</a>
                                </h5>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
