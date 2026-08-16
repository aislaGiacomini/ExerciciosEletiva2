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

    public function abrirFormExer5(){
        return view('exercicio5');
    }

    public function respostaExer5(Request $request){
        $num1 = $request->num1;
        $num2 = $request->num2;
        $num3 = $request->num3;
        
        $media = ($num1 + $num2 + $num3) / 3;
        return view('exercicio5', ['media' => $media]);
    }

    public function abrirFormExer6(){
        return view('exercicio6');
    }

    public function respostaExer6(Request $request){
        $tempC = $request->tempC;
        
        $tempF = ($tempC * 1.8 ) + 32;
        return view('exercicio6', ['tempF' => $tempF]);
    }

    public function abrirFormExer7(){
        return view('exercicio7');
    }

    public function respostaExer7(Request $request){
        $tempF = $request->tempF;
        
        $tempC = ($tempF - 32) / 1.8;
        return view('exercicio7', ['tempC' => $tempC]);
    }

    public function abrirFormExer8(){
        return view('exercicio8');
    }

    public function respostaExer8(Request $request){
        $altura = $request->altura;
        $largura = $request ->largura;
        
        $area = $altura * $largura;
        return view('exercicio8', ['area' => $area]);
    }

    public function abrirFormExer9(){
        return view('exercicio9');
    }

    public function respostaExer9(Request $request){
        $raio = $request->raio;
        
        $area = 3.14 * $raio * $raio;
        return view('exercicio9', ['area' => $area]);
    }

    public function abrirFormExer10(){
        return view('exercicio10');
    }

    public function respostaExer10(Request $request){
        $altura = $request->altura;
        $largura = $request ->largura;
        
        $perimetro = 2 * ($altura + $largura);
        return view('exercicio10', ['perimetro' => $perimetro]);
    }

    public function abrirFormExer11(){
        return view('exercicio11');
    }

    public function respostaExer11(Request $request){
        $raio = $request->raio;
        
        $perimetro = 2 * 3.14 * $raio ;
        return view('exercicio11', ['perimetro' => $perimetro]);
    }

    public function abrirFormExer12(){
        return view('exercicio12');
    }

    public function respostaExer12(Request $request){
        $num1 = $request->num1;
        $num2 = $request->num2;
        
        $resultado = $num1 ** $num2;
        return view('exercicio12', ['resultado' => $resultado]);
    }

    public function abrirFormExer13(){
        return view('exercicio13');
    }

    public function respostaExer13(Request $request){
        $metros = $request->metros;
        
        $centimetros = $metros * 100;
        return view('exercicio13', ['centimetros' => $centimetros]);
    }

    public function abrirFormExer14(){
        return view('exercicio14');
    }

    public function respostaExer14(Request $request){
        $valor = $request->valor;
        
        $milhas = $valor /  1.609;
        return view('exercicio14', ['milhas' => $milhas]);
    }

    public function abrirFormExer15(){
        return view('exercicio15');
    }

    public function respostaExer15(Request $request){
        $num1 = $request->num1;
        $num2 = $request->num2;

        $imc = $num1 / ($num2 ** 2);
        return view('exercicio15', ['imc' => $imc]);
    }

    public function abrirFormExer16(){
        return view('exercicio16');
    }

    public function respostaExer16(Request $request){
        $num1 = $request->num1;
        $num2 = $request->num2;

        $desconto = $num1 * ($num2 / 100);
        $resultado = $num1 - $desconto;
        return view('exercicio16', ['resultado' => $resultado]);
    }
}
