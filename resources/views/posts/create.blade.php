@extends('posts.layout')
  
@section('content')
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Posts</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Post Title:</strong>
                        <input type="text" name="title" class="form-control" placeholder="Post Title" value="{{old('title')}}">
                        @error('title')
                            <div class="text-danger mt-1 mb-1">*{{ $message }}*</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Post Description:</strong>
                        <input type="text" name="description" class="form-control" placeholder="Post Description" value="{{old('description')}}">
                        @error('description')
                            <div class="text-danger mt-1 mb-1">*{{ $message }}*</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Post Status:</strong>
                        <input type="text" name="status" class="form-control" placeholder="Post Status" value="{{old('status')}}">
                        @error('status')
                            <div class="text-danger mt-1 mb-1">*{{ $message }}*</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                  </div>
            </div>
        </form>
        @endsection