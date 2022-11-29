<!DOCTYPE html>
<html>

<head>
    <title>Posts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table-latitude">
                    <caption>Posts</caption>
                    <button type="submit" class="btn btn-primary ml-3">
                        <a href="{{ route('posts.create') }}"> Add</a>
                    </button>
                    <thead>
                        <th>Post Title </th>
                        <th>Post Description</th>
                        <th>Posted Use</th>
                        <th>Poseted Date</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->description }}</td>
                                <td>{{ $post->status }}</td>
                                <td>{{ $post->created_at->format('d/m/Y') }}</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
