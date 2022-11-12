<?php
//Buscamos o código que conecta no SGBD
require_once '../bancoDeDados/conecta.php';
//Na linha 3 estamos trazendo todo o código de
//../bancoDeDados/conecta.php para este código 
//include_once(); não gera erro fatal se não existir o arquivo

//Dados provenientes do formulário HTML
$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];

$consulta = 
    $bd->prepare('  INSERT INTO alunos 
                        (nome, turno, inicio)
                    VALUES
                        (:nome, :turno, :inicio)');
/*
A função $bd->prepare() retorna 
outra variável (objeto), essa outra 
variável consegue juntar os dados 
do usuário com a consulta SQL
*/

$consulta->bindParam(':nome', $nome);
$consulta->bindParam(':turno', $turno);
$consulta->bindParam(':inicio', $inicio);
/*
A função $consulta->bindParam() substitui
os rótulos (ex.: ":nome") pelos dados 
inseguros
*/

if( $consulta->execute() ){
    $gravou = true;
}else{
    $gravou = false;
}
//Finalmente executamos a consulta
//no SGBD

include 'index.php';





