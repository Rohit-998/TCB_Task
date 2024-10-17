<?php
$servername="localhost";
$username= "root";
$password= "";
$dbname= "data";
$conn= mysqli_connect($servername, $username, $password, $dbname);
if($conn){

}else{
    echo "connection failed" .mysqli_connect_error();
}
?>