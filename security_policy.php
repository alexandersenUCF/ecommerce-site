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
          <h1>SECURITY POLICY</h1>
        </div>
      </div>
    </div>



<h6 style="font-weight: bold">Safe Shopping</h6>
<p>Under the Fair Credit Billing Act, your bank cannot hold you liable for more than $50.00 of fraudulent charges. If your bank does hold you liable for any of this $50.00, we will cover the liability for you, up to the full $50.00. We will only cover this liability if the unauthorized use of your credit card resulted through no fault of your own from purchases made on our website while using the secure server. In the event of unauthorized use of your credit card, you must notify your credit card provider in accordance with its reporting rules and procedures.</p>

<h6 style="font-weight: bold">Payment Security</h6>
<p>Customer payments are secured by Secure Sockets Layer (SSL) technology from VeriSign, which provides data encryption and e-commerce. We also use industry standard firewalls to secure our servers.</p>

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
