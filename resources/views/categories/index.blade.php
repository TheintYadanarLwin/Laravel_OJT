<!DOCTYPE html>
<html>

<head>
    <title>Categories List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">OJT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active ml-3" aria-current="page" href="{{ route('posts.index') }}">POST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-3" href="{{ route('categories.index') }}">CATEGORY</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h2 class="text-center">Categories Lists</h2>
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
                    <a class="text-white" href="{{ route('categories.create') }}"> Add</a>
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
        <div class="panel panel-default mt-5">
            <div class="panel-body">
                <table class="table-latitude">
                    <thead>
                        <th>Category ID </th>
                        <th>Category Name</th>
                        <th>Created Date</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td> <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a></td>
                                <td>{{ $category->created_at->format('d/m/Y') }}</td>
                                <td><a class="btn btn-primary" href="{{ route('categories.edit', $category->id) }}">Edit</a></td>
                                <td>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
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
                {!! $categories->links() !!}
            </div>
        </div>
    </div>

</body>

</html>
