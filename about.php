<!DOCTYPE html>
<?php include 'dbconn.php'; 
session_start();?>
<html>
	<head>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!--Google Icon Fonts-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css"> <!--Materialize CSS-->
         <link rel="stylesheet" href="../css/styles.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!-- Let browser know website is optimized for mobile--> 
        
         <link rel="stylesheet" href="css/styles.css">
        <meta charset="UTF-8">
		<title>Achilles Sole Home - Daniel McDonald</title>
	</head>
	
	<?php include 'head.inc.php'; ?>

	<body>
	
<?php include 'navbar.php';?>
  
  <!--- colton start here -->
  <div class = "row">
    <div class = "container">
  
      <div class="col s12">
        <div class = "header_box_below" >
          <div class = "header_box_top">
            <h1 class=>MEET THE TEAM</h1>
          </div>
        </div>
      </div>

      <ul>
        <li>Manager: Daniel McDonald</li>
        <li>SEO: Colton Wolfe</li>
        <li>Back-end: Alex Andersen & James Gallagher</li>
        <li>Testing/policies: Nicholas Vo</li>
      </ul> 

      <h5>Achilles Sole’s corporate headquarters is Located in Orlando, Fl.</h5>
      <ul>
        <li>Achilles Sole</li>
        <li>info@achillessole.com</li>
        <li>407-555-1234</li>
        <li>4000 Central Florida Blvd, Orlando, FL 32816</li>
      </ul>

      <h4>Our Policies</h4>
      <ul>
        <li><a href="shipping_policy.php">Shipping policy and charges</a></li>
        <li><a href="tax_policy.php">Tax policy</a></li>
        <li><a href="return_policy.php">Return policy</a></li>
        <li><a href="privacy_policy.php">Privacy Policy</a></li>
        <li><a href="security_policy.php">Security Statement</a></li>
      </ul>
  
    </div>
  </div>

  
 
	<?php include 'footer.php'; ?>
            
	<?php include 'scripts.inc.php'; ?>
	
	
	<!--JS is loaded at the end of the body to reduce page load time-->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script> <!--jQuery-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script> <!--Materialize JS-->
	<script>
	
	
	  $(document).ready(function(){
		
	  
				  $('.parallax').parallax();			

	 
    });
	
	</script>
