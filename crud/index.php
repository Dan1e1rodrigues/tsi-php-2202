<?php

require_once '../bancoDeDados/conecta.php';

$stmt = $bd->query('SELECT id, nome, turno, inicio FROM alunos');

$alunos = [];

//O fetch espera receber
// $saida = $stmt->fetch(PDO::FETCH_ASSOC);

// echo'<pre>';
while( $registro = $stmt->fetch(PDO::FETCH_ASSOC) ){
    
    $alunos[] = $registro;
}

include 'view/listar.php';
//criar uma lista com titulo aluno, id, nome, matricula

?>