<?php

class modulo
{
    public function setUser()
    {
        $Username = $_POST["Username"];
        $Senha = $_POST["Senha"];
        $Email = $_POST["Email"];
        $CPF = $_POST["CPF"];
        $Nascimento = $_POST["Nascimento"];
        $Cidade = $_POST["Cidade"];
        echo "Função setUser entrando";

    }

}

if (isset($_POST["rq"])) {
    session_start();
    $loadClass = new Modulo();
    $request = $_POST["rq"];


    switch ($request) {
        case 'cadastrar':
            echo $loadClass->setUser();
            break;
    }

}

?>
