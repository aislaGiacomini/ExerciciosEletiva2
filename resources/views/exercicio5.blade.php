@extends('layout')
@section('titulo', 'Exercicio 5')
@section('conteudo')
        <h1>Execicio 5</h1>
        <form method="post" action="/exer5resp">
        <div class="mb-3">
            <label for="num1" class="form-label">Digite a primeira nota</label>
            <input type="number" id="num1" name="num1" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="num2" class="form-label">Digite a segunda nota </label>
            <input type="number" id="num2" name="num2" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="num3" class="form-label">Digite a terceira nota </label>
            <input type="number" id="num3" name="num3" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($media)
            <p>Media: {{ number_format($media, 2, ',', '.') }}
        @endisset
@endsection