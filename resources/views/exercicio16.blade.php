@extends('layout')
@section('titulo', 'Exercicio 16')
@section('conteudo')
        <h1>Execicio 16 - Calculo de desconto</h1>
        <form method="post" action="/exer16resp">
        <div class="mb-3">
            <label for="num1" class="form-label">Digite o preco do produto</label>
            <input type="float" id="num1" name="num1" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="num2" class="form-label">Digite o percentual de desconto</label>
            <input type="float" id="num2" name="num2" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($resultado)
            <p>Valor Final: {{ number_format($resultado, 2, ',', '.') }}
        @endisset

@endsection