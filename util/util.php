<?php

$valor = "200";
$telefone = "123456789101";

function limpar_texto($str){
    return preg_replace("/[^0-9]/", "", $str);
}

limpar_texto($valor);

echo $valor . "<br>";

if(strlen($telefone) != 11){
    echo "Telefone inválido quantidade de digitos tem que ser igual 11";
}

if( empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "E-mail inválido";
}
?>