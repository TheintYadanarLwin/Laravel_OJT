@extends('posts.layout')
@section('title')
    EDIT POST
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <form action="{{ route('posts.update', $posts['post']->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Post Title:</strong>
                    <input type="text" name="title" value="{{ old('title') ? old('title') : $posts['post']->title }}"
                        class="form-control" placeholder="Post Title">
                    @error('title')
                        <div class="text-danger mt-1 mb-1">*{{ $message }}*</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <input type="text" name="description"
                        value="{{ old('description') ? old('description') : $posts['post']->description }}"
                        class="form-control" placeholder="Post Description">
                    @error('description')
                        <div class="text-danger mt-1 mb-1">*{{ $message }}*</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Post Status:</strong>
                    <input type="text" name="status"
                        value="{{ old('status') ? old('status') : $posts['post']->status }}" class="form-control"
                        placeholder="Post Status">
                    @error('status')
                        <div class="text-danger mt-1 mb-1">*{{ $message }}*</div>
                    @enderror
                </div>
            </div>
            <strong>Choose Category</strong>
            <div>
                <select class="form-select mt-3" name="category[]" placeholder="Category" multiple>
                    @foreach ($posts['categories'] as $index => $category)
                        <option value="{{ $category->id }}" @if (in_array($category->id, old('categories', $oldCategoryIds))) selected @endif>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                <div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-5">
                        <div class="form-group">
                            <strong>Post Image:</strong>

                            <input type="file" name="image" class="form-control"
                                placeholder="{{ old('image') ? old('image') : $posts['post']->image }}"
                                value="{{ old('image') ? old('image') : $posts['post']->image }}">

                            <img src="/images/{{ $posts['post']->image }}" width='100' height='100'
                                class="img img-responsive mt-3">

                            @error('image')
                                <div class="text-danger mt-1 mb-1">*{{ $message }}*</div>
                            @enderror
                        </div>
                    </div>

                </div>
    </form>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </div>
@endsection
