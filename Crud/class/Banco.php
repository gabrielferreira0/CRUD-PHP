<?php 

    Class Banco {
        public $host = "localhost";
        public $port = "5432";
        public $dbname = "treinando";
        public $user = "postgres";
        public $password = "admin";
        public $db;
        function __construct(){
            $conexao = "host={$this->host} port={$this->port} dbname={$this->dbname} user={$this->user} password={$this->password} ";
            $this->db = pg_connect($conexao); 
        }
    }
?>