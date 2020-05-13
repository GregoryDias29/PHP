<?php

/* o php é um tipo de linguagem com tipagem dinamica porem isso não quer dizer que ele não possui tipos de dados quando definimos um valor a uma variavel 
internamente ele ja define um tipo de dado para a variavel no php temos tipos de dados escaleres e outros tipos mas complexos os tipos de dados escaleres no php são 
4, sendo eles: 

*/

$nome = "Gregory Dias";//string 

$idade = 21;// inteiro 

$preco = 39.90; // float

$casada = false; // booleano // posso  colocar true ou false

echo gettype($nome); // serve para monstrar o tipo de dados que é 
echo "<br><br>";
echo gettype($idade);
echo "<br><br>";
echo gettype($preco);
echo "<br><br>";
echo gettype($casada);

//podemos utilizar tambem a var_dump(); ela é bem legal para debugar quando não sabemos o que tem dentro de uma variavel e precisamos descobrir 

var_dump($nome, $idade, $preco, $casada);//vai dizer qual o tipo a variavel, tamanho e valor dela e o legal que podemos paassar varias separadas por , 

//podemos alterar o tipo de forma direta sem se preocupar 
echo "<br><br>";
echo "a variavel nome é do tipo: ";
echo gettype($nome);
echo "<br><br>";
$nome = false;
echo "A variavel nome agora é: ";
echo gettype($nome);

