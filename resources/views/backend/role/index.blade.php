@extends('layouts.backend.master')
@section('title','Role')
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
@php
    $UserAccess = Auth::user();
@endphp
<div class="row">
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create Role</h4>
            </div>
            <div class="card-content">
                <div class="card-body" style="position: relative;">
                    <div class="row">
                        <div class="col-12">
                            @if ($UserAccess->can('role.create'))
                                    <form action="{{route('admin.roles.store')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="first-name-vertical">Role Name</label>
                                            <input type="text" id="first-name-vertical" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Role Name">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <span>{{ $message }}</span>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-lg-12">
                                                <h4>Assign Permissions</h4>

                                                <fieldset>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" value="1" name="customCheck" id="assignAllPermissions">
                                                        <label class="custom-control-label" for="assignAllPermissions"> <h6>Assign All Permissions</h6></label>
                                                    </div>
                                                </fieldset>
                                                <hr>
                                                @php
                                                    $i =1;
                                                @endphp
                                                @foreach ($permission_groups as $group)
                                                    @php
                                                        $permissions = App\Models\User::getPermissionGroupsName($group->group_name);
                                                        $j =1;
                                                    @endphp
                                                    <div class="row mb-1">
                                                        <div class="col-4">
                                                            <fieldset>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" value="{{ $group->group_name}}"  id="assignAllGroupPermissions{{$i}}" onclick="checkPermissionByGroup('role-{{$i}}-management-checkbox',this)">
                                                                    <label class="custom-control-label" for="assignAllGroupPermissions{{ $i}}"><h6>{{ $group->group_name}}</h6></label>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-8 role-{{$i}}-management-checkbox">
                                                            @foreach ($permissions as $permission)
                                                                <fieldset>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" name="permissions[]" class="custom-control-input"  value="{{$permission->name}}" name="name" id="customCheck{{$permission->id}}">
                                                                        <label class="custom-control-label" for="customCheck{{$permission->id}}">{{$permission->name}}</label>
                                                                    </div>
                                                                </fieldset>
                                                                @php $j++; @endphp
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    @php $i++; @endphp
                                                @endforeach

                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success">Create</button>
                                </form>
                            @else
                                <h6>You don not have permission to create role</h6>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Role List</h4>
            </div>
            <div class="card-content">
                <div class="card-body" style="position: relative;">
                     <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th style="width:5%">SL</th>
                                                <th style="width:15%">Name</th>
                                                <th scope="col">Permissions</th>
                                                <th style="width:18%">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($roles as $key=>$role)
                                            @if ($role->id!==1)
                                                <tr>
                                                    <th scope="row">{{$key+1}}</th>
                                                    <td>{{$role->name}}</td>
                                                    <td>
                                                        @foreach ($role->permissions as $perm )
                                                            <div class="badge badge-danger font-weight-bold">{{$perm->name}}</div>
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        @if ($UserAccess->can('role.edit'))
                                                            <a href="{{route('admin.roles.edit',$role->id)}}" class="btn btn-sm btn-primary text-white">edit</a>
                                                        @endif
                                                        @if ($UserAccess->can('role.delete'))
                                                            <a onclick="event.preventDefault();
                                                            document.getElementById('delete-form-{{$role->id}}').submit();" href="{{ route('admin.roles.destroy',$role->id) }}"  class="btn btn-sm btn-danger text-white">x</a>
                                                            <form id="delete-form-{{$role->id}}" action="{{ route('admin.roles.destroy',$role->id) }}" method="POST" class="d-none">
                                                                @method('DELETE')
                                                                @csrf
                                                            </form>
                                                        @endif

                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach

                                        </tbody>
                                    </table>
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
    $('#assignAllPermissions').click(function(){
        if($(this).is(':checked')){
            $('input[type=checkbox]').prop('checked',true);
        }else{
            $('input[type=checkbox]').prop('checked',false);
        }
    })
    function checkPermissionByGroup(className,checkThis){
        const groupIdName = $('#'+checkThis.id);
        const classCheckBox = $('.'+className+' input');

        if(groupIdName.is(':checked')){
            classCheckBox.prop('checked',true);
        }else{
            classCheckBox.prop('checked',false);
        }
    }
</script>
@endpush
