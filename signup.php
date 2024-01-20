<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Tela Login</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Faça o seu cadastro</h1>
        </div>
        
        <p>Ja possui cadastro? <a href="./index.php">Faça o login.</a></p>
            
        <form action="home.php" method="post" class="form-container">
            <label>E-mail: </label>
            <input type="text" name="email"> <br>

            <label>Senha: </label>
            <input type="text" name="password"> <br>

            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>