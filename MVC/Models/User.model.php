<?php 

class User {
    private $id;
    private $name;
    private $email;
    private $user_password;

    public function __get($info) {
        return $this->$info;
    }

    public function __set($info, $value) {
        $this->info = $value;
    }
}

?>