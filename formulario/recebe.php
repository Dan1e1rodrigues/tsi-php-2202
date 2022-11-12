<?php

echo "Seja bem-vindo(a), " . $_POST['nomeUsuario'] . '!<br><br>';

echo "Você tem {$_POST['idadeUsuario']} anos, 
        CPF: {$_POST['cpfUsuario']}<br>";

echo "E o período escolhido foi o {$_POST['periodoUsuario']}";

$nome = $_POST['nomeUsuario'];
$idade = $_POST['idadeUsuario'];
$cpf = $_POST['cpfUsuario'];
$periodo = $_POST['periodoUsuario'];

//$_SERVER possui muitas variáveis de ambiente que podem ser 
//muito importantes para você em algum momento, ex: IP do 
//requisitante

$arquivo = fopen('alunos.csv', 'a');//abro o arquivo para append
fwrite($arquivo, "$nome;$idade;$cpf;$periodo;{$_SERVER['REMOTE_ADDR']}\r\n");
fclose($arquivo);
