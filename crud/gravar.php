<?php
//Buscando o codigo que conecta no SGBD
require_once '../bancodedados/conecta.php';
//include_once (); não gera erro fatal se não existir

//Dados provaveis do formulario HTML

$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];

$consulta =
    $bd->prepare('  INSERT INTO alunos 
                    (nome, turno, inicio)
                VALUE
                    (:nome, :turno, :inicio)');

/*
A função $bd ->prepare() retorna outra variavel (objeto), 
essa outra variavel consegue juuntar os dados do usuario 
com a consulta SQL
*/ 

//Procurar e substituir, 

$consulta ->bindParam(':nome', $nome);
$consulta ->bindParam(':turno', $turno);
$consulta ->bindParam(':inicio', $inicio);
/* 
A função $consulta -> bindParam() subistitui os rotulos,
pelos dados inseguros 
*/

/*Flexa em ingles arrow ->*/
if($consulta->execute() ){
    echo "GRAVOU COM SUCESSO!";
}
else{
    echo "Error ao gravar no banco de dados";
}
//Iniciamos a consulta no SGBD





