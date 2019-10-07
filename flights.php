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

	

	$sql="select * from FLIGHTS;";

	$result=mysqli_query($conn,$sql);

 
 
echo "<h1><center>FLIGHTS</center></h1><br>";

echo "<center><table>";
echo "<tr><td>F_NUMBER</td><td>F_NAME</td><td>SOURCE</td><td>DESTINATION</td><td>ARRIVAL</td><td>DEPARTURE</td></tr>";
echo "<tr><td>------------------</td><td>----------------------------------</td><td>----------------------------------</td><td>-----------------------</td><td>---------------</td><td>-------------------</td></tr>";
echo "<br><br><br>";
while($row = mysqli_fetch_assoc($result))
{  
echo "<pre><tr><td>" . $row['FNO'] . "</td><td>  " . $row['FNAME'] . "</td><td>  " . $row['SOURCE'] . "</td><td>  " . $row['DESTINATION'] . "</td><td>  " . $row['ATIME'] . "</td><td>" . $row['DTIME'] . "</td></tr></pre>";  
}

echo "</table></center>";

?>


