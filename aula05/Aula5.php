<?php 

    echo "<h1> Funcoes </h1>";

    function nomeBonito(){
        echo "<p> Testando a minha funcao </p>";
    }
    //Assim chama a funcao
    nomeBonito();
    nomeBonito();
    nomeBonito();
    nomeBonito();

    //Cria funcao Para escrever sempre um HD com um texto
    function criarTitulo($texto){
        echo "<h2> ". $texto . " </h2>"; 
    }

    //Executando a funcao
    criarTitulo("Testando a funcao");

    function tituloLegal($texto){
        echo "Texto 1";
        echo "Texto 2";
        echo "Texto 3";
    }

    tituloLegal("Exercicio 01");


    criarTitulo("Calculos matematicas");

    function calcularMedia($nome, $nota1, $nota2){
        $media = ($nota1 + $nota2) / 2;

        if($media >= 7){
            echo "<p> O Aluno(a) {$nome} foi aprovado com média {$media}.</p>";
        }else{
            echo "<p> O Aluno(a) {$nome} foi reprovado com media... melhor nao saber. ({$media})</p>";
        }
    }

    calcularMedia("João, 3", 3.0, 7.0);
    calcularMedia("Murilo", 8.0, 6.0);
    calcularMedia("Gabriela", 8.0,7.5);

    function somar($num1, $num2){
        $soma = $num1 + $num2;
        echo "<li> {$num1} + {$num2} = {$soma}";
    }

    echo "Lista de somas: ";
    somar(10,10);
    somar(11,10);
    somar(14,10);

    //Adiciona varios numeros, como um array e pode usar o print_r para corrigir ou usar estrutura de repetição
    function somarNumero(...$numeros){
        // echo print_r($numeros);
        $soma = 0;
        for($i = 0; $i < count($numeros); $i++){
            $soma += $numeros[$i];
            echo $numeros[$i] . "+";
        }
        echo "=" . $soma;
    }

    echo "<br></br>";

    somarNumero(2,2);
    echo "<br></br>";
    somarNumero(1,3,4,6);
    echo "<br></br>";
    somarNumero(2,.5,67,3,7,3,7,3,7,3);

    //Para termos um parametro que recebe varios funcoes precisamos que o que recebe multiplos seja o ultimo
    // var_dump mostra o tipo da variável
    function seiLa($nome, $numero, $texto, ...$numeros){
        echo "<br>";
        echo print_r($numeros);
        var_dump($numeros);
    }

    seiLa("Nome", 10, "Textão", 10, 5, 17, 22, 29, "Outro", "mais um texto", true, false, 10, "textinho");

    echo "<br>";

    function quebra(){
        echo "<br>";
        echo "<br>";
    }
    $sebastiao = true;
    
    if($sebastiao){
        echo "Teste";

        function telhado(){
            echo "Estou arrumando o telhado...";
        }
    }

    quebra();

    if($sebastiao){
    telhado();
    }

    quebra();

    //Funcao dentro de funcao
    function chico(){
        echo " - Eu tentei - ";
        function moedas(){
            echo "Não contava com minha astucia";
        }
    }

    chico();
    moedas();

    quebra();
    tituloLegal("Coisas Normais");

    //Assim retorna direto o valor
    function subtrair($n1, $n2){
        $resposta = $n1 - $n2;
        return $resposta;
    }

    quebra();
    $resp = subtrair(30,10);
    echo $resp;

    quebra();
    echo subtrair(40,10);

    function subtrairDiferente(&$var){
        $var = 80;
        echo "Var: " . $var;
    }

    $pizza = 10;

    echo "Pizza: ". $pizza;
    subtrairDiferente($pizza);
    echo "Pizza: ". $pizza;

    quebra();

    function divisao($num1, $num2){
        echo $num1;
        echo $num2;
        $resp = $num1 / $num2;
        echo "<br> {$num1} / {$num2} = {$resp}";
    }

    divisao("10",5);

?>