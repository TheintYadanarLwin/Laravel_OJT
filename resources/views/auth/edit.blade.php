@extends('auth.layout')
@section('title')
    EDIT Profile
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right mt-5">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <form action="{{ route('auth.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h3 class="card-header text-center">Update Profile</h3>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Update Name:</strong>
                    <div class='field'>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name') ? old('name') : Auth::user()->name }}">
                        @error('name')
                            <div class="text-danger mt-1 mb-1">*{{ $message }}*</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <strong>Update Name</strong>
                    <div class='field'>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ old('email') ? old('email') : Auth::user()->email }}">
                        @error('email')
                            <div class="text-danger mt-1 mb-1">*{{ $message }}*</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class='field'>
                        <input type="hidden" id="passcode" class="form-control" name="password"
                            placeholder="Enter your Password"
                            value="{{ old('password') ? old('password') : Auth::user()->password }}">
                    </div>
                </div>
            </div>
    </form>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </div>
    <a class="btn btn-primary mt-5" href="{{ route('auth.change-password') }}">Change Password</a>
@endsection
