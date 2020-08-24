<?php

$Name = $_REQUEST[''];
$Email = $_REQUEST[''];
$Message = $_REQUEST[''];


$con = mysqli_connect("", "", "","");
 

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "insert into Feedback (Name,Email,Message) values ('$Name','$Email','$Message')";
if(mysqli_query($con, $sql))
{
    echo "Message sent successfully.";
} 
else
{
    echo "ERROR:  $sql. " . mysqli_error($con);
}

mysqli_close($con);
?>