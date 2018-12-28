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

	<?php include 'scripts.inc.php'; ?>
  
  <!--- colton start here -->
<div class="container">
  <div class="row">
    <div class="col s12">
      <div class = "header_box_below" >
        <div class = "header_box_top">
          <h1>TAX POLICY</h1>
        </div>
      </div>
    </div>

    <p>Achilles Sole, Inc. is required by law to collect any and all applicable sales tax on all purchases. The amount of sales tax is based on the standard tax rate of the state your order is being shipped to and the total dollar amount of your order.</p>
  </div>
 </div> 
 
  <? include 'footer.php'; ?>
            
			
	<!--JS is loaded at the end of the body to reduce page load time-->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script> <!--jQuery-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script> <!--Materialize JS-->
	<script>
	
	
	  $(document).ready(function(){
		
	  
				  $('.parallax').parallax();			

	 
    });
	
	

 
	
	
	
	</script>
