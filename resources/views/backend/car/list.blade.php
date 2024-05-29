@extends('layouts.backend.master')
@section('title', 'Product List')
@push('meta')

@endpush
@push('theme_css')
@endpush
@push('page_css')

@endpush
@push('custom_css')
    <style>
        .bg_image {
            width: 100%;
            position: relative;
        }

        .conditional_image {
            position: absolute;
            top: 0;
            left: 0%;
            margin: 0 auto;
            width: 100% !important;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #dbdbdbb0;
        }

        .conditional_image img {
            width: 75px;
            height:100px;
            object-fit: contain;
            filter: contrast(120%);
        }

    </style>
@endpush
@push('head')
@endpush
@section('breadcrumb')
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Product List</h4>
                    
                    <h4 class="card-title">Total Product: {{count($cars)}}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 pl-0">
                                <table class="table data-thumb-view">
                                    <thead>
                                        <tr>
                                            <th >Image</th>
                                            <th >Title</th>
                                            <th >Year</th>
                                            <th >Menufacturer Brands</th>
                                            <th >Vehicle Brands</th>
                                            <th >Category</th>
                                            <th >Part No</th>
                                            <th >Origin</th>
                                            <th >Application</th>
                                            <th >ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cars as $car)
                                            <tr>
                                                <td class="product-img" >
                                                    @if (!empty($car->CarImage[0]))
                                                        @if ($car->pub_place == 'Sold')
                                                        <div class="bg_image">
                                                            <img src="{{ thumbnail($car->CarImage[0]->image)}}"
                                                                alt="Img placeholder" style="width:100px;height:75px" >
                                                            <div class="conditional_image">
                                                                <img src="{{ asset('image/sold.png') }}" style="width:100px;height:75px"  alt="" srcset="">
                                                            </div>
                                                        </div>
                                                        @elseif ($car->pub_place == 'Reserved')
                                                             <div class="bg_image">
                                                                <img src="{{ thumbnail($car->CarImage[0]->image)}}"
                                                                    alt="Img placeholder" style="width:100px;height:75px">
                                                                <div class="conditional_image">
                                                                    <img src="{{ asset('image/reserved.png') }}" style="width:100px;height:75px"  alt="" srcset="">
                                                                </div>
                                                            </div>
                                                        @else
                                                            <img src="{{ thumbnail($car->CarImage[0]->image)}}"
                                                                alt="Img placeholder" style="width:100px">
                                                        @endif
                                                    @endif

                                                </td>
                                                <td class="product-name">
                                                    <p> {{ $car->title }}</p>
                                                    {{-- <p> {{ Str::limit($car->general_dsc,150, '...')}}</p> --}}
                                                </td>
                                                <td class="product-category">{{ $car->year }}</td>
                                                <td class="product-category">{{$car->Brand?$car->Brand->name:'' }}</td>
                                                <td class="product-category">{{$car->FuelType?$car->FuelType->name:'' }}</td>
                                                <td class="product-category">{{$car->CarType?$car->CarType->name:'' }}</td>
                                                <td class="product-category">{{$car->part_no}}</td>
                                                <td class="product-category">{{$car->origin}}</td>
                                                <td class="product-category">{{$car->voltage}}</td>
                                                <td class="product-action d-flex align-items-center">
                                                    <a href="{{route('admin.cars.edit',$car->id)}}">
                                                        <span class="action-edit btn-sm btn-primary"><i
                                                            class="feather icon-edit"></i></span>
                                                    </a>
                                                    <span class="action-delete btn-sm btn-danger" style="margin: 8px 0;cursor: pointer;" data-toggle="modal"  data-target="#carDelete{{$car->id}}"><i
                                                            class="feather icon-trash"></i></span>
                                                    <span class="action-delete btn-sm btn-success"><i
                                                            class="feather icon-eye"></i></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="7" class="text-center">
                                                    <a href="{{route('assign_showing_place',[$car->id,'new_arrivals'])}}" class="btn btn-sm btn-primary">
                                                    @if($car->pub_place == 'new_arrivals') <i class="feather icon-check-square"></i> @else @endif New Arrivals</a>
                                                    <a href="{{route('assign_showing_place',[$car->id,'best_selling'])}}" class="btn btn-sm btn-success">
                                                        @if($car->pub_place == 'best_selling') <i class="feather icon-check-square"></i> @else @endif
                                                        Best Selling</a>
                                                        @if($car->pub_place == 'Sold')
                                                            <a href="{{route('assign_showing_place',[$car->id,'Unsold'])}}" class="btn btn-sm btn-danger">
                                                                 <i class="feather icon-check-square"></i> Unsold
                                                            </a>
                                                            @else
                                                            <a href="{{route('assign_showing_place',[$car->id,'Sold'])}}" class="btn btn-sm btn-danger">
                                                                Sold
                                                            </a>
                                                        @endif
                                                        @if($car->pub_place == 'Reserved')
                                                            <a href="{{route('assign_showing_place',[$car->id,'Unreserved'])}}" class="btn btn-sm btn-warning">
                                                                 <i class="feather icon-check-square"></i>Unreserved

                                                            </a>
                                                        @else
                                                         <a href="{{route('assign_showing_place',[$car->id,'Reserved'])}}" class="btn btn-sm btn-warning">
                                                             Reserved
                                                        </a>
                                                        @endif
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="carDelete{{$car->id}}" tabindex="-1" aria-labelledby="myModalLabel6" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are You Sure You want to delete?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <a onclick="event.preventDefault();
                                                      document.getElementById('delete-form-{{ $car->id }}').submit();"
                                                                href="{{ route('admin.cars.destroy', $car->id) }}"
                                                                class="btn btn-danger text-white" data-toggle="modal"
                                                                data-target="#colorDelete">Delete</a>
                                                            <form id="delete-form-{{ $car->id }}"
                                                                action="{{ route('admin.cars.destroy', $car->id) }}" method="POST"
                                                                class="d-none">
                                                                @method('DELETE')
                                                                @csrf
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                            <div class="col-lg-12 mb-5">
                                {{-- {{$cars->links()}} --}}
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
    <script>
        var dataThumbView = $(".data-thumb-view").DataTable({
            responsive: false,
            columnDefs: [{
                orderable: true,
                targets: 0,
            }],
            dom: '<"top"<"actions action-btns"B><"action-filters"lf>><"clear">rt<"bottom"<"actions">p>',
            oLanguage: {
                sLengthMenu: "_MENU_",
                sSearch: ""
            },
            aLengthMenu: [
                [4, 10, 15, 20],
                [4, 10, 15, 20]
            ],
            select: {
                style: "multi"
            },
            order: [
                [1, "asc"]
            ],
            bInfo: false,
            pageLength: 4,
            buttons: [

            ],
            initComplete: function(settings, json) {
                $(".dt-buttons .btn").removeClass("btn-secondary")
            }
        });
    </script>
@endpush
