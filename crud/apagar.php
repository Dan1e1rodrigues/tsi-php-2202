<?php
//Buscamos o código que conecta no SGBD
require_once '../bancoDeDados/conecta.php';
//Apenas para ficar mais fácil de trabalhar
//com o dado enviado pelo usuário 
$id = $_POST['id'] ?? 0;
// ?? quando não existe $_POST['id'] atribui
// 0 para $id

//Evito que seja recebido em $id
//qualquer coisa que seja diferente 
//de números (dígitos)
$id = preg_replace( '/\D/', '', $id);

if ( $bd->exec("DELETE FROM alunos WHERE id = $id") ){

    $apagou = true;

}else{

    $apagou = false;
}

include 'index.php';