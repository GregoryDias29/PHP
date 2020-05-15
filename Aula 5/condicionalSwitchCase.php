<?php 

//vamos dizer que recebemos um variavel e com isso queremos usar com base no valor da variavel ualguma ação ou trecho de codigo 
//O legal do switch case é que alem dos valores que podemos colocar podemos colocar um defaul quando colocamos isso acontece o seguinte... quando nenhum dos valores for escolhido ele cai no defaul como se fosse um else    

$a = 6;

switch ($a) {
    case 0:
        echo "Tenho o valor 0";
        break;
    case 1:
        echo "Tenho o valor 1";
        break;
    case 5:
        echo "Tenho o valor 5";
        break;
    default:
    echo"Nenhum dos valores bate";

}
echo "<br><br>";

// alem disso posso agrupar  os itens em uma unica chamada vamos dizer que caso eu tenho o valor 2 ou tiver o valor 3 ou o valor 4 e 5 
$b = 4;

switch ($b) {
    case 0:
        echo "Tenho o valor 0";
        break;
    case 1:
        echo "Tenho o valor 1";
        break;
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Tenho um valor de 2 a 5";
        break;
    default:
    echo"Nenhum dos valores bate";

}

// tambem conseguimos fazer verificações de strings 
echo "<br><br>";
$c = "PHP";

switch ($c) {
    case "PHP":
        echo "Tenho o valor PHP";
        break;
    case "JS":
        echo "Tenho o valor JS";
        break;
    case "C#":
    case "C":
    case "C++":
    case "Java":
        echo "Tenho um valor de  C,C#,C++ ou Java ";
        break;
    default:
    echo"Nenhum dos valores bate";

}
