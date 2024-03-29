<?php 

    echo "<h1>Aula 04 - For, While, doWhile</h1>";

    echo "<h3>FOR</h3>"; 
    for($i = 0;$i < 10; $i++){
        echo "<br> Meu FOR Funciona! {$i}";
    }


    for($i = 0;$i < 10; $i++){
        echo "Linha {$i}";
        for($j = 0;$j < 10; $j++){
            echo "Coluna {$j}";
        }
    }


    echo "<br></br>";
    echo "<h3>While</h3>"; 

    $a = 0;
    while($a < 10){
        echo "-";
        $a += 3;
    }


    echo "<br></br>";
    echo "<h3>doWhile</h3>"; 

    $var = 78;
    do{
        echo "<br> Numero: {$var}";
        $var += 6;
    }While($var < 100);

    echo "<br></br>";
    echo "<h3>Arrays</h3>";
    
    //int [] lista = new int[5]
    
    //Um ou o outro \/
    //$lista = [""];
    $lista = array("Batata", "Miojo", "Polenta");
    //echo $comidas [0];
    //echo var_dump($comida);
    echo print_r($comida);

    $comidas[3] = "Arroz";
    $comida[] = "Feijão";
    $comida[] = 30.6;
    $comida[] = true;



    echo "<br>"
    $totalComida = count($comidas);
    echo "Tamanho da lista: {$totalComida} <br>";
    echo print_r($comida);

    echo "<br></br> Lista de compra: ";

   /* for ($i = 0; $i < count($comidas); $i++){
        echo "<li> Item {$i}: - " . $comidas[$i];
    }*/
    // para cada $comidas dentro do array $comidas faça:
    foreach($comidas as $comida){
        echo "<li> Item: " . $comida;
    }
    
    echo "<br></br>";
    echo "<h3>Arrays com indice de string</h3>";

    $pessoa = array("Nome" => "Romario", "Idade" => 32);
    echo $pessoa ["Nome"];
    



?>