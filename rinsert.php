<?php
   

   $dbhost = 'localhost';

   $dbuser = 'root';
 
  $dbpass = '';
 
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
  
 
   if(! $conn )
 {
      die('Could not connect: ' . mysqli_error());
	
   }


   
     $UID=$_POST['UID'];
	
        $NAME=$_POST['NAME'];

	$PNO=$_POST['PNO'];

        $FNO=$_POST['FNO'];

        $NSEATS=$_POST['NSEATS'];

 
  	$sql="insert into RESERVATIONS values ('$UID','$NAME','$PNO','$FNO','$NSEATS');";

	mysqli_select_db($conn,'asd');
	
$retval = mysqli_query($conn,$sql);

	if(! $retval )
 {
               die('Could not enter data: ' . mysqli_error());
   
     }
	
echo 'BOOKED SUCCESSFULLY';
header("Location:booked.html");	
 mysqli_close($conn);


?>
