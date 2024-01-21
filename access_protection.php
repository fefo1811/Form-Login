<?php session_start();

// Será verificado se existe uma variável de sessão ou se essa variável possui algum valor DIFERENTE de YES, caso sim o usuário será redirecionado ao index.php
// Aqui será para evitar acesso irrestrito por meio da URL
if(!isset($_SESSION["authenticated"]) or $_SESSION["authenticated"] != "YES"){
    header("Location: ../index.php?error=Foi pego no pulo safadinho");
}

?>