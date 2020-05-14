<?php

//

$a = true;
$b = false;

// && são os mesmos operadores and 

var_dump($a && $b);
var_dump($a and $b);

// || são os mesmos operadores  or OBS: caso seu teclado não tenha o pipe o atalho é ALT 124 

var_dump($a or $b);
var_dump($a || $b);

//ou exclusivo xor

var_dump($a xor $b);

// operador not  ! ele serve para fazer negação tem que ficar antes do $

var_dump(!$a);
