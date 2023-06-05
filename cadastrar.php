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

// Recebe os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// Encripta a senha
$senha = password_hash($senha, PASSWORD_DEFAULT);

// Insere os dados no banco de dados
$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if (mysqli_query($conn, $sql)) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar o usuário: " . mysqli_error($conn);
}

// Fecha a conexão
mysqli_close($conn);
