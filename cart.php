<!DOCTYPE html>

<?php 
session_start();
include 'dbconn.php'; 

	$sql = "SELECT id, email, password, shipping_address, shipping_address_city, shipping_address_state, shipping_address_zip, billing_address, billing_address_city, billing_address_state, billing_address_zip, username, level, first, last FROM users";
	$result = mysqli_query($conn, $sql);
		
	/*if(isset($_POST['submit'])) { 
	
		if(empty($_POST['first'])|| empty($_POST['last'])|| empty($_POST['email'])|| empty($_POST['shipping_address'])|| empty($_POST['shipping_address_city'])|| empty($_POST['shipping_address_state'])|| empty($_POST['shipping_address_zip'])|| empty($_POST['billing_address'])|| empty($_POST['billing_address_city'])|| empty($_POST['billing_address_state'])|| empty($_POST['billing_address_zip'])){
			print"\t<div class=\"form\">\n";
				echo "Please enter all forms";
			print"\t</div>\n";	
		}
		
		else{
			$query_insert = "UPDATE orders SET id = '".$_SESSION['first_name']."', Description = '".$_POST['Description']."', Category = '".$_POST['Category']."', SKU = '".$_POST['SKU']."', Stock = '".$_POST['Stock']."', Cost = '".$_POST['Cost']."', Price = '".$_POST['Price']."', Image = '".$_POST['Image']."', Weight = '".$_POST['Weight']."' WHERE SKU = '".($_GET["SKU"])."'"; 
			
			if ($mysqli->query($query_insert) === TRUE) {
				echo "Record updated successfully";
			} else {
				echo "Error updating record: " . $mysqli->error;
}
			header('Location: admin.php');
		}
    } */
?>

<html lang="en">

<?php include 'head.inc.php'; ?>

