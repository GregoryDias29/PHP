<?php 

// igualdade entre tipos diferentes 

$d = 10;
$e = "10";

var_dump($d == $e); // é igual

var_dump($d === $e); // falso, ele f=verifica se os valores e os tipos são iguais 

var_dump($d !== $e); // D é diferente de E se o tipo tambem é diferente ele retorna verdaeiro se o tipo e valor são diferentes

