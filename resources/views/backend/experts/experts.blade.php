@extends('layouts.backend.master')
@section('title', 'Experts List')
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
            height: 100px;
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
                    <h4 class="card-title">Experts List</h4>

                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 pl-0">
                                <table class="table data-thumb-view">
                                    <thead>
                                        <tr>
                                            <th>Contact Person Name</th>
                                            <th>Contact mobile</th>
                                            <th>Contact email</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($experts as $expert)
                                            <tr>
                                                <td class="product-category">{{ $expert->contact_person_name }}</td>
                                                <td class="product-category">{{ $expert->mobile }}</td>
                                                <td class="product-category">{{ $expert->email }}</td>
                                                <td class="product-category">{{ $expert->title }}</td>
                                                <td class="product-category"></td>
                                                <td class="product-category">{{ $expert->price }}</td>
                                                <td class="product-category">{{ $expert->status }}</td>
                                                <td class="product-category">
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-secondary dropdown-toggle"
                                                            type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            Status
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item"
                                                                href="{{ route('business.status_update', $business->id) }}?status=active">Active</a>
                                                            <a class="dropdown-item"
                                                                href="{{ route('business.status_update', $business->id) }}?status=pending">Pending</a>
                                                            <a class="dropdown-item"
                                                                href="{{ route('business.status_update', $business->id) }}?status=inactive">Inactive</a>
                                                            <a class="dropdown-item"
                                                                href="{{ route('business.status_update', $business->id) }}?status=rejected">Rejected</a>
                                                        </div>
                                                    </div>
                                                    <a href="{{ route('experts.edit', $expert->id) }}"
                                                        class="btn btn-sm btn-primary text-white">edit</a>
                                                    <a href="#" class="btn btn-sm btn-danger text-white"
                                                        data-toggle="modal"
                                                        data-target="#typeDelete{{ $expert->id }}">x</a>
                                                    <div class="modal fade" id="typeDelete{{ $expert->id }}"
                                                        tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Delete
                                                                        Type</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are You Sure You want to delete " {{ $expert->title }}"
                                                                    Type?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <a onclick="event.preventDefault();
                                                                  document.getElementById('delete-form-{{ $expert->id }}').submit();"
                                                                        href="{{ route('experts.destroy', $expert->id) }}"
                                                                        class="btn btn-danger text-white"
                                                                        data-toggle="modal"
                                                                        data-target="#colorDelete">Delete</a>
                                                                    <form id="delete-form-{{ $expert->id }}"
                                                                        action="{{ route('experts.destroy', $expert->id) }}"
                                                                        method="POST" class="d-none">
                                                                        @method('DELETE')
                                                                        @csrf
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                            <div class="col-lg-12 mb-5">
                                {{ $experts->links() }}
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
