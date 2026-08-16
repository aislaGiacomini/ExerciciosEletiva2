@extends('layout')
@section('titulo', 'Exercicio 18')
@section('conteudo')
        <h1>Execicio 18 - Calculo de Montante</h1>
        <form method="post" action="/exer18resp">
        <div class="mb-3">
            <label for="capital" class="form-label">Digite o capital</label>
            <input type="float" id="capital" name="capital" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="taxa" class="form-label">Digite a taxa de juros</label>
            <input type="float" id="taxa" name="taxa" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="periodo" class="form-label">Digite o periodo</label>
            <input type="float" id="periodo" name="periodo" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($montante)
            <p>Montante: {{ number_format($montante, 2, ',', '.') }}
        @endisset

@endsection