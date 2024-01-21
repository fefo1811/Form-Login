<?php session_start();
if(isset($_GET['error'])){
    echo $_GET['error'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/form.css">
    <title>Tela Login</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Faça o seu login</h1>
        </div>
        
        <form action="validate.php" method="post" class="form-container">
            <label>E-mail: </label>
            <input type="text" name="email"> <br>

            <label>Senha: </label>
            <input type="text" name="password"> <br>

            <button type="submit">Entrar</button>
        </form>
        
        <p>Não tem cadastro? <a href="Pages/signup.php">Cadastre-se já!</a></p>
    </div>
</body>
</html>