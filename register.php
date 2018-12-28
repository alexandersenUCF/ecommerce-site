<!DOCTYPE html>
<html>
<?php
session_start();
include 'dbconn.php';
if(isset($_POST['submit'])) {
    $createuser = $_POST['createuser'];
    $createpass = $_POST['createpass'];
    $createemail = $_POST['createemail'];
    
    if (!ctype_alnum($createuser)) {
        echo 'Username must only contain letters and numbers.';
    }
    else if (!ctype_alnum($createpass)) {
        echo 'Password must only contain letters and numbers.';
    }
    else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$createemail)) {
        echo 'Email must be formated like so: name@domain.com';
    }
    else{
        //$sql = "SELECT * FROM `users` WHERE `username` LIKE '" . $username . "' LIMIT 1"; 
        $sql = "SELECT * FROM `users` WHERE `username` LIKE '" . $createuser . "' LIMIT 1";
		$result = mysqli_query($conn, $sql); //store results of query in $result var
	
		if (mysqli_num_rows($result) == 1){	//If at least one result
			echo "Account already exists. Please try a new username."; //account already exists
		}
        else {
            $createpass = md5($createpass);
			$sql = "INSERT INTO users (username, password, email, level)
            VALUES ('$createuser', '$createpass', '$createemail', '2')";

			mysqli_query($conn, $sql); //run the query
            echo "Error: " . $sql . "<br>" . $conn->error;

			echo "Account successfully created. You will be redirected to the home page in 3 seconds.";

			header("Refresh: 0; url=home.php"); //Takes user to login page in 3 secs
        }
    }
    }
?>


<?php include 'head.inc.php'; ?>

<body>

    <?php include 'navbar.php';?>
    
    <!-- Top Banner  -->
   

    <!-- Featured Items  -->
    <div class="container">
    

            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12">
            <div class = "header_box_below" >
           <div class = "header_box_top">
            <h1 class="page_header">SIGN UP</h1>
      </div>
      </div>
      </div>
                <div class="col s12">



    <div class="creationform content_body">
        <form name="createform" action="" method="post">
            Username <input type="text" name="createuser" required><br> Password <input type="password" name="createpass" required><br> E-mail <input type="text" name="createemail" required>

            <input type="submit" name="submit" />
        </form>
    </div>
    </div>
    </div>
    </div>
    
   
                
                <?php include 'footer.php'; ?>

    <?php include 'scripts.inc.php'; ?>

</body>

</html>

