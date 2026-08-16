<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function abrirFormExer1(){
        return view('exercicio1');
    }

    public function respostaExer1(Request $request){
        $num1 = $request->num1;
        $num2 = $request->num2;

        $soma = $num1 + $num2;
        return view('exercicio1', ['soma' => $soma]);
    }

    public function abrirFormExer2(){
        return view('exercicio2');
    }

    public function respostaExer2(Request $request){
        $num1 = $request->num1;
        $num2 = $request->num2;

        $subtracao = $num2 - $num1;
        return view('exercicio2', ['subtracao' => $subtracao]);
    }

    public function abrirFormExer3(){
        return view('exercicio3');
    }

    public function respostaExer3(Request $request){
        $num1 = $request->num1;
        $num2 = $request->num2;

        $multiplicacao = $num1 * $num2;
        return view('exercicio3', ['multiplicacao' => $multiplicacao]);
    }

    public function abrirFormExer4(){
        return view('exercicio4');
    }

    public function respostaExer4(Request $request){
        $num1 = $request->num1;
        $num2 = $request->num2;

        if($num2 == 0){
            return view('exercicio4', ['erro' => 'Não é possível dividir por zero.']);
        }
        $divisao = $num1 / $num2;
        return view('exercicio4', ['divisao' => $divisao]);
    }
}
