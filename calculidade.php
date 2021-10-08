<?php

$nome = $_POST["textnome"];

$txtanonas = $_POST["txtanonas"];

$txtanoat = $_POST["txtanoat"];

echo "Valores recebidos $txtanonas e $txtanoat";


$idade = $txtanoat - $txtanonas;

echo "Olá $nome você nasceu em $txtanonas e completa esse ano $idade anos.";

?>