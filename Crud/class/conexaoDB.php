<?php

$host = "localhost";
$port = "5432";
$dbname = "treinamento";
$user = "postgres";
$password = "admin";
$conexao = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($conexao);

?>