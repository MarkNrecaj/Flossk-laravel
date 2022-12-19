<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>

<body>
    @if (count($names))
    @foreach ($names as $name)
       {{$name}}
    @endforeach
    @else
        ska sen
    @endif
    

</body>

</html>