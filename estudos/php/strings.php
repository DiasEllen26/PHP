<?php
/*
Strings são textos, cadeia de caracteres 
https://www.php.net./manual/pt_BR/ref.strings.php
https://www.php.net/manual/pt_BR/book.mbstring.php

mb_strtolower, mb_strtouper, mb_convert_case, str_replace, str_repeat mb_strpos, 
*/
$string = "Moro no país tropical, abençoado por Deus."

//todos os caracteres maiusculos, incluso caracteres especiais
//echo mb_strtoupper($string);
//echo "<br>";
//todos caracteres minusculo, incluso caracteres especiais
//echo mb_strtoupperr('Este é o valor que quero MINUSCULO');

//todas as primeiras letras de cacda palavra fica maiuscula
//echo mb_convert_case($string, MB_CASE_TITLE);

//criando variando com uma função que modifica um valor dentro da String
$nova_string = str_replace('pais', 'COUNTRY', $string);
echo $nova_string;