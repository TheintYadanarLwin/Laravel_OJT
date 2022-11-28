<!DOCTYPE html>
    <html>

    <head>
        <title>View Posts</title>
    </head>

    <body>
        <h2> Fetching Posts From Database</h2>
        <table border="1">
            <tr>
                <td>Post Title </td>
                <td>Post Description</td>
                <td>Posted Use</td>
                <td>Poseted Date</td>
                <td></td>
                <td></td>

            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                    <td>{{ $post->status }}</td>
                    <td></td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            @endforeach
        </table>
    </body>

    </html>
