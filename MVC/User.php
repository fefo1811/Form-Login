<?php 

class User {
    private $dsn = "mysql:host=localhost;dbname=sys_form";
    private $user = "root";
    private $password = "";

    public function connect(){
        try{
            $connectionBD = new PDO($this->dsn, $this->user, $this->password);
            return $connectionBD;
        } catch (PDOException $e){
            echo "Mensagem: " . $e->getMessage();
        }
    }

}

?>