<?php

include("connect.php");
class Modificar extends Connect{
    
    
    public function __construct($id,$name,$age){
        parent:: __construct();
        
        
        $sql="UPDATE usuarios SET NAME=:name, AGE=:age WHERE ID=:id";
        $result=$this->conn->prepare($sql);
        $result->execute(array(":name"=>$name,":age"=>$age,":id"=>$id,));
        header("location:index.php");
        
      
    }
}

if(isset($_POST["modificar"])){
    
    new Modificar($_POST["id"],$_POST["name"],$_POST["age"]);
    
}


?>
<form <?php echo $_SERVER["PHP_SELF"]?> method="post">
		<table>
		
			<tr>
				<td><input type="text" name="id" readonly value="<?php echo  $_GET["id"];?>"></td>
				<td><input type="text" name="name"  value ="<?php echo  $_GET["name"];?>" ></td>
				<td><input type="text" name="age"  value = "<?php echo  $_GET["age"];?>"></td>
			</tr>
			<tr>
			 	<td><input type="submit" name="modificar" value="Modificar" ></td>
			 	
			</tr>
			
		</table>
		</form>