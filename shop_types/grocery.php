<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groceries</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
      html,
        body{
          height: 100%;
            background-image: url("../images/background.jpg");
            background-size: cover;
        }
        .navbar-brand, h1{
            color: #6a994e;
        }
      .btn{
        position: absolute;
        right: 5%;
        top: 25%;
      }
      .card{
        position: relative;
        top: 100px;
        margin:20px;
      }
    </style>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
          <a class="navbar-brand" href="#"><h1>Corner Cart</h1></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto"></div>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<?php
        $host = "localhost";
        $dbname = "local_shops";
        $username = "root";
        $password = "";
        $conn = mysqli_connect($host, $username, $password, $dbname);
        $shop_type = 1;
        $name = array();
        $sql = "SELECT shop_name, shop_type from details where shop_type = $shop_type";
                global $conn;
                $result = mysqli_query($conn, $sql);       
                
                while($row = mysqli_fetch_assoc($result)){
                  echo '
                  <div class="container">
                  <div class="card">
                    <div class="row g-0">
                        <div class="col-md-12">
                                <div class="card-body">
                                   <h5 class="card-title">'.$row['shop_name'].'</h5>
                                   <a href="grocery_interface.php" type="button" class="btn btn-primary">Go</a>
                                   </div>
                         </div>
                    </div>
                  </div>
                  </div>';
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