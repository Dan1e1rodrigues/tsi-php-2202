<?php
echo "Seja bem-vindo(a) " . $_POST['$_nomeUsuario'] . '!<br><br>';

echo "Você tem {$_POST['idadeUsuario']} anos, 
        CPF: {$_POST['cpfUsuario']}<br>";

echo "E o periodo escolhido foi o {$_POST['periodoUsuario']}";

$nome = $_POST['nomeUsuario'];
$idade = $_POST['idadeUsuario'];
$cpf = $_POST['cpfUsuario'];
$periodo = $_POST['periodoUsuario'];

$arquivo = fopen('alunos.csv', 'a');//Abro o arquivo para append
fwrite($arquivo, "$nome, $idade, $cpf, $periodo\r\n");
fclose($arquivo);