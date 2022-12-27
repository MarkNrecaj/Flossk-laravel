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



    {{-- @if ($errors->has('author_id'))
        {{ $errors->first('author_id') }}
    @endif

    @if ($errors->has('author_id'))
    {{ $errors- >first('author_id') }}
    @endif

    @if ($errors->has('author_id'))
    {{ $errors->first('author_id') }}
    @endif

    @if ($errors->has('author_id'))
    {{ $errors->first('author_id') }}
    @endif --}}



    {{-- @foreach ($messages->all() as $message)
        {{ $message }}
    @endforeach --}}

    <form action="/post" method="post">
        @csrf
        User:<input type="text" name="author_id">
        Title:<input type="text" name="title">
        Des:<input type="text" name="description">
        Slug:<input type="text" name="slug">
        Published:<input type="date" name="published">
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

        @foreach ($posts as $post)
            <tr>
                <td>{{ $post['author_id'] }}</td>
                <td>{{ $post['title'] }}</td>
                <td>{{ $post['description'] }}</td>
                <td>{{ $post['slug'] }}</td>
                <td>{{ $post['published'] }}</td>
            </tr>
        @endforeach

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
