@extends('posts.layout')
@section('title')
    CREATE POST
@endsection
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
                        <strong>Choose Post Image:</strong>
                        <input type="file" id="image" style="display:none;" name="image" class="form-control"
                            placeholder="Post Image">
                        <label for="image" style="display: block; height: 150px; width: 150px;">
                            <img id="preview_image" src="/img/default.png" alt="default image" class="img-thumbnail" />
                        </label>
                        @error('image')
                            <div class="text-danger mt-1 mb-1">*{{ $message }}*</div>
                        @enderror
                    </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                    <div class="form-group">
                        <strong>Post Title:</strong>
                        <input type="text" name="title" class="form-control" placeholder="Post Title"
                            value="{{ old('title') }}">
                        @error('title')
                            <div class="text-danger mt-1 mb-1">*{{ $message }}*</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Post Description:</strong>
                        <input type="text" name="description" class="form-control" placeholder="Post Description"
                            value="{{ old('description') }}">
                        @error('description')
                            <div class="text-danger mt-1 mb-1">*{{ $message }}*</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Post Status:</strong>
                        <input type="text" name="status" class="form-control" placeholder="Post Status"
                            value="{{ old('status') }}">
                        @error('status')
                            <div class="text-danger mt-1 mb-1">*{{ $message }}*</div>
                        @enderror
                    </div>
                    <strong>Choose Category</strong>
                    <div>
                        <select class="form-select mt-3" name="category[]" placeholder="Category" multiple>
                            @foreach ($categories as $index => $category)
                                <option value="{{ $category->id }}" {{ $index === 0 ? 'selected' : '' }}>
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>
    </form>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </div>
    </div>
@endsection
