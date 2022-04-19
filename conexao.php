<?php

//Criando variaveis
$host = 'localhost';
$usar = 'root';
$passwd = '';
$db_name = 'agenda_php';

//Criando conexão
$connx = mysqli_connect($host, $usar, $passwd, $db_name);


/* testando conexão
*/

if($connx){
    echo 'Conectou';
}else{
    echo 'erro';
}





?>


