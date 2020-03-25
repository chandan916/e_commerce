<nav class="navbar sticky-top navbar-expand-lg navbar-default">
            <div class="navbar-header">
            <a href="./home.php" class="navbar-brand">Lifestyle store</a>
          </div>

             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yo">
              <div class="toggle-btn">
             <div class="icon-bar"></div>
             <div class="icon-bar"></div>
             <div class="icon-bar"></div>
               </div>
           </button>
                <div class="collapse navbar-collapse" id="yo">
                  <div class="navbar-nav ml-auto">
            
					<?php
					if(isset($_SESSION['email'])) { 
					?>
					<a href="./cart.php" class="nav-item nav-link"><span><i class="fas fa-shopping-cart"></i></span> Cart</a>
					<a href="./logout.php" class="nav-item nav-link"><span><i class="fas fa-sign-out-alt"></i></span> Log Out</a>
					<a href="./setting.php" class="nav-item nav-link"><span><i class="fas fa-user-cog"></i></span> Setting</a>
					<a href="./history.php" class="nav-item nav-link"><span><i class="fas fa-history"></i></span> Order History</a>
					<?php } 
					 else {?>
					<a href="./signup.php" class="nav-item nav-link"><span><i class="fas fa-sign-in-alt"></i></span> Sign Up</a>
                  <a href="./login.php" class="nav-item nav-link"><span><i class="fas fa-user"></i></span> Login</a>
				    <?php }?>
					<a href="./about.php" class="nav-item nav-link"><span><i class="fas fa-address-book"></i></span> About</a>
                    <a href="./contact.php" class="nav-item nav-link"><span><i class="fas fa-address-card"></i></span> Contact</a>
                </div>
              </div>
      </nav>