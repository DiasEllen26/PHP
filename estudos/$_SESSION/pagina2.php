<?php
include_once 'dados_login.php';
$logged = $_SESSION['logged'] ?? NULL;
if (!$logged) die('Acesso restrito');
?>
<p>Conteúdo restrito da página 2.</p>
