<?php
session_start();

$_SESSION['nome'] = 'Ellen';
$_SESSION['chave2'] = 'valor2';

print_r($_SESSION);