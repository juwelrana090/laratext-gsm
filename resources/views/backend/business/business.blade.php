@extends('layouts.backend.master')
@section('title', 'Businesses List')
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
                    <h4 class="card-title">Businesses List</h4>

                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 pl-0">
                                <table class="table data-thumb-view">
                                    <thead>
                                        <tr>
                                            <th>Company name</th>
                                            <th>Company mobile</th>
                                            <th>Company email</th>
                                            <th>Business Price</th>
                                            <th>Business Type</th>
                                            <th>Category</th>
                                            <th>Business hours</th>
                                            <th>Featured</th>
                                            <th>Status</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($businesses as $business)
                                            <tr>
                                                <td class="product-category">{{ $business->company_name }}</td>
                                                <td class="product-category">{{ $business->company_mobile }}</td>
                                                <td class="product-category">{{ $business->company_email }}</td>
                                                <td class="product-category">{{ $business->business_price }}</td>
                                                <td class="product-category">{{ $business->business_type }}</td>
                                                <td class="product-category">{{ $business->business_category_title }}</td>
                                                <td class="product-category">{{ $business->business_hours }}</td>
                                                <td class="product-category text-capitalize">
                                                    {{ $business->is_featured ? 'Yes' : 'No' }}
                                                </td>
                                                <td class="product-category text-capitalize">{{ $business->status }}</td>
                                                <td class="d-flex justify-content-cente gap-3" style="gap: 5px">
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
                                                    <a href="{{ route('business.edit', $business->id) }}"
                                                        class="btn btn-sm btn-primary text-white">edit</a>
                                                    <a href="#" class="btn btn-sm btn-danger text-white"
                                                        data-toggle="modal"
                                                        data-target="#typeDelete{{ $business->id }}">x</a>
                                                    <div class="modal fade" id="typeDelete{{ $business->id }}"
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
                                                                    Are You Sure You want to delete
                                                                    {{ $business->post_title }}
                                                                    Type?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <a onclick="event.preventDefault();
                                                                  document.getElementById('delete-form-{{ $business->id }}').submit();"
                                                                        href="{{ route('business.destroy', $business->id) }}"
                                                                        class="btn btn-danger text-white"
                                                                        data-toggle="modal"
                                                                        data-target="#colorDelete">Delete</a>
                                                                    <form id="delete-form-{{ $business->id }}"
                                                                        action="{{ route('business.destroy', $business->id) }}"
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
                                <!-- Pagination Links -->
                                {{ $businesses->links() }}
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
