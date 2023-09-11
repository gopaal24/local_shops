<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send List</title>
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
        .main{
            position: relative;
            top: 120px;
        }
        .btn-submit{
            margin-top: 20px;
        }
        .row{
            margin-top:20px;
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
    <div class="container w-50 main">
        
            <div class="row d-flex">
                <div class="col-md-5">
                    <label >Items</label>
                </div>
                <div class="col-md-3">
                    <label >Amount</label>
                    <small class="text-muted">In grams</small>
                </div>
                <div class="col-md-3">
                    <label >Quantity</label>
                </div>
                <div class="col-md-1">
                    <button onclick="add()" class="btn btn-primary">+</button>
                </div>
            </div>
            <form action="list-send.php" method="post">
            <div class="row">
            <div class="col-md-5">
                    <input class="form-control" name="items" type="text">
                </div>
                <div class="col-md-3">
                    <input class="form-control" name="amount" type="text">
                </div>
                <div class="col-md-3">
                    <input class="form-control" name="quantity" type="text">
                </div>
            </div>
            <div id="container"></div>
            <button class="btn btn-primary btn-submit">Submit</button>
        </div>

        <script>
            function add(){
                console.log("working");
                var div1 = document.createElement("div");
                var div2 = document.createElement("div");
                var div3 = document.createElement("div");
                var div4 = document.createElement("div");
                var input1 = document.createElement("input");
                var input2 = document.createElement("input");
                var input3 = document.createElement("input");
                counter1=1;
                counter2=1;
                counter3=1;

                div1.setAttribute("class", "row");
                div2.setAttribute("class", "col-md-5");
                div3.setAttribute("class", "col-md-3");
                div4.setAttribute("class", "col-md-3");

                div1.appendChild(div2);
                div1.appendChild(div3);
                div1.appendChild(div4);

                input1.setAttribute("type", "text");
                input1.setAttribute("name","items"+counter1);
                input1.setAttribute("class", "form-control");
                
                input2.setAttribute("type", "text");
                input2.setAttribute("name","amount"+counter2);
                input2.setAttribute("class", "form-control");
                
                input3.setAttribute("type", "text");
                input3.setAttribute("name","quantity"+counter3);
                input3.setAttribute("class", "form-control");

                div2.appendChild(input1);
                div3.appendChild(input2);
                div4.appendChild(input3);

                document.getElementById("container").appendChild(div1);
            }
        </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>