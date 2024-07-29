<?php
    //instanciar
    $num1 = 0; //variavel global
    $num2 = 0;

    function somar($num1,$num2){
        return $num1 + $num2;
    }//fim do somar

    function subtrair($num1,$num2){
        return $num1 - $num2;
    }//fim da subtrair

    function multiplicar($num1,$num2){
        return $num1 * $num2;
    }//fim da multiplicar
    
    function dividir($num1,$num2){
        if($num2 == 0){
            return "Não é possível dividir por zero";
        }else{
            return $num1 / $num2;
        }    
    }//fim da divisao

    function potencia($num1,$num2){
        if($num2<0){
            return "Não é possível calcular a potencia de um numero negativo";
        }else{
        return pow($num1,$num2); //potencia
        }

    }

    function raiz($num1){
        if($num1>=0){
        return sqrt($num1); //raiz
        }else{
            return "Não é possível calcular a raiz de um numero negativo";
        }
    }

    function tabuada($num1){
        $i = 0;
        $resultado = 0;
        for($i; $i<=10;$i++){
            $resultado .= "<br>".$num1." * ". $i." = ".($num1*$i);
    
        }
        return $resultado; 
    }

    function areaRetangulo($base,$altura){
        if(($base <= 0) || ($altura <= 0)){
        return "Não é possível calcular a área de um retângulo com base e altura negativas";
        }else{
            return $base * $altura;
        }
    }

    function delta($a,$b,$c){
        $delt = pow($b,2)-4*$a*$c;
        
        if($delt < 0){
            return "Não é possível calcular a raiz de um numero negativo";
        }else{
            return $delt;
        }
    }

    function x1($a,$b,$c){
        $d = delta($a,$b,$c);
        if($d == -1){
            return "Não é possível calcular a raiz de um numero negativo";
        }else{
            return (-$b + sqrt(delta($a,$b,$c)))/(2*$a);
        }
    }
    function x2($a,$b,$c){
        $d = delta($a,$b,$c);
        if($d == -1){
            return "Não é possível calcular a raiz de um numero negativo";
        }else{
            return (-$b - sqrt(delta($a,$b,$c)))/(2*$a);
        }
    }

    function parImpar($num){
        if($num % 2 == 0){
            return "par";
        }else{
            return "impar";
        }
    }

    function maioridade($idade){
        if($idade < 18){
            return "Menor de idade";
        }else{
            return "Maior de idade";
        }
    }

    function dobro($num){
        return $num * 2;
    }

    function celsusFahrenheit($celsius){
        return ($celsius * 1.8) + 32;
    }

    function maiordeles($num1,$num2,$num3){
        if($num1 > $num2 && $num1 > $num3){
            return $num1;
        }else if($num2 > $num1 && $num2 > $num3){
            return $num2;
        }else{
            return $num3;
        }
    }

    function verificarnum($num){
        if($num > 0){
            return "positivo";
        }
        if($num = 0){
            return "neutro";
        }
        if($num < 0){
            return "negativo";
        }
    }

    function somadaordem($num){
        $soma = 0;
        for($i = 0; $i <= $num; $i++){
            //$soma = $soma+($num-$i);
            $soma += $i;
        }
        return $soma;
    } 
    //10
    function prim($num){
        $divisor = 0;
        for($i = 1; $i <= $num; $i++){
            if($num % $i == 0){
                $divisor ++;
            }
        }
        if($divisor == 2){
            return "sim";
        }else{
            return "não";
        }
    }
    function primo($num){
        if($num <= 1){
            return "não";
        }
        for($i = 2; $i <= sqrt($num); $i++){
            if($num % $i == 0){
                return "não";
            }
        }
        return "sim";
    }

    //11
    function palindrom($texto){
        $tam == strlen($texto);
        $meio == 0;
        for($i=1; $i <= ($tam-1); $i++){
            $prim = strstr($texto,(1-$i),1);
            $ulti = strstr($texto,($tam-$i),1);
            if($prim == $ulti){
                $meio++;
            }    
        }
        if($tam%2==0){
            if($meio == $tam/2){
                return "sim";
            }
        }else{ 
            if($meio == ($tam-1)/2){
                return "sim";
            }else{
                return "nao";
            }
        }   
    }
    function palindromo($palavra){
        if($palavra ==strrev($palavra)){
            return "sim";
        }else{
            return "não";
        }
    }
    //12
    function fatorial($num){
        $fat = 1;
        for($i = 1; $i <= $num; $i++){
            $fat *= $i;
        }
        return $fat;
    }
    //13
    function contpar($num){
        $cont = 0;
        for($i = 1; $i <= $num; $i++){
            if($i % 2 == 0){
                $cont .= "<br>". $i;
            }
        }
        return $cont;
    }
