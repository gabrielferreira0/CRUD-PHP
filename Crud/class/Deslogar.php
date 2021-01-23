<?php


class Deslogar
{
    public function deslogar(){
        session_destroy();
        return 'true';
    }

}