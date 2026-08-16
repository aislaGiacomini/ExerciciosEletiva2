@extends('layout')
@section('titulo', 'Exercicio 20')
@section('conteudo')
        <h1>Execicio 20 - Calculo de velocidade média</h1>
        <form method="post" action="/exer20resp">
        <div class="mb-3">
            <label for="distancia" class="form-label">Digite a distancia</label>
            <input type="float" id="distancia" name="distancia" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="tempo" class="form-label">Digite o tempo</label>
            <input type="float" id="tempo" name="tempo" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($velocidadeMedia)
            <p>Velocidade Media: {{number_format($velocidadeMedia, 2, '.', ',')}}
        @endisset

@endsection