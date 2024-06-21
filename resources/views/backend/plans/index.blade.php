@extends('layouts.backend.master')
@section('title', 'Plans Settings')
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
        <div class="col-md-12 col-sm-12 mb-2">
            <h1>Plans Settings</h1>
        </div>

        <div class="col-md-3 col-sm-12">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <form action="{{ route('plans.update', 1) }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="1">
                        <div class="mb-1">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Plan Name"
                                value="{{ $plan_1->name }}" required>
                        </div>
                        <div class="mb-1">
                            <label for="contract" class="col-form-label">Contract</label>
                            <input type="text" class="form-control" id="contract" name="contract"
                                placeholder="Plan Contract" value="{{ $plan_1->contract }}" required>
                        </div>
                        <div class="mb-1">
                            <label for="price_month" class="col-form-label">Price Monthly</label>
                            <input type="number" class="form-control" id="price_month" name="price_month"
                                value="{{ $plan_1->price_month }}" required>
                        </div>
                        <div class="mb-1">
                            <label for="price_year" class="col-form-label">Price yearly</label>
                            <input type="number" class="form-control" id="price_year" name="price_year"
                                value="{{ $plan_1->price_year }}" required>
                        </div>


                        <div class="mb-1">
                            <h5>Description List</h5>
                        </div>

                        <div class="row mb-1" id="description_1">
                            <?php
                            $description = [];
                            if ($plan_1->description) {
                                $description = json_decode($plan_1->description);
                            }
                            ?>

                            @php
                                $i = 1;
                            @endphp

                            @foreach ($description as $item)
                                <div class="col-sm-12 mb-1" id="des_1_{{ $i }}">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <select name="des_check[]">
                                                    <option value="true"
                                                        @if ($item->show == 'true') selected @endif>Yes</option>
                                                    <option value="false"
                                                        @if ($item->show == 'false') selected @endif>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" name="des_title[]"
                                            value="{{ $item->title }}" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text" style="cursor:pointer"
                                                onclick="removeElement('des_1_{{ $i++ }}')">
                                                <i class="fa fa-trash text-danger" title="Delete"></i>
                                            </span>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>


                        <div class="mb-1">
                            <span class="btn btn-sm btn-success" id="add_1" title="Add More Description">
                                <i class="fa fa-plus"></i>
                            </span>
                        </div>

                        <div class="mb-1">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-12">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <form action="{{ route('plans.update', 2) }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="2">

                        <div class="mb-1">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Plan Name"
                                value="{{ $plan_2->name }}" required>
                        </div>
                        <div class="mb-1">
                            <label for="contract" class="col-form-label">Contract</label>
                            <input type="text" class="form-control" id="contract" name="contract"
                                placeholder="Plan Contract" value="{{ $plan_2->contract }}" required>
                        </div>
                        <div class="mb-1">
                            <label for="price_month" class="col-form-label">Price Monthly</label>
                            <input type="number" class="form-control" id="price_month" name="price_month"
                                value="{{ $plan_2->price_month }}" required>
                        </div>
                        <div class="mb-1">
                            <label for="price_year" class="col-form-label">Price yearly</label>
                            <input type="number" class="form-control" id="price_year" name="price_year"
                                value="{{ $plan_2->price_year }}" required>
                        </div>


                        <div class="mb-1">
                            <h5>Description List</h5>
                        </div>

                        <div class="row mb-1" id="description_2">
                            <?php
                            $description = [];
                            if ($plan_2->description) {
                                $description = json_decode($plan_2->description);
                            }
                            ?>

                            @php
                                $i = 1;
                            @endphp

                            @foreach ($description as $item)
                                <div class="col-sm-12 mb-1" id="des_2_{{ $i }}">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <select name="des_check[]">
                                                    <option value="true"
                                                        @if ($item->show == 'true') selected @endif>Yes</option>
                                                    <option value="false"
                                                        @if ($item->show == 'false') selected @endif>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" name="des_title[]"
                                            value="{{ $item->title }}" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text" style="cursor:pointer"
                                                onclick="removeElement('des_2_{{ $i++ }}')">
                                                <i class="fa fa-trash text-danger" title="Delete"></i>
                                            </span>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>


                        <div class="mb-1">
                            <span class="btn btn-sm btn-success" id="add_2" title="Add More Description">
                                <i class="fa fa-plus"></i>
                            </span>
                        </div>

                        <div class="mb-1">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-12">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <form action="{{ route('plans.update', 3) }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="3">
                        <div class="mb-1">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Plan Name" value="{{ $plan_3->name }}" required>
                        </div>
                        <div class="mb-1">
                            <label for="contract" class="col-form-label">Contract</label>
                            <input type="text" class="form-control" id="contract" name="contract"
                                placeholder="Plan Contract" value="{{ $plan_3->contract }}" required>
                        </div>
                        <div class="mb-1">
                            <label for="price_month" class="col-form-label">Price Monthly</label>
                            <input type="number" class="form-control" id="price_month" name="price_month"
                                value="{{ $plan_3->price_month }}" required>
                        </div>
                        <div class="mb-1">
                            <label for="price_year" class="col-form-label">Price yearly</label>
                            <input type="number" class="form-control" id="price_year" name="price_year"
                                value="{{ $plan_3->price_year }}" required>
                        </div>


                        <div class="mb-1">
                            <h5>Description List</h5>
                        </div>

                        <div class="row mb-1" id="description_3">
                            <?php
                            $description = [];
                            if ($plan_3->description) {
                                $description = json_decode($plan_3->description);
                            }
                            ?>

                            @php
                                $i = 1;
                            @endphp

                            @foreach ($description as $item)
                                <div class="col-sm-12 mb-1" id="des_3_{{ $i }}">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <select name="des_check[]">
                                                    <option value="true"
                                                        @if ($item->show == 'true') selected @endif>Yes</option>
                                                    <option value="false"
                                                        @if ($item->show == 'false') selected @endif>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" name="des_title[]"
                                            value="{{ $item->title }}" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text" style="cursor:pointer"
                                                onclick="removeElement('des_3_{{ $i++ }}')">
                                                <i class="fa fa-trash text-danger" title="Delete"></i>
                                            </span>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>


                        <div class="mb-1">
                            <span class="btn btn-sm btn-success" id="add_3" title="Add More Description">
                                <i class="fa fa-plus"></i>
                            </span>
                        </div>

                        <div class="mb-1">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-12">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <form action="{{ route('plans.update', 4) }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="4">
                        <div class="mb-1">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Plan Name" value="{{ $plan_4->name }}" required>
                        </div>
                        <div class="mb-1">
                            <label for="contract" class="col-form-label">Contract</label>
                            <input type="text" class="form-control" id="contract" name="contract"
                                placeholder="Plan Contract" value="{{ $plan_4->contract }}" required>
                        </div>
                        <div class="mb-1">
                            <label for="price_month" class="col-form-label">Price Monthly</label>
                            <input type="number" class="form-control" id="price_month" name="price_month"
                                value="{{ $plan_4->price_month }}" required>
                        </div>
                        <div class="mb-1">
                            <label for="price_year" class="col-form-label">Price yearly</label>
                            <input type="number" class="form-control" id="price_year" name="price_year"
                                value="{{ $plan_4->price_year }}" required>
                        </div>


                        <div class="mb-1">
                            <h5>Description List</h5>
                        </div>

                        <div class="row mb-1" id="description_4">
                            <?php
                            $description = [];
                            if ($plan_4->description) {
                                $description = json_decode($plan_4->description);
                            }
                            ?>

                            @php
                                $i = 1;
                            @endphp

                            @foreach ($description as $item)
                                <div class="col-sm-12 mb-1" id="des_4_{{ $i }}">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <select name="des_check[]">
                                                    <option value="true"
                                                        @if ($item->show == 'true') selected @endif>Yes</option>
                                                    <option value="false"
                                                        @if ($item->show == 'false') selected @endif>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" name="des_title[]"
                                            value="{{ $item->title }}" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text" style="cursor:pointer"
                                                onclick="removeElement('des_4_{{ $i++ }}')">
                                                <i class="fa fa-trash text-danger" title="Delete"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>


                        <div class="mb-1">
                            <span class="btn btn-sm btn-success" id="add_4" title="Add More Description">
                                <i class="fa fa-plus"></i>
                            </span>
                        </div>

                        <div class="mb-1">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
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
    <script type="text/javascript">
        function removeElement(id) {
            var element = document.getElementById(id);
            element.remove();
        }

        $(document).ready(function() {
            let currentTimestamp = Date.now();

            $("#add_1").click(function() {
                $("#description_1").append(`
                        <div class="col-sm-12 mb-1" id="des_1_${currentTimestamp}">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <select name="des_check[]">
                                                <option value="true">Yes</option>
                                                <option selected value="false">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" name="des_title[]" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text" style="cursor:pointer"
                                            onclick="removeElement('des_1_${currentTimestamp}')">
                                            <i class="fa fa-trash text-danger" title="Delete"></i>
                                        </span>
                                    </div>
                                </div>
                        </div>
                `);
            });

            $("#add_2").click(function() {
                $("#description_2").append(`
                        <div class="col-sm-12 mb-1" id="des_2_${currentTimestamp}">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <select name="des_check[]">
                                                <option value="true">Yes</option>
                                                <option selected value="false">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" name="des_title[]" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text" style="cursor:pointer"
                                            onclick="removeElement('des_2_${currentTimestamp}')">
                                            <i class="fa fa-trash text-danger" title="Delete"></i>
                                        </span>
                                    </div>
                                </div>
                        </div>
                `);
            });

            $("#add_3").click(function() {
                $("#description_3").append(`
                        <div class="col-sm-12 mb-1" id="des_3_${currentTimestamp}">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <select name="des_check[]">
                                                <option value="true">Yes</option>
                                                <option selected value="false">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" name="des_title[]" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text" style="cursor:pointer"
                                            onclick="removeElement('des_3_${currentTimestamp}')">
                                            <i class="fa fa-trash text-danger" title="Delete"></i>
                                        </span>
                                    </div>
                                </div>
                        </div>
                `);
            });

            $("#add_4").click(function() {
                $("#description_4").append(`
                        <div class="col-sm-12 mb-1" id="des_4_${currentTimestamp}">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <select name="des_check[]">
                                                <option value="true">Yes</option>
                                                <option selected value="false">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" name="des_title[]" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text" style="cursor:pointer"
                                            onclick="removeElement('des_4_${currentTimestamp}')">
                                            <i class="fa fa-trash text-danger" title="Delete"></i>
                                        </span>
                                    </div>
                                </div>
                        </div>
                `);
            });
        })
    </script>
@endpush
