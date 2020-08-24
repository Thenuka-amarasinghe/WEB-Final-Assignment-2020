<?php

$con = mysqli_connect("","","","");

    $email=$_REQUEST[''];
    $pass=$_REQUEST[''];
    
    $query="select * from registration where Email='$email' and Password='$pass'";
   
    $rs=mysqli_query($con,$query);
   
    $rowcount = mysqli_num_rows($rs);
	if($rowcount == 1)
	{
		echo "<h1 align=center>Logged In</h1>";
	}
	else
	{
		echo "<h1 align=center>Please sign in</h1><br>";
	}

mysqli_close($con);
?>
