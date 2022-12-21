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
    {{Session::get('message')}}
@endif
    
    <form action="/post" method="post">
        @csrf
        User:<input type="text" name="author_id">
        Title:<input type="text" name="title">
        Des:<input type="text" name="description">
        Slug:<input type="text" name="slug">
        Published:<input type="date" name="published">
        <input type="submit">
    </form>

</body>

</html>