<?php
include "conexao.php";

$titulo = $_POST["titulo"];
$sinopse = $_POST["titulo"];
$poster = $_POST["poster"];
$nota = $_POST["nota"];

$sql = "INSERT INTO filmes (titulo, poster, sinopse, nota) VALUES (
    '$titulo',
    '$poster',
    '$sinopse',
    '$nota' )";

$filmes = $conn->prepare($sql);
$filmes->execute();
