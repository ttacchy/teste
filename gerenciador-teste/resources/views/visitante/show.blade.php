@extends('layouts.app')
@section('title', '$visitante->nome')
@section('content')
    <h1>Visitante {{$visitante->nome}}</h1>
    <ul>
        <li>Nome: {{$visitante->nome}}</li>
        <li>Data: {{$visitante->data}}</li>
        <li>Horário Entrada: {{$visitante->horaEntrada}}</li>
        <li>Horário Saída: {{$visitante->horaSaida}}</li>
        <li>Departamento: {{$visitante->departamento}}</li>
        <li>Adicionado em: {{$visitante->created_at}}</li>
    </ul>
    <a href="javascript:history.go(-1)">Voltar</a>
@endsection
