<?php

use function PHPSTORM_META\type;

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$mobile_num = $_POST["mobile_num"];
$license = $_POST["license"];
$shop_name = $_POST["shop_name"];
$shop_type = $_POST["shop_type"];

$host = "localhost";
$dbname = "local_shops";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);
if(mysqli_connect_error()){
    die("connection error:".mysqli_connect_error());
}

$sql = "INSERT INTO details(first_name, last_name, mobile_num, license, shop_name, shop_type)
        VALUES(?,?,?,?,?,?)";

$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssissi",$first_name, $last_name, $mobile_num, $license, $shop_name, $shop_type);
mysqli_stmt_execute($stmt);
echo "Record Saved";

echo "<br><a href=\"shop_types/receive-list.php\" type=\"button\">Ok</a>";
exit();

?>