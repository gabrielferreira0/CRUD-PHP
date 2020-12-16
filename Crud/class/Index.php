<?php

class modulo
{
    public function setUser()
    {
        global $dbconn;
        $userName = $_POST["Username"];
        $senha = $_POST["Senha"];
        $email = $_POST["Email"];
        $CPF = $_POST["CPF"];
        $nascimento = $_POST["Nascimento"];
        $cidade = $_POST["Cidade"];      
        // return date("d/m/Y", strtotime($nascimento));


        $sql = "insert into Users(username,senha,email,cpf,nascimento,cidade) values ('$userName','$senha','$email','$CPF','$nascimento','$cidade');";
        $result = pg_query($dbconn, $sql);
        if($result){
            echo "Insert sucesso";
          }  

    }
}

if (isset($_POST["rq"])) {
    session_start();
    $loadClass = new Modulo();
    $request = $_POST["rq"];

include_once "conexaoDB.php";


    switch ($request) {
        case 'cadastrar':
            echo $loadClass->setUser($dbconn);
            break;
    }
}

?>
