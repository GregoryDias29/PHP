<?php

/* tipos de dados compostos onde podemos guardar mais de um valor dentro de um tipo diferente de um escalar dos tipos compostos um dos mais importante são os tipos arrays 
permite que nos armazenemos diferentes modos de dados dentro de uma estrutura 
*/

//valores compostos dentro de variaveis 

$linguagens = ["PHP", "CSS", "JS"]; // um array de linguagem 
//              0       1      2
//automaticamente ele define um chave de acesso para cada item caso não seja especificado 

echo $linguagens[0]; // para printar uma posição especifica dentro do array 
echo "<br><br>";
echo $linguagens[1];
echo "<br><br>";
echo $linguagens[2];
echo "<br><br>";
echo $linguagens[3];// apresenta nada pois não existe posição 3

//sintax antiga 

$linguagens2 = array("PHP", "CSS", "JS");
echo "<br><br>";
echo $linguagens2[1];



