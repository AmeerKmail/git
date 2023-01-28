<!doctype html>

<html>
	<head>
	<meta charset="utf8"/>
	<title></title>
	</head>
	<body>
	<?php
            include("extract.php");
            include("insertar.php");
            include("eleminar.php");
            //new Extract;
          //   $obj= new Extract(44);
            
            if(isset($_POST["insertar"])){
                
                $obj2= new Insertar($_POST["name"],$_POST["age"]);
                
            }
            if(isset($_GET["id"])){
                
                $obj3 = new Eleminar($_GET["id"]);                  
            }
            if(isset($_POST["search"])){
                
                $obj=    new Extract($_POST["ide"]);
             
               
               // echo $_POST["ide"];
            }else{
                $obj= new Extract(null);
                
            }
           

                
       ?>
		<form <?php echo $_SERVER["PHP_SELF"]?> method="post">
		<table style="border:1px solid black;margin-left:auto;margin-right:auto;">
			<tr>
				<td>Id  </td><td>Name</td><td>Age</td>
			</tr>
<?php       while( $reg = $obj->result->fetch(PDO::FETCH_ASSOC)):
?>
			<tr>
				<td> <?php echo $reg["ID"];?></td><td><?php echo $reg["NAME"];?></td><td><?php echo $reg["AGE"];?></td>
			<td><a href="modificar.php? id= <?php echo $reg["ID"]; ?> & name= <?php echo $reg["NAME"];?> & age= <?php echo $reg["AGE"];?>"><input type="button" name="modificar" value="Modificar" ></a></td>
				
				
				<td><a href="index.php? id=<?php echo $reg["ID"];?>"> <input type="button" name="eleminar" value="Eleminar" ></a></td>
			</tr>
			
			
<?php
            endwhile;
?>
			<tr>
				<td> </td>
				<td><input type="text" name="name" ></td>
				<td><input type="text" name="age" ></td>
			</tr>
			<tr>
			 	<td><input type="submit" name="insertar" value="Insertar" ></td>
			
			</tr>
			
			
		</table>
		</form>
		<form <?php echo $_SERVER["PHP_SELF"]?> method="post" >
			<table style="border:1px solid black;margin-left:auto;margin-right:auto;">
				<tr>
			 	<td><input type="text" name="ide" ></td>
			 	<td><input type="submit" name="search" value="Search" ></td> 
			</tr>
			</table>		
		</form>
	
	</body>
</html>


