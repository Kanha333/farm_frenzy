<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login/Signup</title>
    <link rel="stylesheet" href="styles.css">
  <script type="text/javascript" src="farmer.js"></script>
<!-- bootstrap CDN -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- bootstrap for action-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- Font awesome -->

<script src="https://kit.fontawesome.com/695f389109.js" crossorigin="anonymous"></script>

  </head>
  <body>

    <div class="form">

      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>

      <div class="tab-content">
        <div id="signup">
          <h1>Sign Up for Free</h1>

          <form action="farmData.php" method="post">

          <div class="top-row">
            <div class="field-wrap">
              <label>
                <i class="far fa-user"></i> First Name<span class="req">*</span>
              </label>
              <input class = "box-size" type="text" name="fname" required autocomplete="off" />
            </div>

            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input class = "box-size" name="lname" type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              <i class="fas fa-id-card"></i> Aadhar No.<span class="req">*</span>
            </label>
            <input class = "box-size" name="aadhaar" type="number" maxlength="12" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
          <select class="box-size option-size" name="state" value = "state" placeholder = "state" onchange="fetchcities(this.value)">
              <option value="s">state</option>
            <option value="Bihar">Bihar</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
              <option value="Chhatisgarh">Chattisgarh</option>
<option value="Odisha">Odisha</option>

          </select>

            <select class="option-size box-size" name="cities" id="cities">
              <option value="cities">district</option>

            </select>

          </div>

          <div class="field-wrap">
            <label>
              <i class="fas fa-mobile"></i> Mobile No.<span class="req">*</span>
            </label>
            <input class = "box-size" name="contact" maxlength="10" type="number"required autocomplete="off"/>
          </div>
  <div>
      
    <select class="option-size box-size" name="role">
        <option name="buyer" value="buyer">Buyer</option>
        <option name="buyer" value="Farmer">Farmer</option>
      </select>
  </div>
        <br>
          <div class="field-wrap">
            <label>
              <i class="fas fa-key"></i> Set A Password<span class="req">*</span>
            </label>
             <input class = "box-size" name="password" id="password" type="password" onkeyup='check();' required autocomplete="off" />
          </div>

          <div class="field-wrap">
            <label>
              <i class="fas fa-key"></i> Confirm Password<span class="req">*</span>
            </label>
            <input class = "box-size" type="password" name="password2" id="confirm_password"  onkeyup='check();' required autocomplete="off" />
  <span id='message'></span>
          </div>
          

          <button type="submit" class="btn btn-success button button-block">Register</button>

          </form>

        </div>

        <div id="login">
          <h1>Welcome Back!</h1>

          <form action="farmLogin.php" method="post">

            <div class="field-wrap">
            <label>
              <i class="fas fa-mobile"></i> Mobile No.<span class="req">*</span>
            </label>
            <input class = "box-size" maxlength="10" name="mobile" type="number" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              <i class="fas fa-key"></i> Password<span class="req">*</span>
            </label>
            <input class = "box-size" name = "Password" type="password"required autocomplete="off"/>
          </div>
              
        <div>
      
    <select class="option-size box-size" name="role">
        <option name="buyer" value="buyer">Buyer</option>
        <option name="buyer" value="Farmer">Farmer</option>
      </select>
  </div>
        <br>

          <p class="forgot"><a href="#">Forgot Password?</a></p>

          <button class="btn btn-primary button button-block">Log In</button>

          </form>

        </div>

      </div><!-- tab-content -->

</div> <!-- /form -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="index.js" charset="utf-8"></script>

  </body>
</html>
