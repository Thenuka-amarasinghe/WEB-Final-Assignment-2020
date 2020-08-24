<?php
$CheckIN = $_REQUEST[''];
$CheckOUT = $_REQUEST[''];
$Hotel = $_REQUEST[''];
$NORooms=$_REQUEST[''];
$NOAdults = $_REQUEST[''];
$Nochild = $_REQUEST[''];


$con = mysqli_connect("", "", "","");
 

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "insert into booking ()
 values ('$CheckIN','$CheckOUT','$Hotel','$NORooms','$NOAdults','$Nochild')";
if(mysqli_query($con, $sql))
{
    echo "Records inserted successfully.";
} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

mysqli_close($con);

?>