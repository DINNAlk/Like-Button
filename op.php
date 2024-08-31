<?php
SESSION_START();
//CONNECT TO DB
$con=mysqli_connect('localhost','root','','kaali');
$queryOne="INSERT INTO Likes(likes) VALUES('1')";
$resultOne=mysqli_query($con,$queryOne);
if($resultOne){
    header('Location: Index.php');
    exit();
}

?>