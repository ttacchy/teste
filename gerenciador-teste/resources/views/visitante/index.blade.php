@extends('layouts.app')
@section('title', 'Listagem de visitantes')
@section('content')
        <h1>Visitantes</h1>
        <ul>
            @foreach($visitantes as $visitante)
                <li><a href="http://localhost:8000/visitantes/{{ $visitante->id }}">{{ $visitante->nome }}</a></li>
            @endforeach
        </ul>
@endsection
