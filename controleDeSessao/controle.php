<?php
//inicializo o sistema de controle de sessão
session_start();

//verifica se o usuário está logado
//
if(!isset($_SESSION['id'])){
    
    header('Location: /tsi-php-2202/login');
    exit();
}