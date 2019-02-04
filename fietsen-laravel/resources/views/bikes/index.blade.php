<!DOCTYPE html>
<html>



<body>
<h1> Bikes </h1>

    @foreach ($bikesArray as $bike)
    <li> {{$bike->id}}</li>
    <li> {{$bike->omschrijving}}</li>
    <li> {{$bike->prijs}}</li>
    @endforeach
</body>
</html>
