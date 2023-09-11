<?php

$items = $_POST["items"];
$amount = $_POST["amount"];
$quantity = $_POST["quantity"];

$host = "localhost";
$dbname = "local_shops";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);
if(mysqli_connect_error()){
    die("connection error:".mysqli_connect_error());
}

$sql = "INSERT INTO list(items, amount, quantity)
        VALUES(?,?,?)";

$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sii",$items, $amount, $quantity);
mysqli_stmt_execute($stmt);
echo "Record Saved";


?>