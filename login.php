<?php 
session_start();
include 'dbconn.php';
/* Login function */
	if(isset($_POST['loginsubmit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
        
		$sql = "SELECT id, email, password, shipping_address, shipping_address_city, shipping_address_state, shipping_address_zip, billing_address, billing_address_city, billing_address_state, billing_address_zip, username, level, first, last FROM users";
		$result = mysqli_query($conn, $sql);
		
			if($username != ''){
				while($row = $result->fetch_object()) { 
					if ((($username) == ($row->username)) && (md5($password) == ($row->password))) {
						$_SESSION['loggedin'] = true;
						$_SESSION['logged_in_user_access'] = $row->level;
						$_SESSION['logged_in_user_id'] = $row->id;
						$_SESSION['email'] = $row->email;
						$_SESSION['shipping_address'] = $row->shipping_address;
						$_SESSION['shipping_address_city'] = $row->shipping_address_city;
						$_SESSION['shipping_address_state'] = $row->shipping_address_state;
						$_SESSION['shipping_address_zip'] = $row->shipping_address_zip;
						$_SESSION['billing_address'] = $row->billing_address;
						$_SESSION['billing_address_city'] = $row->billing_address_city;
						$_SESSION['billing_address_state'] = $row->billing_address_state;
						$_SESSION['billing_address_zip'] = $row->billing_address_zip;
						$_SESSION['first'] = $row->first;
						$_SESSION['last'] = $row->last;
					} else { 
						// do nothing 
					} 
				}
				if (!isset($_SESSION['loggedin'])) { 
			header("Location: login.php"); 
		}
			}
		}
		
		if (isset($_SESSION['loggedin'])) { 
			header("Location: home.php"); 
		}
?>

<!DOCTYPE html>
<?php include 'dbconn.php'; ?>
<html lang="en">

<?php include 'head.inc.php'; ?>

<body>
    
    <?php include 'navbar.php';?>

    <div class="container">
        
        <div class="row">
            
             <div class="col s12">
            <div class = "header_box_below" >
           <div class = "header_box_top">
            <h1 class="page_header">Login</h1>
      </div>
      </div>
      </div>
            <div class="col s3">
			</div>
			
			<div class="col s6">
                <form method="post" action="#"> 
				<label for="username">Username</label> 
				<input name="username" id="username" type="text"><br> 
				<label for="password">Password</label> 
				<input name="password" id="password" type="password"><br> 
				<input name="loginsubmit" id="loginsubmit" type="submit" value="Login">
			</form>
            </div>
			
			<div class="col s3">
			</div>
        </div>
    </div>

    
  
    <?php include 'footer.php'; ?>
    
    <?php include 'scripts.inc.php'; ?>

</body>

</html>