<?php
session_start();
if(!isset ($_SESSION['user']))
  header('location:index.html');
$user = $_SESSION['user'];
$conn = mysqli_connect('localhost','aman','aman','farm');

$query = "SELECT * FROM buyerdata WHERE Contact='$user'";
$res = mysqli_query($conn,$query);
$row = mysqli_fetch_array($res);

?>
<!DOCTYPE HTML>

<html>

<head>
    <title>My Crops</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="elements.js"></script>
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner">

                <!-- Header -->
                <header id="header">
                    <a href="index.html" class="logo"><strong>Order</strong></a>
                </header>
                <br>
                <!-- Content -->
                <section>
                    <form method="POST" action="location.php">
                         <div class="field-wrap">
                         <label for="cropType">Crop Type</label>
          <select class="box-size option-size" name="ctype" value = "ctype" placeholder = "ctype" 
          onchange="fetchcities(this.value)">
            <option value="Kharif">Kharif</option>
            <option value="Rabi">Rabi</option>
            <option value="Zaid">Zaid</option>

          </select>
            <label for="CropName">Crop Name</label>
            <select class="option-size box-size" name="crops" id="crops">
              <option value="crops">crops</option>

            </select>

          </div>
                        <div >
                            
                        </div>

              <!-- <label>District</label>
                        <select class="option-size box-size" name="district" id="district">
                        <option value="district1">district1</option>
                        <option value="district2">district2</option>
                        </select>-->
                        <br>
                    
                        <a href="location.php"><button type="submit" class="btn btn-outline-danger">Show Farmers</button></a> <div class="dropdown">
                    


 <!--<button class="btn "type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <i class="fa fa-leaf"> Show Farmers </i>
      </button>-->
                        </div>
                    </form>
                </section>

            <form style="float:right" action="search_farmer.php" method="POST">
        <input type="number" name="mob" placeholder="enter mobile number">
            <input type="submit" name="submit">
        </form>
            
            </div>
        </div>
       
        
        <!-- Sidebar -->
        <div id="sidebar">
            <div class="inner">

                <!-- Menu -->
                <nav id="menu">
                    <header class="major">
                        <?php echo"<h2>{$row['Name']}&nbsp;{$row['lastName']}</h2>";?>
                    </header>
                    <ul>
                        <li><a href="index.html">Homepage</a></li>
                        <li><a href="profile2.php">Your Profile</a></li>
                        <li><a href="customerElements.php">Buy Crops</a></li>
                        <li><a href="#">Help Desk</a></li>
                        <li><a href="logout.php">Log Out</a></li>


                    </ul>
               

                    </nav>




            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assests/js/dropdown.js"></script>

</body>

</html>