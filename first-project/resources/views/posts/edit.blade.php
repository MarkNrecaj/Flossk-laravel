<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>

<body>
    @if (Session::has('message'))
        {{ Session::get('message') }}
    @endif

    <form action="/posts/{{ $post['id'] }}" method="post">
        @csrf
        @method("PATCH")
        User:<input type="text" name="author_id" value="{{ old('author_id', $post['author_id']) }}">
        Title:<input type="text" name="title" value="{{ old('title', $post['title']) }}">
        Des:<input type="text" name="description" value="{{ old('description', $post['description']) }}">
        Slug:<input type="text" name="slug" value="{{ old('slug', $post['slug']) }}">
        Published:<input type="date" name="published" value="{{ old('published', $post['published']) }}">
        <input type="submit">
    </form>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <br>

    <table>
        <thead>
            <th>Author id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Slug</th>
            <th>Published</th>
        </thead>

            <tr>
                <td>{{ $post['author_id'] }}</td>
                <td>{{ $post['title'] }}</td>
                <td>{{ $post['description'] }}</td>
                <td>{{ $post['slug'] }}</td>
                <td>{{ $post['published'] }}</td>
            </tr>

    </table>

</body>

</html>

<style>
    table,
    th,
    td {
        border: 1px solid black;
        padding: 5px;
    }
</style>