//14
    function vogal($texto){
        $vogal = array("a","e","i","o","u","A","E","I","O","U");
        $cont = 0;
        for($i = 0; $i < strlen($texto); $i++){
            if(in_array($texto[$i],$vogal)){
                $cont++;
            }
        }
        return $cont;
    }
    
//15
    function primome($num){
        $resultado = 0;
        for($i = 1; $i <= $num; $i++){
            $divisor = 0;
            for($j = $i; $j>=1; $j--){
                if($i % $j == 0){
                $divisor ++;
                }
            }
            if($divisor == 2){
                $resultado .= "<br>".$i;
            }
        }
        return $resultado;
    }
//16
    function data($dia,$mes,$ano){
        checkdate($mes,$dia,$ano);
        $resul = "data invalida";
        $result = "data valida";
        if($dia<1 || $dia>31){
            return $resul;
        }else if($mes<1 || $dia>12){
            return $resul;
        }else if($ano<1 || $ano>2024){
            return $resul;
        }else{
            return $result;
        }
    }
//17
    function media($num1,$num2,$num3,$num4,$num5){
        $media = ($num1+$num2+$num3+$num4+$num5)/5;
        return $media;
    }
//18
    function divisores($num){
        $divisores = 0;
        for($i = 2; $i <= $num; $i++){
            if($num % $i == 0){
                $divisores .= "<br>".$i;
            }
        }
        return $divisores;
    }
//19
    function tamtext($texto){
        $palavras =str_word_count($texto);
        return $palavras;
    }
//20
    function fibonacc($num){
        $fib = array(0,1);
        for($i = 2; $i <= $num; $i++){
            $fib[] = $fib[$i-1] + $fib[$i-2];
        }
    }
    function fibonacci($num){
        $a = 0;
        $b = 1;
        $c = 1;
        for($i = 1; $i < $num; $i++){
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }
        return $c;
    }
//lista 2
//11
    function totaldia($dia,$mes,$ano){
        $totald = ($dia+($mes*30)+($ano*365));
        return $totald;
    }
//12 e 13
    function maca($num){
        if($num<12){
            return ($num*1.30);
        }else{
            return ($num*1);
        }
    }
//14
    function comissao($salario,$totalv){
        if($totalv<1500){
            $comissao = ($totalv*0.03);
        }else {
            $comissao = ($totalv*0.05);
        }
        return ($comissao+$salario);
    }
//15
    function saldo($conta,$saldo,$debido,$credito){
        $total = $saldo-$debido+$credito;
        if($total>=0){
            return "saldo positivo ".$total;
        }else{
            return "saldo negativo ".$total;
        }
    }
//16
    function tabuad($num1){
        $i = 0;
        $resultado = 0;
        for($i; $i<=10;$i++){
            $resultado .= "<br>".$num1." * ". $i." = ".($num1*$i);

        }
        return $resultado; 
    }
//17
    function imprimir($num){
        $resul = 0;
        for($i=1; $i<=$num;$i++){
            $resul .= "<br>".$i;
        }
        return $resul;
    }
//18
    function negativo($num1,$num2,$num3,$num4,$num5,$num6,$num7,$num8,$num9,$num10){
        $resul = 0;
        if($num1<0){
            $resul++;
        }
        if($num2<0){
            $resul++;
        }
        if($num3<0){
            $resul++;
        }
        if($num4<0){
            $resul++;
        }
        if($num5<0){
            $resul++;
        }
        if($num6<0){
            $resul++;
        }
        if($num7<0){
            $resul++;
        }
        if($num8<0){
            $resul++;
        }
        if($num9<0){
            $resul++;
        }
        if($num10<0){
            $resul++;
        }
        return $resul;
    }
//19
    function inferior($num1,$num2,$num3,$num4,$num5,$num6,$num7,$num8,$num9,$num10){
        $resul = 0;
        if($num1<40){
            $resul+=$num1;
        }
        if($num2<40){
            $resul+=$num2;
        }
        if($num3<40){
            $resul+=$num3;
        }
        if($num4<40){
            $resul+=$num4;
        }
        if($num5<40){
            $resul+=$num5;
        }
        if($num6<40){
            $resul+=$num6;
        }
        if($num7<40){
            $resul+=$num7;
        }
        if($num8<40){
            $resul+=$num8;
        }
        if($num9<40){
            $resul+=$num9;
        }
        if($num10<40){
            $resul+=$num10;
        }
        return $resul;
    }
