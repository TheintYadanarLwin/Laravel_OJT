@extends('posts.layout')
@section('title')
POST DETAIL
@endsection
@section('content')
    <h2>Post Detail</h2>
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table-latitude">


                <thead>
                    <th>Post Image</th>
                    <th>Post Title </th>
                    <th>Post Description</th>
                    <th>Posted Status</th>
                    <th>Category</th>
                    <th>Poseted Date</th>
                </thead>
                <tbody>

                    <tr>
                        <td>
                            @if ($post->image === null)
                                <img src="/test/default.png" width='100' height='100'
                                    class="img img-responsive">
                            @else
                                <img src="/images/{{ $post->image }}" width='100' height='100'
                                    class="img img-responsive">
                            @endif
                        </td>
                        <td> {{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>{{ $post->status }}</td>
                        <td>
                            @foreach ($post->categories as $category)
                            {{ $category->name }}
                            @if (!$loop->last)
                                ,<br>
                            @endif
                        @endforeach
                        </td>
                        <td>{{ $post->created_at->format('d/m/Y') }}</td>

                    </tr>

            </table>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        @endsection
