<?php
//Buscamos o codigo que conecta no SGBD
require_once '../bancoDeDados/conecta.php';

$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];



var_dump($_POST);