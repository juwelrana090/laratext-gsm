@extends('layouts.frontend.mobile.master')
@push('css')
    <style>
        .auto_completed_box {
            position: absolute;
            max-width: 90%;
            background-color: #fff;
            width: 100%;
            min-height: 30px;
            border-radius: 5px;
            max-height: 75vh;
            overflow-y: scroll;
        }

        .auto_completed_box ul li {
            cursor: pointer;
            min-height: 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid rgb(235, 233, 233);
        }

    </style>
@endpush
@section('content')
    @include('layouts.frontend.mobile.parts.app_bar')
    <div class="search mt-3" style="padding: 10px">
        <div class="mt-5">
            <form method="GET" action="{{ route('search.brand.model.title') }}">
                <input type="text" class="form-control" name="search" id="search_input" placeholder="Search..........">
                <button type="submit" style="padding: 10px 20px;border-radius: 5px;" class="btn btn-primary">Search</button>
            </form>
        </div>
        <div class="auto_completed_box">
            {{-- <ul class="ulList"></ul> --}}
            <ul class="list-group list-group-flush mt-5">
                @if (count($cars) > 0)
                    <div class="cardContentMobile searchPage" style="overflow: hidden">
                        @forelse ($cars as $Car)
                            <a href="{{ route('car.details', $Car->id) }}">
                                <div class="mobileCard">
                                    <div class="mobileCardImg">
                                        @if (count($Car->CarImage) > 0)
                                            @if ($Car->pub_place == 'Sold')
                                                <div class="bg_image">
                                                    <img src="{{ thumbnail($Car->CarImage[0]->image) }}" alt="" srcset="">
                                                    <div class="conditional_image">
                                                        <img src="{{ asset('image/sold.png') }}" alt="" srcset="">
                                                    </div>
                                                </div>
                                            @elseif ($Car->pub_place == 'Reserved')
                                                <div class="bg_image">
                                                    <img src="{{ thumbnail($Car->CarImage[0]->image) }}"
                                                        alt="{{ $Car->title }}" srcset="">
                                                    <div class="conditional_image">
                                                        <img src="{{ asset('image/reserved.png') }}" alt="" srcset="">
                                                    </div>
                                                </div>
                                            @else
                                                <img src="{{ thumbnail($Car->CarImage[0]->image) }}" alt="" srcset="">
                                            @endif
                                        @endif
                                    </div>
                                    <div class="mobileCardDetails">
                                        <h6 class="mb-0 template_primary_color">
                                            {{ $Car->CarType ? $Car->CarType->name : '' }}
                                        </h6>
                                        <p class="template_dark_color font-weight-bold">
                                            {{ Str::limit($Car->title, 15, '...') }}</p>
                                        {{-- <p class="template_grey_color"> {{ $Car->year }} • {{ $Car->km }} km</p> --}}
                                    </div>
                                </div>
                            </a>
                        @empty
                            <p>Your search did not match any documents.</p>
                        @endforelse
                    </div>
                @endif
            </ul>
        </div>
    </div>
@endsection
@push('js')
    {{-- <script>
        $('#search_input').keyup(function() {
            let typeInput = $('#search_input').val();
            $('.auto_completed_box').css('display', 'block')
            let url = '/search/model/brand/title/' + typeInput;
            $.ajax(url, {
                success: function(data) {
                    console.log(data)
                    $('.ulList').empty();
                    let list = data;
                    var html = "";
                    if (list.length == 0) {
                        html += `<li>
                        No data found!
                    </li>`
                    } else {
                        for (var i = 0; i < list.length; i++) {
                            html += `<li>
                        <a href="/product/details/${data[i].id}/${data[i].slug}">${list[i].title}</a>

                    </li>`
                        }
                    }
                    $('.ulList').append(html);

                }
            });
            if (typeInput === "") {
                $('.auto_completed_box').css('display', 'none')
            }
        });
    </script> --}}
@endpush