<body>

    <?php include 'navbar.php';?>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="header_box_below">
                    <div class="header_box_top">
                        <h1 class="page_header">CART</h1>
                    </div>
                </div>
            </div>
            <div class="col s4">
                <h5 class="header center">Items</h5>

                <?php 
                if(isset($_SESSION['cart'])){
                    $cart = $_SESSION['cart'];
                    $arrlength = count($cart);
                    
                    for($x = 0; $x < $arrlength; $x++) {
                        $items = $_SESSION['cart'][$x];
                        
                        $sql = "SELECT * FROM `catalog` WHERE `SKU` LIKE '" . $items . "'";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                                    
                        include 'cartitem.php'; 
                    }
                } ?>


            </div>

            <div class="col s8">
                <h5 class="header center">Billing/Shipping Information</h5>
					<?
						echo "<div class=\"row\">";
							echo "<form class=\"col s12\">";
								echo "<div class=\"row\">";
									echo "<div class=\"input-field col s6\">";
										if(!isset($_SESSION['first'])){
											echo "<input id=\"first_name\" type=\"text\" class=\"validate\">";
										}
										else {echo "<input id=\"first_name\" type=\"text\" class=\"validate\" value=\"".$_SESSION['first']."\">";}
										echo "<label for=\"first_name\">First Name</label>";
								echo "</div>";
									echo "<div class=\"input-field col s6\">";
										if(!isset($_SESSION['last'])){
											echo "<input id=\"last_name\" type=\"text\" class=\"validate\">";
										}
										else {echo "<input id=\"last_name\" type=\"text\" class=\"validate\" value=\"".$_SESSION['last']."\">";}
										echo "<label for=\"last_name\">Last Name</label>";
									echo "</div>";
								echo "</div>";
								echo "<div class=\"row\">";
									echo "<div class=\"input-field col s12\">";
										if(!isset($_SESSION['email'])){
											echo "<input id=\"email\" type=\"text\" class=\"validate\">";
										}
										else {echo "<input id=\"email\" type=\"text\" class=\"validate\" value=\"".$_SESSION['email']."\">";}
										echo "<label for=\"email\">Email Address</label>";
									echo "</div>";
								echo "</div>";
								echo "<div class=\"row\">";
									echo "<div class=\"input-field col s12\">";
										if(!isset($_SESSION['shipping_address'])){
											echo "<input id=\"shipping_address\" type=\"text\" class=\"validate\">";
										}
										else {echo "<input id=\"shipping_address\" type=\"text\" class=\"validate\" value=\"".$_SESSION['shipping_address']."\">";}
										echo "<label for=\"shipping_address\">Shipping Address</label>";
									echo "</div>";
								echo "</div>";
								echo "<div class=\"row\">";
									echo "<div class=\"input-field col s6\">";
										if(!isset($_SESSION['shipping_address_city'])){
											echo "<input id=\"shipping_address_city\" type=\"text\" class=\"validate\">";
										}
										else {echo "<input id=\"shipping_address_city\" type=\"text\" class=\"validate\" value=\"".$_SESSION['shipping_address_city']."\">";}
										echo "<label for=\"shipping_address_city\">Shipping Address City</label>";			
								echo "</div>";
									echo "<div class=\"input-field col s3\">";
										if(!isset($_SESSION['shipping_address_state'])){
											echo "<input id=\"shipping_address_state\" type=\"text\" class=\"validate\">";
										}
										else {echo "<input id=\"shipping_address_state\" type=\"text\" class=\"validate\" value=\"".$_SESSION['shipping_address_state']."\">";}
										echo "<label for=\"shipping_address_state\">Shipping Address State</label>";
								echo "</div>";
									echo "<div class=\"input-field col s3\">";
										if(!isset($_SESSION['shipping_address_zip'])){
											echo "<input id=\"shipping_address_zip\" type=\"text\" class=\"validate\">";
										}
										else {echo "<input id=\"shipping_address_zip\" type=\"text\" class=\"validate\" value=\"".$_SESSION['shipping_address_zip']."\">";}
										echo "<label for=\"shipping_address_zip\">Shipping Address Zip</label>";
									echo "</div>";
								echo "</div>";
								echo "<br><br><br><br>";
								echo "<div class=\"row\">";
									echo "<div class=\"input-field col s12\">";
										if(!isset($_SESSION['billing_address'])){
											echo "<input id=\"billing_address\" type=\"text\" class=\"validate\">";
										}
										else {echo "<input id=\"billing_address\" type=\"text\" class=\"validate\" value=\"".$_SESSION['billing_address']."\">";}
										echo "<label for=\"billing_address\">Billing Address</label>";
									echo "</div>";
								echo "</div>";
								echo "<div class=\"row\">";
									echo "<div class=\"input-field col s6\">";
										if(!isset($_SESSION['billing_address_city'])){
											echo "<input id=\"billing_address_city\" type=\"text\" class=\"validate\">";
										}
										else {echo "<input id=\"billing_address_city\" type=\"text\" class=\"validate\" value=\"".$_SESSION['billing_address_city']."\">";}
										echo "<label for=\"billing_address_city\">Billing Address City</label>";			
								echo "</div>";
									echo "<div class=\"input-field col s3\">";
										if(!isset($_SESSION['billing_address_state'])){
											echo "<input id=\"billing_address_state\" type=\"text\" class=\"validate\">";
										}
										else {echo "<input id=\"billing_address_state\" type=\"text\" class=\"validate\" value=\"".$_SESSION['billing_address_state']."\">";}
										echo "<label for=\"billing_address_state\">Billing Address State</label>";
								echo "</div>";
									echo "<div class=\"input-field col s3\">";
										if(!isset($_SESSION['billing_address_zip'])){
											echo "<input id=\"billing_address_zip\" type=\"text\" class=\"validate\">";
										}
										else {echo "<input id=\"billing_address_zip\" type=\"text\" class=\"validate\" value=\"".$_SESSION['billing_address_zip']."\">";}
										echo "<label for=\"billing_address_zip\">Billing Address Zip</label>";
									echo "</div>";
								echo "</div>";
								echo "<a name=\"submit\" id=\"submit\" type=\"submit\" class=\"waves-effect waves-light btn\">Confirm Order</a>";
							echo "</form>";
						echo "</div>";
					?>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <?php include 'scripts.inc.php'; ?>

</body>

</html>
