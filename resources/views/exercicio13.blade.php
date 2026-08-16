@extends('layout')
@section('titulo', 'Exercicio 13')
@section('conteudo')
        <h1>Execicio 13 - Conversão para centimetros</h1>
        <form method="post" action="/exer13resp">
        <div class="mb-3">
            <label for="metros" class="form-label">Digite o numero em metros</label>
            <input type="number" id="metros" name="metros" class="form-control" required="">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($centimetros)
            <p>Centimetros: {{$centimetros}}</p>
        @endisset

@endsection