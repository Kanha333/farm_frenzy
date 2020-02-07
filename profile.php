<?php
session_start();
if(!isset ($_SESSION['user']))
  header('location:index.html');
$user = $_SESSION['user'];
$conn = mysqli_connect('localhost','aman','aman','farm');

$query = "SELECT * FROM farmdata WHERE Contact='$user'";
$res = mysqli_query($conn,$query);
$row = mysqli_fetch_array($res);

?>
<!DOCTYPE HTML>

<html>

<head>
    <title>FARMER PORTAL</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link href="profile.css" /> </head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner">

                <!-- Header -->
                <header id="header">
                    <a href="index.html" class="logo"><strong>FARM FRENZS</strong></a>

                </header>
                <section>
                    <header class="main">
                       <?php echo"<h1> WELCOME {$row['Name']}&nbsp;{$row['lastName']}</h1>";?>
                    </header>
                    <div class="pull-left lag-box-sec">
                        <span>Languages</span>
                        <select class="select-lang" id="language_selector">
                                             <option value="1" selected>English</option>
                                                 <option value="2">हिंदी</option>                                                          
                                          <option value="3">ગુજરાતી</option>
                                               <option value="4">मराठी</option>
                                              <option value="5">తెలుగు</option>
                                         <option value="6">বাঙালি</option>
                                                <option value="7">தமிழ்</option>
                                              <option value="8">ଓଡ଼ିଆ</option>
                                                      <option value="9">ਪੰਜਾਬੀ</option>
                                               </select>
                    </div>

                </section>

                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 ">

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4>User Profile</h4>
                                    </div>
                                    <div class="panel-body">

                                        <div class="box box-info">

                                            <div class="box-body">
                                                <div class="col-sm-6">
                                                    <div class="align-middle"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive" width="400px" height="300px">
                                                    </div>
                                                    <br>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h4 style="color:#00b1b1;">My Name </h4>
                                                    </span>
                                                </div>
                                                <div class="clearfix"></div>
                                                <hr style="margin:5px 0 5px 0;">


                                            <div class="col-sm-5 col-xs-6 tital "><b>First Name:</b></div>
                                               <?php 
                                            echo " <div class='col-sm-7 col-xs-6 '>{$row['Name']}</div>";
                                            ?>
                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>

                                                <!--<div class="col-sm-5 col-xs-6 tital ">Middle Name:</div>
                                                <div class="col-sm-7"> Name</div>
                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>
-->
                                            <div class="col-sm-5 col-xs-6 tital "><b>Last Name:</b></div>
                                               <?php
                                            echo " <div class='col-sm-7'> {$row['lastName']}</div>";
                                            ?>
                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>

                                                <!--<div class="col-sm-5 col-xs-6 tital ">Date Of Joining:</div>
                                                <div class="col-sm-7">15 Jun 2016</div>

                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>-->

                                            <div class="col-sm-5 col-xs-6 tital "><b>Mobile No:</b></div>
                                               <?php
                                            echo"<div class='col-sm-7'>{$row['Contact']}</div>";
                                            ?>

                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>

                                            <div class="col-sm-5 col-xs-6 tital "><b>Place</b></div>
                                               <?php 
                                            echo"<div class='col-sm-7'>{$row['District']}</div>";
                                            ?>

                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>



                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>

                                            <div class="col-sm-5 col-xs-6 tital "><b>Aadhar No</b></div>
                                                <?php
                                            echo"<div class='col-sm-7'>{$row['Aadhaar']}</div>";
                                            ?>


                                                <!-- /.box-body -->
                                            </div>
                                            <!-- /.box -->

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <script>
                                $(function() {
                                    $('#profile-image1').on('click', function() {
                                        $('#profile-image-upload').click();
                                    });
                                });
                            </script>
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
                                <li><a href="index.html" target="_blank">Homepage</a></li>
                        <li><a href="profile.php">Your Profile</a></li>
                        <li><a href="crops2.php">My Crops</a></li>
                        <li><a href="elements.html">Transaction History</a></li>
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
            <script type="text/javascript" async src="https://www.googletagmanager.com/gtag/js?id=UA-128172535-1"></script>
            <script type="text/javascript">
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag('js', new Date());

                gtag('config', 'UA-128172535-1');
            </script>

</body>

</html>