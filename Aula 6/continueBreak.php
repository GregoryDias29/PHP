<?php // continue permite pular uma interação ou mais de acordo comm uma condição por exemplo não monstrat quando o status for falso 


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

    // if ($curso['status'] == false){
    //     continue; // neste caso sera assim se o status for igual a falso eu quero que ele não monstre // ele pula
    // }
// temos o brak terminando de vez nosso loop

    if ($curso['status'] == false){
    break;// ele termina o loop // ele para
    }

    echo $curso['nome'];
    echo "<br>";
    echo "Versão da ferramenta: ".$curso['versao'];
    echo "<br>";
    echo "Carga horaria". $curso['carga'];
    echo "<br><br>";
    echo "Status: ". $curso['status'];
}






