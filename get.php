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

	$FNO=$_POST['FNO'];

	$sql="select * from FLIGHTS where FNO='$FNO';";

	$result=mysqli_query($conn,$sql);

	
  while($row=mysqli_fetch_assoc($result))

{
	
echo '<center>FLIGHT NAME: ' . $row['FNAME'] . '<br>';
	
echo 'FLIGHT NUMBER: ' . $row['FNO'] . '<br>';

echo 'ARRIVAL TIME: ' . $row['ATIME'] . '<br>';
		
echo 'DEPARTURE TIME: ' . $row['DTIME'] . '<br>';
		
echo 'TOTAL SEATS: ' . $row['TSEATS'] . '<br></center>';
	
}


?>
