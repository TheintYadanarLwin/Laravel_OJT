@extends('posts.layout')
@section('title')
POST LIST
@endsection
@section('content')
        <h2 class="text-center">Post Lists</h2>
        <b-row>
            <b-col class="ml-3">
                <input type="text">
            </b-col>
            <b-col>
                <button type="submit" class="btn btn-primary ml-5">
                    <a class="text-white"> Search</a>
                </button>
            </b-col>
            <b-col>
                <button type="submit" class="btn btn-primary ml-5">
                    <a class="text-white" href="{{ route('posts.create') }}"> Add</a>
                </button>
            </b-col>
            <b-col>
                <button type="submit" class="btn btn-primary ml-5">
                    <a class="text-white"> UpLoad</a>
                </button>
            </b-col>
            <b-col>
                <button type="submit" class="btn btn-primary ml-5">
                    <a class="text-white"> Download</a>
                </button>
            </b-col>
        </b-row>
        @if ($message = Session::get('success'))
            <div class="alert alert-info text-success alert-dismissible fade show" role="alert">
                    {{$message}}
                <button type="button" class="btn-close" data-bs-dismiss="alert"  aria-label="Close"></button> 
            </div>
        @endif
        <div class="panel panel-default mt-5">
            <div class="panel-body">
                <table class="table-latitude">
                    <thead>
                        <th>Post Title </th>
                        <th>Post Description</th>
                        <th>Posted Use</th>
                        <th>Category</th>
                        <th>Poseted Date</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td> <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></td>
                                <td>{{ $post->description }}</td>
                                <td>{{ $post->status }}</td>
                                <td>
                                    @foreach($post->categories as $category)
                                    {{$category->name}}
                                    @endforeach
                                </td>
                                <td>{{ $post->created_at->format('d/m/Y') }}</td>
                            
                                <td><a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}">Edit</a></td>
                                <td>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
           
            {{-- Pagination --}}
            <div class="d-flex justify-content-center mt-5">
                {!! $posts->links() !!}
            </div>
        </div>
@endsection
