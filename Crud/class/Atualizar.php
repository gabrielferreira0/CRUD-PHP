<?php

require_once 'Banco.php';

class Atualizar extends Banco
{
    public function update()
    {
        $id = $_SESSION['id'];
        $userName = $_POST["Username"];
        $password = $_POST["Senha"];
        $nascimento = $_POST["Nascimento"];
        $cidade = $_POST["Cidade"];
        $telefone = $_POST["Telefone"];
        $UF = $_POST["UF"];

        if ($UF == '' || $userName == '' ||$password == '' || $nascimento == '' || $cidade == '' || $telefone == '') {
            return 'null';
        } else {
            $sql = "UPDATE users SET username = '{$userName}',senha = '{$password}',nascimento = '{$nascimento}',cidade = '{$cidade}',telefone = '{$telefone}',uf = '{$UF}' WHERE id = {$id}; ";
            $rs = pg_query($this->db, $sql);
            if ($rs){
                $_SESSION['User'] =  $userName;
                $_SESSION['Password'] =$password;
                $_SESSION['Nascimento'] = $nascimento;
                $_SESSION['Cidade'] =  $cidade;
                $_SESSION['Telefone'] = $telefone;
                $_SESSION['UF'] = $UF;
                return 'true';
            }
            else {
                return 'false';
            }
        }

    }
}