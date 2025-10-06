<?php
class App{
    protected $controller = "Home";
    protected $method = "index";
    protected $params = [];

    public function __construct(){
        $url = $this->ParseURL();

        if($url == null){
            $url[0] = $this->controller;
        }

        // controller
        if(file_exists("../app/controller/" . $url[0] . ".php")){
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once "../app/controller/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        // method
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // params
        if(!empty($url)){
            $this->params = array_values($url);
        }

        //Jalankan controller & method, serta kirimkan param jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function ParseURL(){
        if(isset($_GET['url'])){
            $url = trim(string: $_GET['url'], characters: '/');
            $url = filter_var(value: $url, filter: FILTER_SANITIZE_URL);
            $url = explode(separator: '/', string: $url);
            return $url;
        }
    }
}