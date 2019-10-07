<?php
   

   $dbhost = 'localhost';

   $dbuser = 'root';
 
  $dbpass = '';
 
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
  
 
   if(! $conn )
 {
      die('Could not connect: ' . mysqli_error());
	
   }


   
     $FNO=$_POST['FNO'];
	
        $FNAME=$_POST['FNAME'];

	$ATIME=$_POST['ATIME'];

        $DTIME=$_POST['DTIME'];

        $TSEATS=$_POST['TSEATS'];

 
  	$sql="insert into FLIGHTS values ('$FNO','$FNAME','$ATIME','$DTIME','$TSEATS');";

	mysqli_select_db($conn,'asd');
	
$retval = mysqli_query($conn,$sql);

	if(! $retval )
 {
               die('Could not enter data: ' . mysqli_error());
   
     }
	
echo 'Inserted';
	
 mysqli_close($conn);


?>
