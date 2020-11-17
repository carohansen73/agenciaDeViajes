<?php
include_once 'db.helper.php';
class ApiModel{

    private $db;
    private $DBhelper;
  
    function __construct(){
        $this->DBhelper=new DBhelper();
        $this->DBhelper->connect();
    }
    
    function delete($id){

        $query = $this->db->prepare('DELETE FROM region WHERE id = ?');
        $query->execute([$id]);

        //usar esto para avisar cuando no se puede eliminar categoria!
        return $query->rowCount();
    }
}