<?
    session_start();

    if(isset($_SESSION['loggedin'])) {
        unset($_SESSION['loggedin']);
    }
	
	if(isset($_SESSION['logged_in_user_access'])) {
        unset($_SESSION['logged_in_user_access']);
    }
	
	if(isset($_SESSION['logged_in_user_id'])) {
        unset($_SESSION['logged_in_user_id']);
    }
	
	if(isset($_SESSION['email'])) {
        unset($_SESSION['email']);
    }
	
	if(isset($_SESSION['shipping_address'])) {
        unset($_SESSION['shipping_address']);
    }
	
	if(isset($_SESSION['shipping_address_city'])) {
        unset($_SESSION['shipping_address_city']);
    }
	
	if(isset($_SESSION['shipping_address_state'])) {
        unset($_SESSION['shipping_address_state']);
    }
	
	if(isset($_SESSION['shipping_address_zip'])) {
        unset($_SESSION['shipping_address_zip']);
    }
	
	if(isset($_SESSION['billing_address'])) {
        unset($_SESSION['billing_address']);
    }
	
	if(isset($_SESSION['billing_address_city'])) {
        unset($_SESSION['billing_address_city']);
    }
	
	if(isset($_SESSION['billing_address_state'])) {
        unset($_SESSION['billing_address_state']);
    }
	
	if(isset($_SESSION['billing_address_zip'])) {
        unset($_SESSION['billing_address_zip']);
    }
	
	if(isset($_SESSION['first'])) {
        unset($_SESSION['first']);
    }
	
	if(isset($_SESSION['last'])) {
        unset($_SESSION['last']);
    }
    
    header("Location: home.php");
?>