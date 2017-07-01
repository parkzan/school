<?php 
   $host ="localhost";
   $name ="root";
   $pass ="";
   $db ="login";
   $con = mysqli_connect($host,$name,$pass,$db);
   $sql = "select * from employee";
   $query  = mysqli_query($con,$sql);
    

   $user = $_POST['username'];
   $pass = $_POST['password']; 
   $result = mysqli_fetch_array($query,MYSQLI_ASSOC)
   while (!$result) {
   	if($user==$result['username']){
   		if($pass ==$result['password']){
   			echo "Wellcome";
   		}else{
   			echo "password incorrect";
   		}
   	}
   	
   }
  

 
 ?>