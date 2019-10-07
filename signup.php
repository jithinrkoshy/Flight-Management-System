<?php
   
  
 $dbhost = 'localhost';
 
  $dbuser = 'root';
  
 $dbpass = '';
  
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
  
 if(! $conn )

 {
      die('Could not connect: ' . mysqli_error());
	

   }


	
	$uname=$_POST['uname'];

        $pass=$_POST['pass'];

 	$sql="insert into login values ('$uname','$pass');";

	mysqli_select_db($conn,'asd');

       

	
  $retval = mysqli_query($conn,$sql);

	if(! $retval )
 {
               die('Could not enter data: ' . mysqli_error());
   
     }
	
header("Location:index.html");
 
?>
