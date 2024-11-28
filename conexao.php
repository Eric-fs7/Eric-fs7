<?php
$hostname = "localhoste";
$bancodedados = "turistche.sql";
$usuario = "root";
$senha = "aluno";



$mysqli = new mysqli ($hostname, $usuario, $senha, $bancodedados);
if($mysqli -> connect_error) {
    echo"falha ao conectar: (" . $mysqli-> connect_error . ")" . $mysqli-> connect_error




}
?>