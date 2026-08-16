@extends('layout')
@section('titulo', 'Exercicio 7')
@section('conteudo')
        <h1>Execicio 7</h1>
        <form method="post" action="/exer7resp">
        <div class="mb-3">
            <label for="tempF" class="form-label">Digite a temperatura em Fahrenheit</label>
            <input type="number" id="tempC" name="tempF" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($tempC)
            <p>Temperatura em Celsius: {{ number_format($tempC, 2, ',', '.') }}
        @endisset
@endsection