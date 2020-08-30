@extends('layouts.app')

@section('content')

    @if ($suma2 == 0)
    <h2>Negalima dalinti is nulio!</h2>
    @else
    <h1>Skaiciaus {{$suma1}} ir skaiciaus {{$suma2}}</h1>
    <h1 class="container-sm" style="font-size: 70px; color: green;">SUMA yra {{$suma1/$suma2}}</h1>
    @endif


@endsection

@section('title')

Sumos puslapis

@endsection