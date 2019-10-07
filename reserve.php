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

        $UID=$_POST['UID'];

  	  	$sql="select * from RESERVATIONS where USERID='$UID';";

	$result=mysqli_query($conn,$sql);

 
 
echo "<h1><center>FLIGHTS</center></h1><br>";

echo "<center><table>";
echo "<tr><td>USERID</td><td>NAME</td><td>PHONE</td><td>FNO</td><td>NUMBER OF SEATS</td></tr>";
echo "<tr><td>------------------</td><td>----------------------------------</td><td>----------------------------------</td><td>-----------------------</td><td>---------------</td></tr>";
echo "<br><br><br>";
while($row = mysqli_fetch_assoc($result))
{  
echo "<pre><tr><td>" . $row['USERID'] . "</td><td>  " . $row['NAME'] . "</td><td>  " . $row['PHONE'] . "</td><td>  " . $row['FNO'] . "</td><td>  " . $row['NSEATS'] . "</td></tr></pre>";  
}

echo "</table></center>";

?>


