<?php

class Conexao {

    private $host;
    private $user;
    private $password;
    private $database;
    private $port;
    private $con;

    public function __construct($host, $user, $password, $database, $port) {

        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
        $this->port = $port;
        $this->con = mysqli_connect($host, $user, $password, $database, $port)or die("Erro ao conectar ao MYSQL");
        
        
    }

    public function Query($query){
        
        $result = mysqli_query($this->con, $query);
        $resultToArray = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $resultToArray;
        
    }


}
