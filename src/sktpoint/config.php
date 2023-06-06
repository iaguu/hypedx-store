<?php

$host = "localhost"; //Servidor
$user = "hypedx94"; //Usuario do DB
$senha = "2OgSv9ao96"; //Senha do DB
$db = "hypedx94_db"; //Banco de dados

// $site = "Anne & Tom"; //Nome do site
// $email = "contato@annetom.com.br"; //E-mail do administrador
// $url = "https://annetom.com.br/"; // Url do Site

$mysqli = new mysqli($host,$user,$senha,$db) or die($mysqli->error);
$mysqli->set_charset("utf8");
?>
