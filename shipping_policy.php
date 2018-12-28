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
  <div class="container">
  <div class="row">
    <div class="col s12">
      <div class = "header_box_below" >
        <div class = "header_box_top">
          <h1>SHIPPING RATES AND POLICY</h1>
        </div>
      </div>
    </div>
  

<h6></h6>
<p>Achilles Sole, Inc. ships products using the US Postal Service. Our default shipping method is USPS Priority Mail at $7.50 per order. We also offer Priority Mail Express for overnight shipping at a rate of $25.00 per order. </p>

</div>
 </div>
  
  

  
  
  
  
  
  
 
  <? include 'footer.php'; ?>
            
	<?php include 'scripts.inc.php'; ?>
	
	
	<!--JS is loaded at the end of the body to reduce page load time-->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script> <!--jQuery-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script> <!--Materialize JS-->
	<script>
	
	
	  $(document).ready(function(){
		
	  
				  $('.parallax').parallax();			

	 
    });
	
	

 
	
	
	
	</script>
