<?php
session_start();
if(!isset ($_SESSION['user'])){
  header('location:index.html');
}
$jsonData=file_get_contents("https://api.data.gov.in/resource/9ef84268-d588-465a-a308-a864a43d0070?api-key=579b464db66ec23bdd000001cdd3946e44ce4aad7209ff7b23ac571b&format=json&offset=0&limit=50");
$json_arr=json_decode($jsonData,true);

$conn = mysqli_connect('localhost','aman','aman','farm');
$contact = $_SESSION['user'];
$query="SELECT * FROM farmdata WHERE Contact='$contact'";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_array($res);
$district=$row['District'];
$state=$row['State'];


?>

<!DOCTYPE HTML>

<html>

<head>
    <title>My Crops</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <a href="index.html" class="logo"><strong>MY CROPS</strong></a>

                </header>
                <br>
                <!-- Content -->
                <section>
                    <header class="main">
                        <h1>MY CROPS</h1>
                        <hr class="bg-danger">
                    </header>
                </section>

                <section>
                    <form action="crops_php.php" method="post">
                             <div class="field-wrap">
                            <label for="cropType">Crop Type</label>
                  <select class="box-size option-size" name="ctype"  placeholder = "ctype" onchange="fetchcities(this.value)">
                    <option >select crop</option>
                          <option value="Kharif ">Kharif</option>
                          <option value="Rabi">Rabi</option>
                           <option value="Zaid">Zaid</option>            
          </select>
                       
            <label for="cropName">Crop Name</label>
            <select class="option-size box-size" name="crops" id="crops">
              <option> select crop type first</option>

            </select>
                            </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" >Select Quantity</label>
                            <input type="number" class="form-control" name="cropAmount" id="exampleInputPassword1" placeholder="Quantity in Kilograms">
                    
                      
                            <label for="exampleInputPassword1" >price</label>
                            <input type="number" class="form-control" name="price" id="exampleInputPassword1" placeholder="Enter the price">
                        </div>
        
<button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">
  Current Price
</button>
                    

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Latest Price</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <label>Crop Title:Maize</label>
            <?php for($i=0;$i<count($json_arr['records']);$i++){
    if($json_arr['records'][$i]['state']=="$state"&& $json_arr['records'][$i]['commodity']=='Onion'&& $json_arr['records'][$i]['district']=="$district"){?>
            
            
    
        <br>
        <label>Min Price:<?php  echo $json_arr['records'][$i]['min_price'];?> </label>
        <br>
        <label>Max Price: <?php  echo $json_arr['records'][$i]['max_price'];?></label>
        <br>
        <label>Modal Price: <?php echo $json_arr['records'][$i]['modal_price'];?></label>
        <br>
        <label>Market: <?php echo $json_arr['records'][$i]['market'];?></label>
        <br>
        <label class="text-muted"> <i class="fa fa-clock-o" aria-hidden="true"></i> Last updated:<?php echo $json_arr['records'][$i]['arrival_date'];}}?></label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn " data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                    
                        <div class="float-right">
                            <button type="submit" class="btn"><i class="fas fa-leaf fa-2x"></i>Add Crop </button>
                        </div>
                    </form>
                </section>

                    </div>
        </div>

        <!-- Sidebar -->
        <div id="sidebar">
            <div class="inner">

                <!-- Menu -->
                <nav id="menu">
                    <header class="major">
                        <h2>Menu</h2>
                    </header>
                    <ul>
                        <li><a href="index.html">Homepage</a></li>
                        <li><a href="profile.php">Your Profile</a></li>
                        <li><a href="crops2.php">My Crops</a></li>
                        <li><a href="#">Transaction History</a></li>
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

</body>

</html>