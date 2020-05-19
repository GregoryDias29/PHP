<?php

//require_once ele permite incluir o arquivo porem ele tem um outro comportamento do include quando ele não encontra um arquivo 

error_reporting(E_ALL);

echo "Inicio do arquivo de inclusão";


include_once "variaveis.php1";  // como não existe ele da um erro de aviso porem ele continua executando
echo "<br>";

//vamos supor que queremos incluir um aquivo que não exita vamos ver como o include se comporta /

require_once "variaveis1.php"; //se o arquivo não existe ele da um erro e para a execusão 

// se o arquivo for de extrema inportancia é bom usar o require mas se o arquivo for não tão importante basta usar o include




