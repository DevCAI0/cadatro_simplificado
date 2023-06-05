<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro_usuarios";

// Cria a conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica a conexão
if (!$conn) {
    die("Erro na conexão: " . mysqli_connect_error());
}
