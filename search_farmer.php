<?php
session_start();
if(!isset ($_SESSION['user'])){
  header('location:index.html');
}

$contact=$_POST['mob'];
$a = $_SESSION['crops'];
$conn = mysqli_connect('localhost','aman','aman','farm');
$query = "SELECT * FROM farmdata WHERE Contact='$contact'";
$res = mysqli_query($conn,$query);
$row = mysqli_fetch_array($res);
$name = $row['Name'];
$lname = $row['lastName'];
$district = $row['District'];
$state = $row['State'];
$q="SELECT * FROM crop WHERE contact='$contact' AND crops='$a'";
$res1=mysqli_query($conn,$q);
$row1=mysqli_fetch_array($res1);
$crops=$row1['crops'];
$price = $row1['price'];
$_SESSION['crops'] = $crops;
$price=$row1['price'];
$_SESSION['cont'] = $contact;
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

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4>Farmer Details</h4>
                                </div>
                                <div class="panel-body">

                                    <div class="box box-info align-middle">

                                        <div class="box-body">
                                            <div class="col-sm-6">
                                                <div class="algin-middle"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive" width="300px;" height="300px;">
                                                </div>
                                                <br>
                                            </div>
                                            <div class="clearfix"></div>
                                            <hr style="margin:5px 0 5px 0;">

                                            <?php
                                            echo"<div class='col-sm-5 col-xs-6 tital '><b>Farmer's name:</b>&nbsp{$name}&nbsp;{$lname}</div>";?>
                                            <div class="clearfix"></div>
                                            <div class="bot-border"></div>

                                          <?php echo "<div class='col-sm-5 col-xs-6 tital '><b>Contact him: </b>&nbsp{$contact}</div>";?>
                                            <div class="clearfix"></div>
                                            <div class="bot-border"></div>

                                           <?php echo "<div class='col-sm-5 col-xs-6 tital '><b>District:</b>&nbsp{$district}</div>";?>
                                            <div class="clearfix"></div>
                                            <div class="bot-border"></div>

                                           <?php echo "<div class='col-sm-5 col-xs-6 tital '><b>State:</b>&nbsp {$state}</div>";?>
                                            <div class="clearfix"></div>
                                            <div class="bot-border"></div>
                                            <br>
                                            <div class="col-sm-5 col-xs-6 tital ">
                                                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">Crop Details</button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                            <?php echo" <div class='h6'>Crop Name: {$crops}</div>";?>
                                                
                                                        <?php echo " <div class='h6'>Rate: {$price}/Kg</div>"?>
                                                       
                                                                <form action="update.php" method="post">
                                                                    <label class="h6">Select Amount:</label>
                                                                    <input type="number"
                                                                           name="quantity" class="form-control" placeholder="Enter your Quantity in Kilograms">
                                                                   <?php echo "<br/><div class='h6'>&nbsp Total Price: Rs720</div>"?>
                                                                    <div class="modal-footer">
                                                                <button type="button" class="btn " data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn ">Proceed to Pay</button>
                                                            </div>
                                                                </form>
                                                                 

                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="bot-border"></div>



                                            <!-- /.box-body -->
                                        </div>
                                        <!-- /.box -->

                                    </div>


                                </div>
                            </div>
                        </div>



                    </div>
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