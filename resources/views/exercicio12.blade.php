@extends('layout')
@section('titulo', 'Exercicio 12')
@section('conteudo')
        <h1>Execicio 12 - Calculo com expoente</h1>
        <form method="post" action="/exer12resp">
        <div class="mb-3">
            <label for="num1" class="form-label">Digite um numero</label>
            <input type="number" id="num1" name="num1" class="form-control" required="">
        </div>
                    <div class="mb-3">
                    <label for="num2" class="form-label">Digite um numero para o expoente</label>
                    <input type="number" id="num2" name="num2" class="form-control" required="">
                    </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($resultado)
            <p>Resultado: {{$resultado}}</p>
        @endisset

@endsection