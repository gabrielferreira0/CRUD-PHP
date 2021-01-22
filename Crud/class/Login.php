<?php

require_once 'Banco.php';

class Login extends Banco
{
    public function Logar()
    {
        //session_start();
        $CPF_login = $_POST["CPF_login"];
        $senha_login = $_POST["senha_login"];
        $sql = "select * from users where cpf = '{$CPF_login}'and senha='{$senha_login}';";
        $rs = pg_query($this->db, $sql);
        $dados = pg_fetch_array($rs, 0, PGSQL_NUM);

        if (pg_num_rows($rs) > 0) {
            $_SESSION['User'] = $dados[1];
            $_SESSION['Password'] = $dados[2];
            $_SESSION['Email'] = $dados[3];
            $_SESSION['CPF'] = $CPF_login;
            $_SESSION['Nascimento'] = $dados[5];
            $_SESSION['Cidade'] = $dados[6];
            $_SESSION['Telefone'] = $dados[7];
            $_SESSION['UF'] = $dados[8];
            //header('location:../Perfil.php');
            echo 'true';
        } else {
            echo 'false';
        }
    }
}