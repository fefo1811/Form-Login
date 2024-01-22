<?php 

class Connection {
    private $dsn = "mysql:host=localhost;dbname=sys_form";
    private $user = "root";
    private $password = "";

    public function connectDB(){
        try {
            $connection = new PDO($this->dsn, $this->user, $this->password);
            return $connection;
        } catch (PDOException $error) {
            echo "Messagem: " . $error->getMessage();
        }
    }
}

?>