<?php

$host = "localhost"; //Servidor
$user = "hypedx14"; //Usuario do DB
$senha = "Pfti497@"; //Senha do DB
$db = "hypedx14_db"; //Banco de dados

$site = "HypedX - Store"; //Nome do site
$email = "contato@hypedx.com.br"; //E-mail do administrador
$url = "https://hypedx.com.br/"; // Url do Site
$theme = "light"; // Tema de cores

$mysqli = new mysqli($host,$user,$senha,$db) or die($mysqli->error);
$mysqli->set_charset("utf8");

?>