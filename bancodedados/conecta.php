<?php
//dados para nos conectarmos ao SGBD

$dsn = 'mysql:dbname=senac;host=localhost;port=3307';
$user = 'root';
$pass = '';

//Conectamos ao SGBD
$bd = new PDO($dsn,$user, $pass);




