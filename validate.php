<?php session_start();

// Lista mockada de usuários para testar - posteriormente pretendo adicionar aqui os dados que estarão no banco de dados
$users = [
    ["user_Email" => "felipedasr3232@gmail.com", "user_Pass" => "1234"]
];

// Variável para indicar se o usuário está autenticado - funciona para bloquear acesso pela URL no arquivo access_protection.php
$authUser = false;

echo "<pre>";
print_r($_POST);
echo "</pre>";

// Verificação dos dados passados pelo usuário com os dados mockados
foreach($users as $user){
    if($_POST["email"] === $user["user_Email"] and $_POST["password"] === $user["user_Pass"]){
        $authUser = true; 
    }
}

// Caso o usuário seja autenticado, será criado uma variável de sessão com o valor YES e o usuário será direcionado a página home.php
// Caso não, será armazenado o valor NO ma variável e o usuário será redirecinado ao index.php com uma mensagem de erro
if($authUser){
    $_SESSION["authenticated"] = "YES";
    header("Location: Pages/home.php");
} else {
    $_SESSION["authenticated"] = "NO";
    header("Location: ../index.php?error=Errou feio!");
}
    
?>