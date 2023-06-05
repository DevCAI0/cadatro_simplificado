<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <form action="cadastrar.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
        
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>
        
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
