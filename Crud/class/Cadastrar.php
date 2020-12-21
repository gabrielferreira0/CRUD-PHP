<?php

require_once 'Banco.php';

class Cadastrar extends Banco
{
    public function checkDB($userName, $email, $CPF)
    {
        $sql = "select username from users where username ='{$userName}';";
        $rs = pg_query($this->db, $sql);
        if (pg_num_rows($rs) > 0) {
            echo "nomeC";
        } else {
            $sql = "select email from users where email ='{$email}';";
            $rs = pg_query($this->db, $sql);
            if (pg_num_rows($rs) > 0) {
                echo 'emailC';
            } else {
                $sql = "select cpf from users where cpf ='{$CPF}';";
                $rs = pg_query($this->db, $sql);
                if (pg_num_rows($rs) > 0) {
                    echo 'cpfC';
                } else {
                    return true;
                }
            }
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
        $telefone = $_POST["Telefone"];
        $UF = $_POST["UF"];

        // return date("d/m/Y", strtotime($nascimento));
        if ($UF == '' || $userName == '' || $senha == '' || $email == '' || $CPF == '' || $nascimento == '' || $cidade == ''|| $telefone == '' ) {
            echo 'null';
            return;
        }
        if ($this->checkDB($userName, $email, $CPF)) {
            $sql = "insert into Users(username,senha,email,cpf,nascimento,cidade,telefone,UF) values ('$userName','$senha','$email','$CPF','$nascimento','$cidade','$telefone','$UF');";
            $result = pg_query($this->db, $sql);
            if ($result) {
                echo '#alerta';
            }
        }

    }
}

?>
