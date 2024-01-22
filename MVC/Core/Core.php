<?php 

class Core {

    public function __construct(){
    // Automaticamente ao instanciar a classe, a função run() será executada
        $this->run();
    }

    public function run(){
    // Verifica se há alguma informação sendo passada via URL - usando o exemplo que está em .htaccess
        if(isset($_GET['pag'])){
            $url = $_GET['pag'];
        }
    
        $metodo = "index";
        
        // Transforma a URL obtida no método run(), transforma em array e retorna o nome da classe para uma variável
        if(!empty($url)){
            $url = explode("/", $url);
            $controller = $url[0] . 'Controller'; // Nome da classe - classeController
            array_shift($url); // Elimina o primeiro item da array

        // Verifica se há mais informação na posição 0 da array e atribui a uma outra variável
            if(isset($url[0]) and !empty($url[0])){
                $metodo = $url[0];
            }

        // Verifica se há mais valores na URL, se houver, serão armazenados dentro do array $parametros 
            if(count($url) > 0){
                $parametros = $url;
            }
        } else {
            $controller = "homeController"; // Se não houver nada depois de .com/ , o valor padrão será homeController
        }

    // Caminho para a pasta Controllers com o nome do Controller 
        $caminho = "Form-Login/Controllers/" . $controller . ".php";

    // Verifica se não existe arquivo e método e atribui um padrão caso não exista
        if(!file_exists($caminho) and !method_exists($controller, $metodo)){
            $controller = "homeController";
            $metodo = "index";
        }
    
    // Instanciando uma variável - não entendi
        $c = new $controller;
        call_user_func_array(array($c, $metodo), $parametros);
    }
}