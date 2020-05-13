<?php 

//podemos tambem fazer arrays multidimensionais que são arrays dentro de arrays 

$numeros = [
/*linha 0*/[1,2,3,4],//no caos eu vou colocar uma linha co varios numeros 
/*linha 1*/[5,6,7,8,9],
/*linha 2*/[10,11]
];//ele lembra muito uma matriz no caso ele é uma matriz, não precisa ser necessariamente apenas numeros pode ser tambem string, float

//mas como faço para acessar podemos acessar com as chaves da mesma for que o associativo 

echo $numeros[0][2]; // eu pego primeiro a alinha sabendo que se inicia na linha 0,1 e 2 e em seguida falo qual a posição que quero pegar,
echo"<br><br>";
echo $numeros[2][1];
echo "<br><br>";
// vamos supor que eu tenho um subarray 

$numeros2 = [
    [1,2,3,4],
    [5,6,7,8,9],
/*ppsição         0  1  2 */
/*linha 2*/[10, [11,12,13]]
/*coluna     0        1 */
];
//para poder printar o segundo array basca colocar mais um nivel de chave 
echo "segundo array pegando o subArray: ";
echo $numeros2 [2][1][0];

