<?php 

// condicional if 

$a = 30;
$b = 20;

if ($a > $b) {
    echo "Realmente A é maior que B <br>";
    echo "Segunda linha";
    echo "Terceira linha";
}

/*
if ($a > $b) //pode ser removido as chaves porem não é muito eficas
    echo "Realmente A é maior que B <br>";// so este é executada 
    echo "Segunda linha"; //idenpendente do que aconteça vai apresentar
    echo "Terceira linha"; 
isso é ruim por que acaba que vc não sabe o que esta dentro do if, por isso é bom usar sempre {}

    */