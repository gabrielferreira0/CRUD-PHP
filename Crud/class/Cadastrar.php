<?php

require_once 'Banco.php';

class Cadastrar extends Banco
{
    public function setUser()
    {
        $userName = $_POST["Username"];
        $senha = $_POST["Senha"];
        $email = $_POST["Email"];
        $CPF = $_POST["CPF"];
        $nascimento = $_POST["Nascimento"];
        $cidade = $_POST["Cidade"];
        // return date("d/m/Y", strtotime($nascimento));

        if ($userName == '' || $senha == '' || $email == '' || $CPF == '' || $nascimento == '' || $cidade == '') {
            echo '#alerta2';
            return;
        }

        $sql = "insert into Users(username,senha,email,cpf,nascimento,cidade) values ('$userName','$senha','$email','$CPF','$nascimento','$cidade');";
        $result = pg_query($this->db, $sql);

        if ($result) {
            echo '#alerta';
        }
    }
}

?>
