<?php 

$cursos = [
    "php" => [
        "nome" => "Curso de PHP",
        "versao" => 7.4,
        "carga" => 40,
        "status" => true
    ],

    "java" => [
        "nome" => "Curso de Java",
        "versao" => 11.4,
        "carga" => 30,
        "status" => false
    ], 

    "C#" => [
        "nome" => "Curso de C#",
        "versao" => 5,
        "carga" => 60,
        "status" => true
    ],
];


foreach ($cursos as $curso) {
    echo $curso['nome'];
    echo "<br>";
    echo "Versão da ferramenta: ".$curso['versao'];
    echo "<br>";
    echo "Carga horaria". $curso['carga'];
    echo "<br><br>";
    echo "Status: ". $curso['status'];
}
