<?php
include("connect.php");
class Extract extends Connect{
    public $result;
    public function  __construct($id){       

        parent:: __construct();
        $sql="SELECT * FROM usuarios WHERE ID=:id";
        
             $this->result=$this->conn->prepare($sql);
             $this->result->execute(array(":id"=>$id));
         //  $this->result=$this->conn->query($sql);
       
  
        
     /*   
        while($reg = $result->fetch(PDO::FETCH_ASSOC)){
            
            echo $reg["ID"];
            echo " ".$reg["NAME"];
            echo " ".$reg["AGE"]."</br>";
            
            
        }
            */
            
    }}
  
   
?>