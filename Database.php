<?php

class Database {

    private $host;
    private $user;
    private $password;
    private $database;
    private $port;
    private $connection;
    private $result;
    private $numRows;
    private static $instance;
    private function __construct() {

    }
    static function getInstance(){
        if(!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    public function Connect($host, $user, $password, $database, $port){
        header('Content-Type: text/html; charset=utf-8');       
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
        $this->port = $port;
        $this->connection = mysqli_connect($host, $user, $password, $database, $port)or die("Erro ao conectar ao MYSQL");
       
        mysqli_set_charset($this->connection,'utf8');
        ini_set('default_charset','UTF-8');
        mysql_query("SET NAMES 'utf8'");
        mysql_query('SET character_set_connection=utf8');
        mysql_query('SET character_set_client=utf8');
        mysql_query('SET character_set_results=utf8');
    }

    public function doQuery($sql){
        echo $sql = 
        $this->result = mysqli_query($this->connection, $sql);
        
        //$this->result->num_rows;
        
    }
    
    public function CreateArray(){
        
        $array = "No result";
        if($this->result){
            $array = mysqli_fetch_assoc($this->result);
        }
        return $array;
    }


}