//20
    function mediaaritmetica($num1,$num2){
        $resul = 0;
        $j = 0;
        for($i=$num1; $i<=$num2;$i++){
            $resul+=$i;
            $j++;
        }
        return $resul / $j;
    }
//21
function maioremedia($num1,$num2,$num3){
    $media = ($num1+$num2+$num3)/3;
    if($num1 > $num2 && $num1 > $num3){
        $maior = $num1;
    }else if($num2 > $num1 && $num2 > $num3){
        $maior = $num2;
    }else{
        $maior = $num3;
    }
    return "A média é ".$media." o maior é ".$maior;
}
//22
    function mediaa($num1,$num2,$num3,$num4,$num5){
        $media = ($num1+$num2+$num3+$num4+$num5)/5;
        return $media;
    }
//23
    function reajuste($salario){
        if($salario>=28000){
            $rea = 0.15*$salario+$salario;
        }else if($salario>=14000){
            $rea = 0.20*$salario+$salario;
        }else if($salario>=4200){
            $rea = 0.50*$salario+$salario;
        }else{
            $rea = 0.10*$salario+$salario;
        }
        return $rea;
    }



    //Resultados
    echo "<br>A soma dos números é: ". somar(5,8);
    echo "<br>A Subtraçao dos números é: ". subtrair(9,15);
    echo "<br>A multiplicação dos números é: ". multiplicar(10,8);
    echo "<br>A divisão dos números é: ". dividir(3,1);
    echo "<br>A potencia dos números é: ". potencia(10,2);
    echo "<br>A raiz dos números é: ". raiz(10);
    echo "<br>A tabuada dos números é: ". tabuada(8);
    echo "<br>A área dos números é: ". areaRetangulo(5,6);
    echo "<br>O delta dos números é: ". delta(-8,5,9);
    echo "<br>A raiz dos números é: ". x1(-8,5,9);
    echo "<br>A raiz dos números é: ". x2(-8,5,9);
    echo "<br>O números é: ". parImpar(10);
    echo "<br>Maior ou Menor?: ". maioridade(21);
    echo "<br>O dobro do número é: ". dobro(100);
    echo "<br>O número em Fahrenheit é: ". celsusFahrenheit(25);
    echo "<br>O maior número é: ". maiordeles(10,20,30);
    echo "<br>O número é: ". verificarnum(-10);
    echo "<br>A soma dos números é: ". somadaordem(8);
    echo "<br>O numero é Primo?: ". primo(13);
    echo "<br>O numero é Palindromo?: ". palindromo("ana");
    echo "<br>O fatorial é: ". fatorial(9);
    echo "<br>O numero par é: ". contpar(10);
    echo "<br>O numero de vogais é: ". vogal("Ana");
    echo "<br>Os numeros primos menores ou iguai sao: ". primome(13);
    echo "<br>A data é valida?: ". data(1,2,2024);
    echo "<br>A media dos numeros é: ". media(10,20,30,40,50);
    echo "<br>A divisao dos numeros é: ". divisores(10);
    echo "<br>A quantidade de palavras é: ". tamtext("eu te amo");
    echo "<br>O Fibonacci até o numero é: ". fibonacci(10);
//lista 2
    echo "<br>O total de dias é: ". totaldia(04,11,2006);
    echo "<br>O salario total é: ". comissao(1200,1600);
    echo "<br>O teste do saldo atual é: ". saldo(12312,1200,200,400);
    echo "<br>A tabuada dos números é: ". tabuad(8);
    echo "<br>Os números São: ". imprimir(8);
    echo "<br>A soma dos números é: ". negativo(8,-1,7,-2,6,-3,5,-4,4,-2,10);
    echo "<br>A soma dos números é: ". inferior(8,-1,7,-2,6,-3,5,-4,4,-2,10);
    echo "<br>A media dos numeros é: ". mediaaritmetica(15,100);
    echo "<br>". maioremedia(1,2,3);
    echo "<br>A media dos numeros é: ". mediaa(10,7,6,8,9);
    echo "<br>O reajuste é: ". reajuste(28000);


    





?>