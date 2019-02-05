<!DOCTYPE html>
<html>



<body>
<h1> create new bikes Project </h1>

<form method="POST" action="/bikes/index">
    {{ csrf_field() }}
    <div>
        <input type="text" name="prijs"  placeholder="Bike prijs">
    </div>
    <div>
        <textarea name="omschrijving" placeholder="Bike omschrijving"></textarea>
    </div>
    <div>
        <button type="submit">Create Bike</button>
    </div>
</form>


</body>
</html>
