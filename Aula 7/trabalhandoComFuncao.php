<?php

//tornar mais legivel e reaproveitavel, declarando função 
// dentro dos () recebemos nossos parametros 
//parametros valores de entrada que sera processado




function somar($valor1, $valor2) {
    echo "Antes do return ┼";
    return $valor1 +$valor2;
    echo "Depois do return┼";
    //não adianta colocar nada embaixo do return que ele não vai ler 
}

 $soma = somar(12, 10);

 echo $soma;
 echo "<br>";

$soma2 = somar(100, 500);
echo $soma2;
echo "<br>";

echo somar(13,90); // um detalhe legal é a capacidade de poder chamar a soma diretamente no echo 
