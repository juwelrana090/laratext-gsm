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
<div class="row">
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Users</h4>
            </div>
            <div class="card-content">
                <div class="card-body" style="position: relative;">
                    <div class="row">
                        <div class="col-12">
                           <form action="{{route('admin.users.update',$user->id)}}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="first-name-vertical">Name*</label>
                                    <input type="text" required id="first-name-vertical" value="{{$user->name}}" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Full Name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </span>
                                     @enderror
                                </div>
                                <div class="form-group">
                                    <label for="first-name-vertical">User Email*</label>
                                    <input type="email" value="{{$user->email}}" required id="first-name-vertical" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="User email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </span>
                                     @enderror
                                </div>
                                <div class="form-group">
                                    <label for="first-name-vertical">User phone</label>
                                    <input type="text" value="{{$user->phone}}" id="first-name-vertical" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="User phone">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </span>
                                     @enderror
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h5>Assing Role </h5>
                                        @php
                                           $UserAssingroles = $user->getRoleNames();
                                        @endphp
                                        @foreach ($roles as $key=>$role)
                                            <fieldset>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" {{$user->hasRole($role->name)?'checked':''}} value="{{$role->name}}" name="roles[]" id="assignAllPermissions{{$role->name}}">
                                                    <label class="custom-control-label" for="assignAllPermissions{{$role->name}}">{{$role->name}}</label>
                                                </div>
                                            </fieldset>
                                        @endforeach
                                    </div>
                                    <div class="col-lg-6">
                                        <h5>Profile </h5>
                                        <div class="avatar mr-1 avatar-xl">
                                            <img src="{{$user->image?asset($user->image):asset('backend/app-assets/images/portrait/small/avatar-s-12.jpg')}}" alt="avtar img holder">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="first-name-vertical">User Image</label>
                                    <input type="file" id="first-name-vertical" class="form-control @error('image') is-invalid @enderror" name="image">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </span>
                                     @enderror
                                </div>
                                <div class="form-group">
                                    <label for="first-name-vertical">Password*</label>
                                    <input type="password"  id="first-name-vertical" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="xxxxxxx">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </span>
                                     @enderror
                                </div>
                                <div class="form-group">
                                    <label for="first-name-vertical">Password Confirmation*</label>
                                    <input type="password"  id="first-name-vertical" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="xxxxxxx">
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </span>
                                     @enderror
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>

                           </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">User List</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="row">
                        @foreach ($users as $user)
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body text-center mx-auto">
                                            <div class="avatar avatar-xl">
                                                <img class="img-fluid" src="{{$user->image?asset($user->image):asset('backend/app-assets/images/portrait/small/avatar-s-12.jpg')}}" alt="img placeholder">
                                            </div>
                                            <div class="row m-0">
                                                <div class="col-sm-12 text-center">
                                                    <h4>{{$user->name}}</h4>
                                                </div>
                                                <div class="col-sm-12 text-center">
                                                    <p class="">
                                                        @foreach ($user->getRoleNames() as $userRole)
                                                            <span>{{$userRole}}</span>
                                                        @endforeach

                                                    </p>
                                                </div>
                                            </div>
                                            <button class="btn gradient-light-primary btn-block mt-1">Email: {{$user->email}}</button>
                                            <button class="btn gradient-light-primary btn-block mt-1">Phone: {{$user->phone}}</button>
                                            <div class="d-flex justify-content-between mt-2">
                                                <div class="uploads">
                                                    <a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-warning" title="Edit"><i class="feather icon-edit-1"></i></a>
                                                </div>
                                                <div class="followers">
                                                    <a href="#" class="btn btn-success" title="View User"><i class="feather icon-eye"></i></a>
                                                </div>
                                                @if (Auth::user()->id !== $user->id)
                                                <div class="following">
                                                    <a onclick="event.preventDefault();
                                                    document.getElementById('delete-user-{{$user->id}}').submit();" href="{{ route('admin.users.destroy',$user->id) }}"  class="btn btn-danger" title="Delete"><i class="feather icon-trash"></i></a>
                                                    <form id="delete-user-{{$user->id}}" action="{{ route('admin.users.destroy',$user->id) }}" method="POST" class="d-none">
                                                        @method('DELETE')
                                                        @csrf
                                                    </form>
                                                </div>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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

@endpush
