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

    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Update Post Image:</strong>
                    <div class='field'>
                        <input type='file' name='image' id='image' class='image' class="form-control"
                            style="display: none;" value="{{ old('image') ? old('image') : $post->image }}" />
                        <label for="image" style="display: block; height: 150px; width: 150px;">
                            @if ($post->image === null)
                                <img id="preview_image" src="/img/default.png" alt="default image" class="img-thumbnail" />
                            @else
                                <img id="preview_image" src="/images/{{ $post->image }}" alt="{{ $post->image }}"
                                    class="img-thumbnail" />
                            @endif
                        </label>
                        @error('image')
                        </div>
                        <div class="text-danger mt-1 mb-1">*{{ $message }}*</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Post Title:</strong>
                    <input type="text" name="title" value="{{ old('title') ? old('title') : $post->title }}"
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
                        value="{{ old('description') ? old('description') : $post->description }}" class="form-control"
                        placeholder="Post Description">
                    @error('description')
                        <div class="text-danger mt-1 mb-1">*{{ $message }}*</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Post Status:</strong>
                    <input type="text" name="status" value="{{ old('status') ? old('status') : $post->status }}"
                        class="form-control" placeholder="Post Status">
                    @error('status')
                        <div class="text-danger mt-1 mb-1">*{{ $message }}*</div>
                    @enderror
                </div>
            </div>
            <strong>Choose Category</strong>
            <div>
                <select class="form-select mt-3" name="category[]" placeholder="Category" multiple>
                    @foreach ($categories as $index => $category)
                        <option value="{{ $category->id }}" @if (in_array($category->id, old('categories', $oldCategoryIds))) selected @endif>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
    </form>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </div>
@endsection
