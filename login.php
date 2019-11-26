<?php
    $user="root";
	$password="";
	$db="dreamline";

	$con=mysqli_connect('localhost',$user, $password,$db);
	  // echo"Great Work!!!";
	 
	 // if(mysqli_connect_error())
		 // {
			 // echo "faled to connect to mysql:" .mysqli_connect_error();
		 // }
		$uname=$_POST['username'];
		$password=$_POST['password'];
		$sql= "select * from login  where username='".$uname."'AND password='".$password."'";
			 $result= mysqli_query($con,$sql);
		     if(mysqli_num_rows($result)==1||isset($_POST["submit"]))
		     {
			
			    header("location:demo.php");
			    echo  "you have successfully logged in ";
			  }
		   else{
			  	 echo "you have entered incorrect Passwoerd";
			   }
	
		 
		 
		 
		mysqli_close($con);	 
	 
	 

 
	?>
	 

<!DOCTYPE html>
 <html>
 <head>
	<title>Login page</title>

  <link rel="stylesheet" href="styles.css">
 </head>
 <body>
 <div class="wrap"> 
 <h2>Log In with </h2>
 <form method="POST" action="#">

 <label>Username:</label><br>
                    <input type="text" name="username" placeholder="Enter user name "/><br>
                    <label>Password :</label><br>
                    <input type="password" name="password" placeholder="enter password here"/><br>
                  <input type="submit" name="submit" value="Login In" class="btn-logn" />
 </form>
 </div>
 <div> <table><tr><td>name</td>
 <td>email</td></tr></table></div>
 

 
 </body>
 <html>
 
 