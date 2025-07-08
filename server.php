<?php
$username="root";
$password="";
$database="dummy_db";
$host="localhost";
$conn = mysqli_connect($host,$username,$password,$database);


if( $_SERVER["REQUEST_METHOD"]== "POST"){

    $name= htmlspecialchars($_POST["name"]);
    $age= htmlspecialchars($_POST["age"]);
    $address= htmlspecialchars($_POST["address"]);

    $sql="INSERT INTO `user`(`name`, `age`, `address`) VALUES ('$name', '$age', '$address')";

    $conn->query($sql);
    echo "<h1>Data added successfully</h1>";

}
