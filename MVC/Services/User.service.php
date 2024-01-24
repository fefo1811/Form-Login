<?php 

class UserService {
    private $connection;
    private $user;

    public function __construct($connection, $user) {
        $this->connection = $connection->connectDB(); // Iniciando a conexão que está sendo passada pelo User_controller
        $this->user = $user; // Classe User que está sendo passada pelo User_controller
    }

    public function create() {
        $query = "insert into sys_users(nome, email, senha) values (:nome, :email, :senha)";
        $statement = $this->connection->prepare($query);
        $statement->bindValue(':nome', $this->user->__get('name'));
        $statement->bindValue(':email', $this->user->__get('email'));
        $statement->bindValue(':senha', $this->user->__get('user_password'));
        $statement->execute();
    }
}

?>