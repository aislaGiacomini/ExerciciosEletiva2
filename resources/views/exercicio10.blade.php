@extends('layout')
@section('titulo', 'Exercicio 10')
@section('conteudo')
        <h1>Execicio 10 - Calculo do perimetro do retângulo</h1>
        <form method="post" action="/exer10resp">
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
        @isset($perimetro)
            <p>Perimetro do retângulo: {{$perimetro}}</p>
        @endisset

@endsection