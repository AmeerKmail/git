<?php

class Eleminar extends Connect{
    
    public function __construct($id){
        parent:: __construct();
        
        $sql = "DELETE FROM usuarios  where ID=$id";
        
        $this->conn->query($sql);
        header("location:index.php");
        
        
    }
    
    
}
?>