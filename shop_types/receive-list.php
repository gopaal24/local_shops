<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List_receive</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
        .table{
            position: relative;
            top: 100px;
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
        $sql = "SELECT items, amount, quantity from list";
                global $conn;
                $result = mysqli_query($conn, $sql);       
        $row = mysqli_fetch_assoc($result);
?>
    <div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Items</th>
                <th scope="col">Amount</th>
                <th scope="col">Quantity</th>
                <th scope="col">Yes</th>
                <th scope="col">No</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><?php echo $row['items']?></td>
                <td><?php echo $row['amount']?></td>
                <td><?php echo $row['quantity']?></td>
                <td><button class="btn btn-success">Yes</button></td>
                <td><button class="btn btn-danger">No</button></td>

            </tr>
        </tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>