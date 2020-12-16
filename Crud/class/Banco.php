<?php 

    Class Banco {

        public $host = "127.0.0.1";
        public $port = "5432";
        public $dbname = "treinamento";
        public $user = "postgres";
        public $password = "admin";
        public $db;
       
        function __construct(){
            $conexao = "host={$this->host} port={$this->port} dbname={$this->dbname} user={$this->user} password={$this->password} ";
            $this->db = pg_connect($conexao); 
        }
       

    }
   
    

?>