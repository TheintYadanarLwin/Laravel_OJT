@extends('auth.layout')
@section('title')
    Login
@endsection
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <div class="card">
                <h3 class="card-header text-center">Login</h3>
                <div class="card-body">
                    <form method="POST" action="{{ route('login.custom') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Email" id="email" class="form-control" name="email"
                                required autofocus>
                            @error('email')
                                <div class="text-danger mt-1 mb-1">*{{ $message }}*</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" placeholder="Password" id="password" class="form-control"
                                name="password" required>
                            @error('password')
                                <div class="text-danger mt-1 mb-1">*{{ $message }}*</div>
                            @enderror
                        </div>
                        <div class="d-grid mx-auto">
                            <button type="submit" class="btn btn-dark btn-block">Signin</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
