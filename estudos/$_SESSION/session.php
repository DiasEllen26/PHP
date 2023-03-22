<?php
session_start();

$_SESSION['nome'] = 'Ellen';
$_SESSION['idade'] = '24';

print_r($_SESSION);