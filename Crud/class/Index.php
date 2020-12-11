<?php

class modulo
{
//funções aqui

}

if (isset($_POST["rq"])) {
    session_start();
    $request = $_POST["rq"];
    switch ($request) {
        case 'cadastrar':
            echo 'Deu certo!';
            break;
    }

}

?>