<?php
//Buscamos o código que conecta no SBD
require_once '../bancodedados/conecta.php';

$id = $_POST['id'] ?? 0;

$stmt = $bd->prepare(' SELECT
                            id, nome, turno, inicio
                        FROM
                            alunos
                        WHERE
                            id = :id');
$stmt->bindParam(':id', $id);

$stmt->execute();

$aluno = $stmt->fetch(PDO::FETCH_ASSOC);

//Exercicio

//Mostrar um formulario HTML para o usuario 
//Com os dados do aluno seleciionado para
//ser editado

//Ao clicar "gravar" no formulario fazer
//o update no banco e voltar para a 
//index com uma mensagem de erro ou
//sucesso

var_dump($aluno);