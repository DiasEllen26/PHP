<?php
session_start();
$_SESSION['logged'] = $_SESSION['logged'] ?? FALSE;

// DADOS DA BASE DE DADOS
$usuario_db = 'luiz';
$senha_db = '123456';

$p_usuario = $_POST['usuario'] ?? NULL;
$p_senha = $_POST['senha'] ?? NULL;

if ($p_usuario == $usuario_db && $p_senha == $senha_db) {
    $_SESSION['usuario'] = $usuario_db;
    $_SESSION['senha'] = $senha_db;
    $_SESSION['logged'] = TRUE;
} 
