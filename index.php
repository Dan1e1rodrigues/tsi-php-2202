<?php
$nome = 'Olá Daniel!';
echo "$nome Numero 1 <br>";


//comentario de linha
#comentario de linha 
/* comentario
em
bloco
*/
//documentação de php fica em: https://www.php.net
//LOOPINGS
//FOR
for ($i = 2; $i <= 10; $i++) {
    echo "$nome Daniel $i <br>"; 
}
echo "<br>";

//WHILE
$i = 11;
while ($i <= 20) {
    echo "$nome Daniel $i <br>";
    $i++; }

//DO WHILE
echo "<br>";
$i = 21;
do{
    echo "$nome Daniel $i <br>";
    $i++;
} while ($i <= 30);

//FIM LOOPINGS

////////////////////////////////////////////////
//CONDICIONAIS

//IF
echo "<br>";

if (5 > 10) {
    echo "5 é maior que 10";
} else {
    echo "5 não é maior que 10";
}

echo "<br>";

$d = 2;
switch ($d) {
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda";
        break;
    case 2:
        echo "Terça";
        break;
    case 3:
        echo "Quarta";
        break;
    case 4:
        echo "Quinta";
        break;
    case 5:
        echo "Sexta";
        break;
    case 6:
        echo "Sabado";
        break;    
}
//FIM CONDICIONAIS
//CUIDADO COM AS PASTAS, POIS ELAS PODEM ATRAPALHAR O XAMMP PARA ACHAR A PASTA CORRETA.
