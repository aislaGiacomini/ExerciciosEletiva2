@extends('layout')
@section('titulo', 'Exercicio 9')
@section('conteudo')
        <h1>Execicio 9</h1>
        <form method="post" action="/exer9resp">
        <div class="mb-3">
            <label for="raio" class="form-label">Digite o raio do circulo</label>
            <input type="number" id="raio" name="raio" class="form-control" required="">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($area)
            <p>Area do circulo: {{$area}}</p>
        @endisset

@endsection