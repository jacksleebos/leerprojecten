@extends('layout')

@section('content')
<h1 class="omschrijving">{{$bikes->omschrijving}}</h1>
<div class="content">
        {{$bikes->prijs}} <br>

</div>

<p>
<a href="/bikes/{{ $bikes->id }}/edit"> Edit </a>
</p>

@endsection
