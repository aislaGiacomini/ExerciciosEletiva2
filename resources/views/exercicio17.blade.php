@extends('layout')
@section('titulo', 'Exercicio 17')
@section('conteudo')
        <h1>Execicio 17 - Calculo de Juros Simples</h1>
        <form method="post" action="/exer17resp">
        <div class="mb-3">
            <label for="num1" class="form-label">Digite o capital</label>
            <input type="float" id="num1" name="num1" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="num2" class="form-label">Digite a taxa de juros</label>
            <input type="float" id="num2" name="num2" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="num3" class="form-label">Digite o periodo</label>
            <input type="float" id="num3" name="num3" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($resultado)
            <p>Juros Simples: {{ number_format($resultado, 2, ',', '.') }}
        @endisset

@endsection