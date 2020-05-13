<?php
// sempre anter de iniciar a codificação no PHP precisa colocar o sinal de menor mais interrogação mais php

//echo é o contrutor da linguagem, ele exibe na tela 

// no php precisamos separar as instruções por ; 

echo "Hello Word PHP";

//para acessar o codigo temos duas opções, atraves do navegador e atraves do terminal 

// vamos abrir o power shell e precisamos inciar o servidor PHP com ele iniciado permitira que acessemos os arquivos atraves do navegador 

//para iniciar precisamos que o power shell esteja no mesmo local do arqueivo que queremos iniciar ou seja precisamos que o terminal esteja no mesmo local da pasta do arquivo php

// muita atenção ao iniciar o servidor não podemos usar o servidor development server em produção 

// para acessar PS C:\Users\grego\Desktop\Treina Web\PHP>
//PS C:\Users\grego\Desktop\Treina Web\PHP> php -S 127.0.0.1:8080
//[Wed Apr 29 21:46:06 2020] PHP 7.4.5 Development Server (http://127.0.0.1:8080) started

//note que ele deu um endereço onde iremos acessar a pagina web do nosso codigo, outro detalhe é da inicialização onde chegamos ate onde esta nosso codigo
//damos o comando no power shell "php -S 127.0.0.1:8080" ao iniciar ele nos da o camigo web para ver nosso codigo, putro detalhe usar o 127.0.0.1 pois é o ip local 
//para finalizar, quando abrir vai dar not foul, precisa colocar /o nome do arquivo 
//o errro ocorre porque por padrão ele pesquisa por index.php, se colocarmos na pasta ele vai achar sem problemas

