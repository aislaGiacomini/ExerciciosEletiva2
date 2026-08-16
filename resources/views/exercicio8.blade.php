@extends('layout')
@section('titulo', 'Exercicio 8')
@section('conteudo')
        <h1>Execicio 8 - Calculo da area do retângulo</h1>
        <form method="post" action="/exer8resp">
        <div class="mb-3">
            <label for="altura" class="form-label">Digite a altura do retângulo</label>
            <input type="number" id="altura" name="altura" class="form-control" required="">
        </div>
                    <div class="mb-3">
                    <label for="largura" class="form-label">Digite a largura do rentângulo</label>
                    <input type="number" id="largura" name="largura" class="form-control" required="">
                    </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($area)
            <p>Area do retângulo: {{$area}}</p>
        @endisset

@endsection