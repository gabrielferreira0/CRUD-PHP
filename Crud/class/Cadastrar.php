<?php

require_once 'Banco.php';

class Cadastrar extends Banco
{


    public function validarUser($userName,$email,$CPF)
    {
        $sql = "select username,email,cpf from users where username ='{$userName}' or email = '{$email}' or cpf = '{$CPF}'" ;
        $rs = pg_query($this->db, $sql);
        if (pg_num_rows($rs) > 0) {
            echo 'usuário  já cadastrado!';
        } else {
            return true;
        }
    }


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
        if ($this->validarUser($userName,$email,$CPF)) {
            $sql = "insert into Users(username,senha,email,cpf,nascimento,cidade) values ('$userName','$senha','$email','$CPF','$nascimento','$cidade');";
            $result = pg_query($this->db, $sql);
            if ($result) {
                echo '#alerta';
            }
        }

    }
}

?>
