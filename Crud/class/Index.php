<?php


if (isset($_POST["rq"])) {
    session_start();
    $request = $_POST["rq"];
    switch ($request) {
        case 'cadastrar':
            require_once 'Cadastrar.php';
            $loadClass = new Cadastrar();
            echo $loadClass->setUser();
            break;

    }
}

?>
