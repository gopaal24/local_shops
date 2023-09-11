<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Plumber
    <?php
        $host = "localhost";
        $dbname = "local_shops";
        $username = "root";
        $password = "";
        $conn = mysqli_connect($host, $username, $password, $dbname);
        $shop_type = 6;
        $sql = "SELECT shop_name, shop_type from details where shop_type = $shop_type";
                global $conn;
                $result = mysqli_query($conn, $sql);       
                
                while($row = mysqli_fetch_assoc($result)){
                  echo $row["shop_name"]."<br>";
                }
                $conn -> close();
?>
</body>
</html>