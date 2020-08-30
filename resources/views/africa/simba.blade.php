@extends('layouts.app')

@section('content')

@if($message != '')
    <h2>{{$message}}</h2>
@endif

<h1 class="container-sm" style="font-size:{{$aukstis}}px;">SIMBA</h1>

@endsection

@section('title')

SIMBos puslapis

@endsection