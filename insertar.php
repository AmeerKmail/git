<?php

class Insertar extends Connect{
    
    
    public function  __construct($name,$age){
        
        parent:: __construct();
        
        $sql ="INSERT INTO usuarios(NAME,AGE) VALUES(:name,:age)";
        
        $result = $this->conn->prepare($sql);
        $result->execute(array(":name"=>$name,":age"=>$age));
        header("location:index.php");
        
    }
}
?>