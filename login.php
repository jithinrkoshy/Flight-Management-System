<?php
   
  
 $dbhost = 'localhost';
 
  $dbuser = 'root';
  
 $dbpass = '';
  
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
  
 if(! $conn )

 {
      die('Could not connect: ' . mysqli_error());
	

   }


	mysqli_select_db($conn,'asd');

	$uname=$_POST['uname'];

        $pass=$_POST['pass'];

 	$sql="select * from login where login='$uname' AND password='$pass';";

	$result=mysqli_query($conn,$sql);

	
  if($row=mysqli_fetch_assoc($result))

{
	echo 'success<br>';
     header("Location:booking.html");
	
}

else
{

echo '<h1>wrong credentials!!!</h1>';

}
mysqli_close($conn);
?>
