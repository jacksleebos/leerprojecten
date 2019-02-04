<!DOCTYPE html>
<html>



<body>
<h1> create new bikes Project </h1>
 
<form method="POST" action="/bikes">
    {{ csrf_field() }}
    <div>
        <input type="text" name="title"  placeholder="Bike title">
    </div>
    <div>
        <textarea name="beschrijving" placeholder="Bike beschrijving"></textarea>
    </div>
    <div>
        <button type="submit">Create Bike</button>
    </div>
</form>

@foreach ($bikesArray as $bike)

<li> {{$bike->title}}</li>

@endforeach

</body>
</html>
