<?php
$conn=mysqli_connect("localhost","root","","pdetail");
if(!$conn){
    echo "Database not connected". mysqli_connect_error();
}
?>