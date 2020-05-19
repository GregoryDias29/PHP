<?php
error_reporting(E_ALL);
// o php nos permite incluir varias vezes no mesmo arquivo 
echo "Inicio do arquivo de inclusão";


include_once "variaveis.php";     //vou tentar incluir novamente a o mesmo include
echo "<br>";

include_once "variaveis.php"; // ele duplica o que ele já exibia, por que incluimos 2x 

echo "<br>Estou monstrando a variavel nome no arquivo inclusão. php: $nome <br>";

include_once "C:\Users\grego\Desktop\Treina Web\PHP\Aula 7";

echo "<br>Estou monstrando a função somar no arquivo inclusão. php: <br>". $somar(10,10);

echo"<br>Fim do arquivo de inclusão";

include_once "C:\Users\grego\Desktop\Treina Web\PHP\Aula 7";// ele da erro faltal parando a execução por que esta redeclarando a função somar 
//ao incluir duas vezes seria tentar fazer a mesma função 2x 



//para resolvei isso temos o include_once ele inclui apenas a uma vez 




// Melhor usar o include_once ao inves de so include assim evita os erros