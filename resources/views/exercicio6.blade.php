@extends('layout')
@section('titulo', 'Exercicio 6')
@section('conteudo')
        <h1>Execicio 6</h1>
        <form method="post" action="/exer6resp">
        <div class="mb-3">
            <label for="tempC" class="form-label">Digite a temperatura em Celsius</label>
            <input type="number" id="tempC" name="tempC" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($tempF)
            <p>Temperatura em Fahrenheit: {{$tempF}}
        @endisset
@endsection