<?php

 class Connect{
    protected $conn;
    public  function  __construct(){
        
        $this->conn=new PDO("mysql:host=localhost;dbname=usuarios","root","");
        $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $this->conn->exec("SET CHARACTER SET UTF8");
        
    }
    
}


       
?>