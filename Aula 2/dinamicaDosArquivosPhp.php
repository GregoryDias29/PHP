<!-- geralmente é uma boa pratica não fechar a tag php quando tem apenas php no codigo  isso é feito para evitar problemas dentro de uma projeto 
outro detalhe onde so possuimos codigos com php não deve usar html diretamente se não ocorre um erro

ex:
-->

<?php 

echo "Hello word PHP!";
//<br> gera erro 
// quando fazemos isso o hello... e Nova.. fica grudados um do lado do outro isso ocorre por que precisa de uma tag html br para que possa pular linha porem se colocar o br ele não vai entender e vai dar erro de sixtax por que ele não reconhece o html
// para colocar o br precisamos imprimir pelo php então fica assim 
echo "<br><br>";
echo "Nova linha";

