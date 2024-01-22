<?php 

class UserService {
    private $connection;
    private $user;

    public function __construct($connection, $user) {
        $this->connection = $connection->connectDB();
        $this->user = $user;
    }

    public function create() {
  
    }
}

?>