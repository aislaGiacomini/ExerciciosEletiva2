@extends('layout')
@section('titulo', 'Exercicio 14')
@section('conteudo')
        <h1>Execicio 14</h1>
        <form method="post" action="/exer14resp">
        <div class="mb-3">
            <label for="valor" class="form-label">Digite o numero em quilômetros</label>
            <input type="number" id="valor" name="valor" class="form-control" required="">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($milhas)
            <p>Milhas: {{number_format($milhas, 2, '.', ',')}}</p>
        @endisset

@endsection