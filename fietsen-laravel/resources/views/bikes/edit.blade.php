@extends('layout')
@section('content')
<h1 class="title">Wijzig Bikes </h1>
<form method="POST" action="/bikes/{{$bikes->id}}" style= "margin-bottom: 1em;">
    @method('PATCH')
    @csrf
    <div class="field">
        <label class="label" for="prijs">Prijs</label>
        <div class="control">
        <input type="text" class="input" name="prijs" placeholder="Prijs" value="{{ $bikes->prijs}}">
        </div>
    </div>



    <div class="field">
        <label class="label" for="omschrijving">Omschrijving</label>
        <div class="control">
            <textarea name="" class="textarea"> {{ $bikes->omschrijving}}</textarea>
        </div>
    </div>


<form>
    <div class="field">
         <div class="control">
            <button type="submit" class="button is-link">Update Bike</button>
         </div>
    </div>
</form>

<form method="POST" action="/bikes/{{$bike->id}}">
    @method('DELETE')
    @csrf

            <div class="field">
                <div class="control">
                <button type="submit" class="button">Delete Bike</button>
                </div>
            </div>

</form>
@endsection
