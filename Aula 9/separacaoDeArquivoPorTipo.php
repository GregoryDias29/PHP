<?php // agora tenho somente saida e somente exibições sendo uma boa praticas 

// recomendação é que nossos arquivos contenha ou somente declarações ou somente exibições saidas para o usuario 

error_reporting(E_ALL);

echo "Inicio do arquivo inclusão";

require_once "variaveis.php";
echo "<br>";

echo "<br> Estou monstrando a variavel nom no arquivo inclusão: $nome";

include_once "personalizadas.php";

echo "<br>";

echo "<br> Estou chamando a função somar no arquivo inclusao: " . somar(10,10);

echo "<br><br>Fim do arquivo inclusão";

// declarações como no arquivo variaveis são os $email saidas são os echo porem o correto é que o arquivo tenha somente saidas ou somente declarações  

//se formos no variaveis e remover os echos teremos um arquivo somende de declarações e farei isso 