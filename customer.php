<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-col-sm-6 Compatible" col-sm-6 content="IE=edge">
    <meta name="viewport" col-sm-6 content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .nav-name, h1{
          color: #6a994e;
        }
        html,
        body{
            height: 100%;
            background-image: url("images/background.jpg");
            background-size: cover;
        }
        .card_{
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .main{
          position: relative;
          top: 100px;
        }
        #mySelect{
            margin-top: 20px;
            margin-bottom: 20px;
        }
        
    </style>
</head>
<body>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3" id="my_nav">
        <div class="container">
          <a class="navbar-brand nav-name" href="#"><h1>Corner Cart</h1></a>
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


        <div class="container">
          <div class="main">
            <select class="form-select w-50 " id="mySelect">
                <option selected><--Select Location--></option>
                <option value="1">Kalimandir</option>
                <option value="2">Bandlaguda Jagir</option>
                <option value="3">Gandipet</option>
                <option value="4">Narsing</option>
              </select>
              <h3>Products</h3>
            <div class="row" id="card_holder">
                <div class="col-sm-6 col-md-4 col-sm-6 col-lg-2 card_">
                    <div class="card">
                        <img class="card-img-top" src="images/grocery.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                          <h5 class="card-title">Grocery</h5>
                          <a href="shop_types/grocery.php" type="button" class ="btn btn-primary">Available Shops</a>
                        </div>
                      </div>
                </div>
                <div class="col-sm-6 col-md-4 col-sm-6 col-lg-2 card_">
                    <div class="card">
                        <img class="card-img-top" src="images/meat.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                          <h5 class="card-title ">Meat</h5>
                          <a href="shop_types/Meat.php" type="button" class ="btn btn-primary">Available Shops</a>
                        </div>
                      </div>
                </div>
                <div class="col-sm-6 col-md-4 col-sm-6 col-lg-2 card_">
                    <div class="card" >
                        <img class="card-img-top" src="images/dairy.jpg" alt="Card image cap">
                        <div class="card-body text-center ">
                          <h5 class="card-title">Diary</h5>
                          <a href="shop_types/diary.php" type="button" class ="btn btn-primary">Available Shops</a>
                        </div>
                      </div>
                </div>
                <div class="col-sm-6 col-md-4 col-sm-6 col-lg-2 card_">
                    <div class="card" >
                        <img class="card-img-top" src="marker.png" alt="Card image cap">
                        <div class="card-body text-center">
                          <h5 class="card-title">Food</h5>
                          <a href="shop_types/Food.php" type="button" class ="btn btn-primary">Available Shops</a>
                        </div>
                      </div>
                </div>
            
                <div class="col-sm-6 col-md-4 col-sm-6 col-lg-2 card_">
                    <div class="card" >
                        <img class="card-img-top" src="marker.png" alt="Card image cap">
                        <div class="card-body text-center">
                          <h5 class="card-title">Stationary</h5>
                          <a href="shop_types/Food.php" type="button" class ="btn btn-primary">Available Shops</a>
                        </div>
                      </div>
                </div>
            
                <div class="col-sm-6 col-md-4 col-sm-6 col-lg-2 card_">
                    <div class="card" >
                        <img class="card-img-top" src="marker.png" alt="Card image cap">
                        <div class="card-body text-center">
                          <h5 class="card-title">Electronics</h5>
                          <a href="shop_types/Food.php" type="button" class ="btn btn-primary">Available Shops</a>
                        </div>
                      </div>
                </div>
            
                <div class="col-sm-6 col-md-4 col-sm-6 col-lg-2 card_">
                    <div class="card" >
                        <img class="card-img-top" src="marker.png" alt="Card image cap">
                        <div class="card-body text-center">
                          <h5 class="card-title">Pharmacy</h5>
                          <a href="shop_types/Food.php" type="button" class ="btn btn-primary">Available Shops</a>
                        </div>
                      </div>
                </div>
            
                <div class="col-sm-6 col-md-4 col-sm-6 col-lg-2 card_">
                    <div class="card" >
                        <img class="card-img-top" src="marker.png" alt="Card image cap">
                        <div class="card-body text-center">
                          <h5 class="card-title">Footware</h5>
                          <a href="shop_types/Food.php" type="button" class ="btn btn-primary">Available Shops</a>
                        </div>
                      </div>
                </div>
            
                <div class="col-sm-6 col-md-4 col-sm-6 col-lg-2 card_">
                    <div class="card" >
                        <img class="card-img-top" src="marker.png" alt="Card image cap">
                        <div class="card-body text-center">
                          <h5 class="card-title">Paints</h5>
                          <a href="shop_types/Food.php" type="button" class ="btn btn-primary">Available Shops</a>
                        </div>
                      </div>
                </div>
            </div>

            <h3>Service</h3>
            <div class="row">
            <div class="col-sm-6 col-md-4 col-sm-6 col-lg-2 card_">
                    <div class="card" >
                        <img class="card-img-top" src="marker.png" alt="Card image cap">
                        <div class="card-body text-center">
                          <h5 class="card-title">Electrician</h5>
                          <a href="shop_types/Electricain.php" type="button" class ="btn btn-primary">Available Shops</a>
                        </div>
                      </div>
                </div>
                <div class="col-sm-6 col-md-4 col-sm-6 col-lg-2 card_">
                    <div class="card" >
                        <img class="card-img-top" src="marker.png" alt="Card image cap">
                        <div class="card-body text-center">
                          <h5 class="card-title">Plumber</h5>
                          <a href="shop_types/PLumber.php" type="button" class ="btn btn-primary">Available Shops</a>
                        </div>
                      </div>
                </div>
                <div class="col-sm-6 col-md-4 col-sm-6 col-lg-2 card_">
                    <div class="card" >
                        <img class="card-img-top" src="marker.png" alt="Card image cap">
                        <div class="card-body text-center">
                          <h5 class="card-title">Saloon</h5>
                          <a href="shop_types/PLumber.php" type="button" class ="btn btn-primary">Available Shops</a>
                        </div>
                      </div>
                </div>
                <div class="col-sm-6 col-md-4 col-sm-6 col-lg-2 card_">
                    <div class="card" >
                        <img class="card-img-top" src="marker.png" alt="Card image cap">
                        <div class="card-body text-center">
                          <h5 class="card-title">Beauty Parlor</h5>
                          <a href="shop_types/PLumber.php" type="button" class ="btn btn-primary">Available Shops</a>
                        </div>
                      </div>
                </div>
                <div class="col-sm-6 col-md-4 col-sm-6 col-lg-2 card_">
                    <div class="card" >
                        <img class="card-img-top" src="marker.png" alt="Card image cap">
                        <div class="card-body text-center">
                          <h5 class="card-title">Cleaner</h5>
                          <a href="shop_types/PLumber.php" type="button" class ="btn btn-primary">Available Shops</a>
                        </div>
                      </div>
                </div>
                <div class="col-sm-6 col-md-4 col-sm-6 col-lg-2 card_">
                    <div class="card" >
                        <img class="card-img-top" src="marker.png" alt="Card image cap">
                        <div class="card-body text-center">
                          <h5 class="card-title">Carpenter</h5>
                          <a href="shop_types/PLumber.php" type="button" class ="btn btn-primary">Available Shops</a>
                        </div>
                      </div>
                </div>
                <div class="col-sm-6 col-md-4 col-sm-6 col-lg-2 card_">
                    <div class="card" >
                        <img class="card-img-top" src="marker.png" alt="Card image cap">
                        <div class="card-body text-center">
                          <h5 class="card-title">Painter</h5>
                          <a href="shop_types/PLumber.php" type="button" class ="btn btn-primary">Available Shops</a>
                        </div>
                      </div>
                </div>
                <div class="col-sm-6 col-md-4 col-sm-6 col-lg-2 card_">
                    <div class="card" >
                        <img class="card-img-top" src="marker.png" alt="Card image cap">
                        <div class="card-body text-center">
                          <h5 class="card-title">Pest Control</h5>
                          <a href="shop_types/PLumber.php" type="button" class ="btn btn-primary">Available Shops</a>
                        </div>
                      </div>
                </div>
            </div>


            <div id="location"></div>
        </div>
        </div>
        <script>
          var myNav = document.getElementById('my_nav');
          window.onscroll = function () { 
            if (document.body.scrollTop >= 200 || document.documentElement.scrollTop >= 200 ) {
              myNav.style.background = "#463f3a";
          } 
          else {
            console.log("ok");
            myNav.style.background = "none";
          }
};
        </script>
        <script src ="customer_script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>