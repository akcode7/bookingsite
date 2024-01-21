
<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "bookingsite";

$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn){
    echo "error";
}

?>