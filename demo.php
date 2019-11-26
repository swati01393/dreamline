<?php
  $user="root";
  $password="";
  $db="dreamline";
  
  $con=mysqli_connect('localhost',$user, $password,$db) or die ("unable to connect");
  echo"Great Work!!!";
 
 if(mysqli_connect_error())
	 {
		 echo "faled to connect to mysql:" .mysqli_connect_error();
	 }
	 $sql="insert into 		login(username,password)valuse('swati1','swati13,)";
	  
	 if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

	 
	mysqli_close($con);	 
 
  

?>
 