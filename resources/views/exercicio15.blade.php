@extends('layout')
@section('titulo', 'Exercicio 15')
@section('conteudo')
        <h1>Execicio 15</h1>
        <form method="post" action="/exer15resp">
        <div class="mb-3">
            <label for="num1" class="form-label">Digite o seu peso</label>
            <input type="float" id="num1" name="num1" class="form-control" required="">
        </div>
                    <div class="mb-3">
                    <label for="num2" class="form-label">Digite a sua altura </label>
                    <input type="float" id="num2" name="num2" class="form-control" required="">
                    </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($imc)
            <p>Imc: {{ number_format($imc, 2, ',', '.') }}
        @endisset

@endsection