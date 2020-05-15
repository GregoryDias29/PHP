<?php

//elseif

$a = 11;
$b = 21;

if ($a > $b){
    echo "Realmente $a é maior do que $b";
} elseif ($b == 20){// se A não for maior que be sera executado esta outra verificação  

    echo "$b é igual a 20";
} elseif ($a == 10){
    echo "$a é igual a 10<br>";// dentro do bloco de chaves poderia colocar quantos estruções eu quiser 
    echo "$a é igual a 10<br>";
    echo "$a é igual a 10<br>";
    echo "$a é igual a 10<br>";
}else {
    echo "Nenhuma condição é verdadeira";
}// caso nada seja verdadeiro ele é exibido 

//elseif pode ser executado tambem assim else if sendo eles separados porem o comum é usar junto