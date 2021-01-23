<?php
require_once 'Banco.php';

class deletar extends Banco
{
    public function delete()
    {
        $id = $_SESSION['id'];
        $sql = "delete from users where id = {$id};";
        $rs = pg_query($this->db, $sql);
        if ($rs){
            session_destroy();
            return 'true';
        }
    }
}