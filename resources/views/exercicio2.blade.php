@extends('layout')
@section('titulo', 'Exercicio 2')
@section('conteudo')
        <h1>Execicio 2</h1>
        <form method="post" action="/exer2resp">
        <div class="mb-3">
            <label for="num1" class="form-label">Digite o primeiro numero</label>
            <input type="number" id="num1" name="num1" class="form-control" required="">
        </div>
                    <div class="mb-3">
                    <label for="num2" class="form-label">Digite o segundo numero </label>
                    <input type="number" id="num2" name="num2" class="form-control" required="">
                    </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($subtracao)
            <p>Subtracao: {{$subtracao}}
        @endisset

@endsection