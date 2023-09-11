<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electrician</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
      .btn{
        position: absolute;
        right: 5%;
        top: 25%;
      }
      </style>
</head>
<body>
    Electrician
    <div class="card">
                    <div class="row g-0">
                        <div class="col-md-12">
                                <div class="card-body">
                                   <h5 class="card-title">Rahul_shopity</h5>
                                   <button onclick="chat()" type="button" class="btn btn-primary">Go</a>
                                </div>
                         </div>
                    </div>
                  </div>
    <?php
        $host = "localhost";
        $dbname = "local_shops";
        $username = "root";
        $password = "";
        $conn = mysqli_connect($host, $username, $password, $dbname);
        $shop_type = 5;
        $sql = "SELECT shop_name, shop_type from details where shop_type = $shop_type";
                global $conn;
                $result = mysqli_query($conn, $sql);       
                
                while($row = mysqli_fetch_assoc($result)){
                  echo $row["shop_name"]."<br>";
                }
                $conn -> close();
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script>
  function chat(){
    window.open("http://localhost:8000");
  }
</script>
</body>
</html>