<?php

// no php podemos definir o valor da chave ao iinves disso acontecer automaticamente 

$curso = ["curso de PHP Fundamentos", 7.4, 40, true];

$curso = [
    "nome_curso" => "Curso de PHP",
    "versao_ferramenta" => 7.4,
    "carga_horaria" => 40,
    "status" => true 
];

// agora tenho uma estrutura sendo ele um array associativo contendo chave e valor 


//para monstrar 

echo $curso ["nome_curso"];
echo "<br><br>";
echo $curso ["versao_ferramenta"];
echo "<br><br>";
echo $curso ["carga_horaria"];
echo "<br><br>";
echo $curso ["status"];
echo "<br><br>";

//pode ser colocado co qualquer valor