<?php
$uid=$_POST["id"]
$uname=$_POST["name"]
$servername="localhost";
$username="root";
$password="";
$databasse="my";



$conn=new mysqli($servername,$username,$password,$databasse);

if($conn->connect_error)
{
    die("connection error."$conn->connect_error);

}
else{
    echo"connecter successfully";
}

$sql="create table userinfo('$uid','$uname')";
if($conn->query($sql)===TRUE)
{
    echo"table userinfo created successfully";
}
else{
    echo"error creating table:".$conn->error;
}
?>