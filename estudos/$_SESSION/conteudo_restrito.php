<?php
$logged = $_SESSION['logged'] ?? NULL;

if (!$logged) die('Acesso restrito');
?>

<p>Este conteúdo é restrito.</p>
<p><?php echo "Olá" . $_SESSION['usuario'];?></p>