<div class="navbar navbar-inverse navbar-fixed-top">    
<div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php">farmdeal Store</a>
        </div>
        
        
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">

                 <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More Options<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-check"></span> Your Orders</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-briefcase"></span> Sell on farmdeal</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-flag"></span> Location</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-road"></span> Address Details</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">About farmdeal</li>
                  <li><a href="about\aboutus.html"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-check"></span> Customer Care Services</a></li>
                </ul>
              </li>

                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    ?>
                    <?php
                } else {
                    ?>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <?php
                    }
                    ?>

            </ul>
<form class="navbar-form navbar-right" role="search">
<select class="mdb-select md-form form-control">
  <option value="" disabled selected>Category search</option>
  <option value="1">Pesticides</option>
  <option value="2">Weedicides</option>
  <option value="3">Fertilizers</option>
  <option value="4">Biocides</option>
  <option value="5">Seeds</option>
  <option value="6">Insecticides</option>
  <option value="7">Wholesale Crops</option>
</select>
<div class="form-group input-group">
<input type="text" class="form-control" placeholder=" Search your desired product here">
<span class="input-group-btn"><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button></span>
</div>

</form>

             
        </div>
        </div>
    </div>
</div>
