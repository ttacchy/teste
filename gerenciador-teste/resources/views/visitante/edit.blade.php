@extends('layouts.app')
@section('title', 'Adicionar visitante')
@section('content')
    <h1>Criar um novo visitante</h1>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="put" action="update.blade.php">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="nome" class="form-control">
        </div>
        <div class="form-group">
            <label for="data">Data</label>
            <input type="text" name="data" value="data" class="form-control">
        </div>
        <div class="form-group">
            <label for="horaEntrada">Horário de Entrada</label>
            <input type="text" name="horaEntrada" value="horaEntrada" class="form-control">
        </div>
        <div class="form-group">
            <label for="horaSaida">Horário de Saída</label>
            <input type="text" name="horaSaida" value="horaSaida" class="form-control">
        </div>
        <div class="form-group">
            <label for="departamento">Departamento</label>
            <input type="text" name="departamento" value="departamento" class="form-control">
        </div>
        <button class="btn btn-default">Alterar</button>
    </form>>
@endsection


