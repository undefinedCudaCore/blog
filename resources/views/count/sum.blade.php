@extends('layouts.app')

@section('content')

{{-- @if($message != '')
    <h2>{{$message}}</h2>
@endif --}}
<h1>Skaiciaus {{$suma1}} ir skaiciaus {{$suma2}}</h1>
<h1 class="container-sm" style="font-size: 70px; color: green;">SUMA yra {{$suma1+$suma2}}</h1>

@endsection

@section('title')

Sumos puslapis

@endsection