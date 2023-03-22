<?php
$dia = date('w', strtotime('2023-03-20'));

switch ($dia) {
    case 0:
        $mensagem = 'Tenha um bom domingo.'
        break;
    case 1:
        $mensagem = 'Tenha uma boa segunda.'
        break;
    case 2:
        $mensagem = 'Tenha uma boa terça.'
        break;
    case 3:
        $mensagem = 'Tenha uma boa quarta.'
        break;
    case 4:
        $mensagem = 'Tenha uma boa quinta.'
        break;
    case 5:
        $mensagem = 'Tenha uma boa sexta.'
        break;
    case 6:
        $mensagem = 'Tenha um bom sábado.'
        break;
     default:
     $mensagem = 'Tenha um bom dia.'
     break;

}