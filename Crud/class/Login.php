<?php

require_once 'Banco.php';

class Login extends Banco
{
    public function Logar()
    {
        $CPF_login = $_POST["CPF_login"];
        $senha_login = $_POST["senha_login"];

        $sql = "select cpf,senha from users where cpf = '{$CPF_login}'and senha='{$senha_login}';";
        $rs = pg_query($this->db, $sql);

        if (pg_num_rows($rs) > 0){
          echo 'Dados corretos! falta termina a função login';
        }
        else {
            echo 'dados_invalidos';
        }
    }
}