@extends('layout')
@section('content')
<h1 class="title">Edit Bikes </h1>
<form>

    <div class="field">
        <label class="label" for="description">Description</label>
        <div class="control">
            <input type="text" class="input" name="title" placeholder="Title">
        </div>
    </div>

    <div class="field">
        <label class="label" for="description">Description></label>
        <div class="control">
            <textarea name="" class="textarea"></textarea>
        </div>
    </div>

    <div class="field">
         <div class="control">
         <button type="submit" class="button is-link">Update Bike</button>
         </div>
        </div>

</form>
@endsection
