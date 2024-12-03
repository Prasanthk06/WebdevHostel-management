<?php

if($_POST["REQUEST_METHOD"=="POST"])


$host="localhost";
$username="root";
$password="";
$dbname="railway";


$con=mysqli_connect($host,$username,$password,$dbname);

if(!$con)
{

    die("Connection Failed".mysqli_connect_error());
}
$sql="INSERT INTO ticket(t_Name,t_Number,t_Date) VALUES ('$Name','$Number','$Date')";

$rs=mysqli_query($con,$sql);
if($rs)
{
    echo "Enteries added";

}
?>