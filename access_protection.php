<?php session_start();

if(!isset($_SESSION["authenticated"]) or $_SESSION["authenticated"] != "YES"){
    header("Location: index.php?error=Foi pego no pulo safadinho");
}

?>