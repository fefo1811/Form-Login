<?php 

require '../Models/User.model.php';
require '../Services/User.service.php';
require '../Services/Connection.php';

$values = [$_POST['name'], $_POST['email'], $_POST['password']]; // Trazendo os dados do front

$user = new User(); // Instanciando a classe User para enviar para o userService
$connection = new Connection(); // Instanciando a classe Connection para enviar para o userService
$userService = new UserService($connection, $user); // Instanciando o userService para iniciar a conexão e executar uma query

$user->__set(['name', 'email', 'user_password'], $values); // Levando os dados passados do front para ligar nos atributos da tabela no Banco de Dados
$userService->create(); // Executando o método create() para inserir os dados no banco de Dados

echo '<pre>';
print_r($user);
echo '</pre>';


// $users = [];

// $info = ['name', 'email', 'password'];


// $posto = [$_POST['name'], $_POST['email'], $_POST['password']];

// foreach($info as $data){
//     $users[$data] = $_POST[$data];
// }
// foreach($posto as $key => $data){
//     echo $key . ' ' . $data . '<br>';
// }

// $users[$data] = '';
// foreach($posto as $key => $value){
//     $users[$data] = $value;
// }

// echo '<pre>';
// print_r($user);
// echo '</pre>';
?>