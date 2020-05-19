<?php

echo "Inicio do arquivo de inclusão";


include "variaveis.php";     //passo o caminho que quero inclir pode ser relativo aparit de onde estou utilizando ou caminho absoluto c:/,,,,,/ no caso usaremos o relativo 

echo "<br>Estou monstrando a variavel nome no arquivo inclusão. php: $nome <br>";

include "C:\Users\grego\Desktop\Treina Web\PHP\Aula 7";

echo "<br>Estou monstrando a função somar no arquivo inclusão. php: <br>". $somar(10,10);

echo"<br>Fim do arquivo de inclusão";


