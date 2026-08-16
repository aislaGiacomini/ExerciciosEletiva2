@extends('layout')
@section('titulo', 'Exercicio 11')
@section('conteudo')
        <h1>Execicio 11</h1>
        <form method="post" action="/exer11resp">
        <div class="mb-3">
            <label for="raio" class="form-label">Digite o raio do circulo</label>
            <input type="number" id="raio" name="raio" class="form-control" required="">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($perimetro)
            <p>Perimetro do circulo: {{$perimetro}}</p>
        @endisset

@endsection