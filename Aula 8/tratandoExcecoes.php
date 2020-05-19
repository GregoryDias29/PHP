<?php

error_reporting(E_ALL);

// $divisor = 0;

// $valor = 100 / $divisor;

// //acaba tendo um alerta

$divisor = 0;//5

try { 
    if ($divisor === 0){
        throw new Exception ("Não é possivel dividir por 0",1);
    }

    $valor = 100 / $divisor;
    echo $valor;
} catch (\Throwable $th) {
    echo $th -> getMessage();
}

/* vamos utilizar um bloco de codigo chamado try cat, o Vs ja tem uma estrutura pre definida podemos ultilizar ela como base
no try vamos colocar o codigo que potencialemnte pode dar o problema 
no catch colocamos o tratamento do erro, tomo uma ação ou eu monstro uma mensagem para o usuario grvo um log o que eu precisar fazer caso tenha dado um erro eu faço no cat 

no caso queremos dividir o valor 100 pelo valor que esta recebendo pelo o usuario, no caso sendo o 0

então eu faço um IF e lanço uma excessão então estamos avisando o php, olha se for igual a 0 deu ruim não quero que continue executando 
então colocao um IF verificando se o divisor é igual a 0 se ele for vou usar a palavra reservada throw (que é lançar) e vpu lançar uma nova excessão passando a seguinte mensagem "Não é possivel dividir por 0"
e agora quando o divisor for 0 ele vai cair no if e vai lançar a excessão que construimos feito isso quando lanço a exessção ele para de executar o bloco dentro do bloco try 
e automaticamente cai no bloco catch 

No catch eu recebo um variavel que se chama $th por padrão, para que eu pegue a mensagem de erro que aconteceu eu utilizo a variavel $th e chamo um metodo chamado de getMessage()
e monstra para o usuario, sendo muito melhor que um warnin 
*/