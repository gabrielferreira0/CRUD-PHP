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


    public function validarCPF($CPF){

        $validacao = preg_replace( '/[^0-9]/is', '', $CPF );
        // pega somente a numeração
        if (strlen($validacao) != 11) {
            echo 'null';
            return false;
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $validacao)) {
            echo 'CPFinvalido';
            return false;
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $validacao[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($validacao[$c] != $d) {
                echo 'CPFinvalido';
                return false;
            }
        }
        return true;
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

        if ($this->checkDB($userName, $email, $CPF)  && $this->validarCPF($CPF)) {
            $sql = "insert into Users(username,senha,email,cpf,nascimento,cidade,telefone,UF) values ('$userName','$senha','$email','$CPF','$nascimento','$cidade','$telefone','$UF');";
            $result = pg_query($this->db, $sql);
            if ($result) {
                echo '#alerta';
            }
        }

    }
}

?>
