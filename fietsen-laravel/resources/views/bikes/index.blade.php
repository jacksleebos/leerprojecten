<!DOCTYPE html>
<html>
<head>

</head>
<body>
<h1> Bikes </h1>
<ul>
    @foreach ($bikesArray as $bike)
        <li>
             <a href ="/bikes/{{$bike->id}}">
                {{$bike->omschrijving}}
            </a>
        </li><br>
    @endforeach
</ul>
</body>
</html>
