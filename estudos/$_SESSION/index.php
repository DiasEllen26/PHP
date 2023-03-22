<?php
include_once 'dados_login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de PHP $_SESSION</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <p>
            <a href="pagina1.php">Página 1</a>
            <a href="pagina2.php">Página 2</a>
            <a href="pagina3.php">Página 3</a>
            <a href="?logout=1">Sair</a>
        </p>
    <?php 
        if (!$_SESSION['logged']) {
            include_once "forms_login.php";
        } else {
            include_once "conteudo_restrito.php";
        }
    ?>
    </div>
</body>
</html>