<?php 

/*
$numeros =[2,3,5,7,9,10];

for ($i =0; $i < count($numeros); $i++){
    echo $numeros[$i] . "<br>";
}

Será feita a mesma coisa porem utilizando o Foreach a cima foi feito com o fot, declarei um array de numeros qualquer, chamei o for e falei que o i se iniciava em 0 depois foi solicitado que fizesse um count pois assim com base na posição conseguiria monstrar o que esta dentro do array 
*/
$numeros =[2,3,5,7,9,10];

foreach ($numeros as $key => $value) {// foi chamado o foreach dentro de for each chamaos o array numeros depois colocasse o as para dizer que eu quero declara como chave entção ele vai clocar a chave de cada um dos itens  dentro do array na variavel chave e o valor ele vai colocar dentro da variavel valor como exemplo desta forma não preciso mais saber  tamnho e tudo mais basicamente ele vai pegar cada item de numeros e cai colocar na variavel chave e valor  
    echo "Chave:  $key ┼ Valor: $value <br>";
}
/*OBS no caso poderia ser assim foreach ($numeros as $valor{
    echo "$valor";
})
desta maneira não tem necessidade de se colocar a chave

*/