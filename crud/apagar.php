<?php
//Buscamos o código que conecta no SGBD
require_once '../bancodedados/conecta.php';
//Apenas para ficar mais facil de trabalhar
$id = $_POST['id'] ?? 0;
//?? quando não existe

//Evito que seja recebido em $id
//qualquer coisa que seja diferente
//de números (dígitos)
$id = preg_replace('/\D/', '', $id);


if ( $bd->exec("DELETE FROM alunos WHERE id = $id") ){

    $apagando = true;

}else{

    $apagando = false;
}

include 'index.php';