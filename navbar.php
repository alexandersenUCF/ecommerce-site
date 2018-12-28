<!-- Navbar  -->

<div class="row">
      <div class="col s12 center-align valign-wrapper header">
        <div class="col s2"><a href="home.php"><img class="responsive-img" src="img/logo.png" alt="Company Logo" style="max-height: 150px">
            </a></div>
          <div class="col s8 ui-widget">
          <div class="input-field">
              <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <input id="tags" type="search" required>
            
            <i class="material-icons">close</i>
          
          </div>
          </div>
            <div class="col s2"><a href="cart.php">1<i class="material-icons medium">shopping_cart</i></a></div>
        </div>
    </div>  	

<nav class="blue darken-4">
    <div class="nav-wrapper container">
        <a id="logo-container" href="home.php" class="brand-logo white-text center">Achilles Sole</a>

        <ul class="left hide-on-med-and-down">
            <li><a class="white-text" href="home.php">Home</a></li>
            <li><a class="white-text" href="catalog.php">Catalog</a></li>
            
        </ul>

        <ul class="right hide-on-med-and-down">
            <? if(!isset($_SESSION['logged_in_user_access'])) { 
				} 
				
				else if($_SESSION['logged_in_user_access'] == 0){
					echo "<li><a class=\"white-text\" href=\"admin.php\">Admin</a></li>";
				}
	
				else {
				}
			?>
			<? if(!isset($_SESSION['loggedin'])) { 
				echo "<li><a class=\"white-text\" href=\"register.php\">Register</a></li>";
				}
				
				else{
					echo "<li><a class=\"white-text\" href=\"client.php\">Profile</a></li>";
				}
			?>
         

            <li><a href="#" id="login" class="white-text"><i class="material-icons">account_circle</i></a></li>

       
        </ul>

        <ul id="nav-mobile" class="side-nav">
			<li><a class="black-text" href="home.php">Home</a></li>
            <li><a class="black-text" href="catalog.php">Catalog</a></li>
			<? if(!isset($_SESSION['logged_in_user_access'])) { 
				} 
				
				else if($_SESSION['logged_in_user_access'] == 0){
					echo "<li><a class=\"black-text\" href=\"admin.php\">Admin</a></li>";
				}
	
				else {
				}
			?>
			
			<? if(!isset($_SESSION['loggedin'])) { 
				echo "<li><a class=\"black-text\" href=\"register.php\">Register</a></li>";
				echo "<li><a class=\"black-text\" href=\"login.php\">Login</a></li>";
				}
				
				else{
					echo "<li><a class=\"black-text\" href=\"client.php\">Profile</a></li>";
				}
			?>
			
			<? if ($_SESSION['loggedin'] == true){
				echo "<li><a class=\"black-text\" href=\"logout.php\">Logout</a></li>";
				}
				else{
					
				}
			?>
		</ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>

<!-- LoginForm  -->
<div id="login-form" class="webui-popover-content">
    <form action="login.php" method="post">
        <div class="input-field">
            <input id="username" name="username" type="text" class="Input" value="">
        </div>
        <div class="input-field">
            <input id="password" name="password" type="password" class="Input" value="">
        </div>
        <button id="loginsubmit" class="btn waves-effect waves-light" type="submit" name="loginsubmit">Login
                <i class="material-icons right">send</i>
            </button>
    </form>
</div>