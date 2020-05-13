
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Minha primeira pagina em php</h1>
    <?php  echo "Minha string vinda do PHP";?>

    <p>Estou no curso de <?php echo "PHP"; ?> </p>

    <p>Um outro jeito mais simples de fazer o php, <?= "Mais rapido"?> </p> 

    <p>10 mais 10 é igual a <?php echo 10+10;?></p>

    <p>mesma coisa de cima porem mais pratico, detalhe que pode ser removido o *;* <?= 10+10?></p>

    <?php 
    echo "Minha linha 1 <br><br>Podemos usar tambem o a tag br para pular a linha ou seja, juntando o html ao php<br><br>";

    echo "Minha linha 2 <br><br>";

    echo "Minha linha 3 <br><br>";// dentro do php posso retorna html
    
    ?>
</body>
</html>