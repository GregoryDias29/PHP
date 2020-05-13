<?php

$linguagens = ["PHP", "CSS", "JS"];

$linguagens [3] = "Python";// adicionando uma nova informação ao arrey especificando qual chave ele estara

var_dump($linguagens);
echo "<br>";
echo "Cursos que compoem o array linguagens.";

// o php tem uma caracteristica bem legal se eu não sei qual a pocisão eu posso omitir a posição deixando ao inves de [3] posso deixar assim [] ele adiciona  sozinho 

// posso fazer isso com este tipo de array tambem 
echo "<br><br>";
$curso = [
    "nome_curso" => "Curso de PHP",
    "versao_ferramenta" => 7.5,
    "carga_horaria" => 40,
    "status" => true
];

$curso ["pre-requisito"] = "logica de programacao";

var_dump($curso);
echo "<br>";
echo "Agora o meu array de curso tem um pre-requisito chamado logica de programação";

// e posso fazer isso em arrays multidimensionais

$cursos = [
    "php" => [
        "nome_curso" => "Curso de PHP",
        "versao_ferramenta" => 7.4,
        "carga_horaria" => 40,
        "status" => true 
    ],

    "java" => [
        "nome_curso" => "Curso de Java",
        "versao_ferramenta" => 11.5,
        "carga_horaria" => 30,
        "status" => false 
    ]
];
echo "<br><br>";
$cursos["php"]["pre-requisito"] = "logica de programação"; // passamos a primeira chave sendo ele a php
echo $cursos ["php"]["pre-requisito"];
echo "<br>";
echo "com isso ele apresenta o pre-requisito do php adicionado recentimente ";