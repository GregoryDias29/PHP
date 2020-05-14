<?php 

// 4 operações basicas

$soma = 5 + 6;

$sub = 10-5;

$multi = 5 *10;

$div = 100 / 10;

//tipo que retornou 
echo "esta sendo apresentado todos os resultados das contas:";// porem todos os resultados retornaram inteiros, isso ocorre pois a conta esta sendo feita com um inteiro, para fazer com float basta colocar o ponto
echo "<br><br>";
var_dump($soma);
echo "<br>";
var_dump($sub);
echo "<br>";
var_dump($multi);
echo "<br>";
var_dump($div);
echo "<br><br>";
echo "O valor da soma é: ";
echo $soma;

// outros operadores 

//resto da divisão 
// sempre retorna inteiro
$resto = 10 % 3;
echo"<br><br>";
var_dump($resto);
echo $resto;

// exponencial 

$exponencial = 10 ** 3;
echo"<br><br>";
var_dump($exponencial);
echo $exponencial;

