<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>movies forum</title>
</head>
<body>
<h1 style="text-align:center">Movies </h1>

<ul>
    @foreach($movies as $movie)
    <a href="{{route('recommended.movies')}}" name="show all" classs="btn btn-success"> recommend movies for tonight></a>
    <li id="li_{{$movie->id}}"> {{$movie->type}} {{$movie->name}}

    </ul>
    <form>
    @if (!$movies->status)
    <a href="{{route('recommended.movies')}}" name="show all" classs="btn btn-success"> recommend movies for tonight></a>
</form>
@endif
    </li>
    @endforeach

</body>

</html>
