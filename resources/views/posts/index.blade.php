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
                                <td> <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">{{ $post->title }}</a></td>
                                <td>{{ $post->description }}</td>
                                <td>{{ $post->status }}</td>
                                <td>{{ $post->created_at->format('d/m/Y') }}</td>
                                <td><a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a></td>
                                <td>
                                    <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
   
                        
                                        {{-- <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a> --}}
                       
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

          
            <div class="d-flex">
                    {!! $posts->links() !!}
            </div>
               
        </div>
    </div>
   
</body>
</html>
