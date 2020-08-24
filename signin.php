<?php

$UserName = $_REQUEST[''];
$FirstName = $_REQUEST[''];
$LastName = $_REQUEST[''];
$Country = $_REQUEST[''];
$Email = $_REQUEST[''];
$Password = $_REQUEST[''];

$con = mysqli_connect("", "", "","");

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sqlq = "insert into  () values ('$UserName','$FirstName','$LastName','$Country','$Email','$Password')";
if(mysqli_query($con, $sqlq))
{
    echo "Records inserted successfully.";
} 
else
{
    echo "ERROR $sqlq. " . mysqli_error($con);
}
mysqli_close($con);
?>