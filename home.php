<?php session_start();
$userEmail = $_POST['email'];
$_SESSION['userEmail'] = $userEmail;

echo "Até que deu certo <br>";
echo "O email passado foi o " . $_POST['email'] . "<br><br>";

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

?>