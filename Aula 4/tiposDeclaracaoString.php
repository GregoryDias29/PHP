<?php

// todas as strings foram utilizadas com "" mas podemos utilizar ''

$escola = "Treina";
$curso = "PHP";

$frase = "Faça o curso de " . $curso . " na escola " . $escola;

$string1 = "Meu valor";
$string2 = 'Meu valor';

echo $string1;// os dois monstra a mesma coisa 
echo $string2;// ele não interpreta monstra valor literal 

// um exemplo de uso de "" e ''

$string1 = "Faça o curso de $curso na escola $escola"; // aqui ele interpreta o codigo colocase tambem {$curso}{$escola} ao ives de declara como esta feito
$string2 = 'Faça o curso de $curso na escola $escola'; // aqui não ele onstra o que realmente eu escrevi 

echo $string1;
echo $string2;


$cursos = ["PHP", "CSS", "JS"];

$string1 = "Faça o curso de {$curso[0]} na escola $escola"; // monstra sem problemas com uma lista de arrays é bem aconselhado usar "" quando necessita ser interpretado o codigo e é uma boa pratica colocar {}


