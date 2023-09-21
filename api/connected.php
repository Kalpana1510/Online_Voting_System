<?php
$connect=mysqli_connect("localhost:3309","root","","voting2") or die("connection failed!");
if($connect){
    echo "Connected.....!..";
}
else
{
    echo "Not Connected";
}
?>