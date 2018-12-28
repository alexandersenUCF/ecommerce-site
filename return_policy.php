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
          <h1>RETURN POLICY</h1>
        </div>
      </div>
    </div>
 

<p>If you are not completely satisfied with your order, Achilles Sole, Inc. offers free return shipping through USPS Priority Mail. To be considered acceptable for a return, shoes must be unworn and in original condition and packaging. Customers can use the original shipping box they received or any other plain cardboard box. We will provide return shipping labels. Once we have received and inspected your returned items, a refund will be issued within 7 days. It may take longer for the refund to process depending on the customer’s financial institution.</p>
  
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
