<?php 

class User {
    private $id;
    private $name;
    private $email;
    private $user_password;

    public function __get($attr) {
        return $this->$attr;
    }
    
    public function __set($attr, $value) {
        // Resumidamente interligando os atributos da classe User.model com os valores passados pelo front
        foreach($attr as $key => $user_attr) {
            if(property_exists($this, $user_attr)) {
                $this->$user_attr = $value[$key];
            }
        }
    }
}

?>