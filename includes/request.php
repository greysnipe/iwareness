<?php 
require 'database/config.php';
?>
<?php
	if( isset($_POST['email']) && isset($_POST['password']) && ($_POST['form'] == "login") ){
		$email = $_POST['email'];
		$password = $_POST['password'];

		login($email,$password,$conn);
	
	}

	if( isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password']) && ($_POST['form'] == "signup") ){
		$email = $_POST['email'];
		$username = "samp";
		$password = $_POST['password'];
		$retype = $_POST['confirm_password'];

		sign_up($username, $password, $retype, $email , $conn);

	}

	if( isset($_POST['serial']) && isset($_POST['item']) && isset($_POST['date']) && isset($_POST['contact']) && isset($_POST['message']) && ($_POST['form'] == "sn") ){
		$serials = $_POST['serial'];
		$item = $_POST['item'];
		$dates = $_POST['date'];
		$contact = $_POST['contact'];
		$message = $_POST['message'];
		add_sn($serials,$item,$dates,$contact,$message,$conn);
	}
	if( isset($_POST['serials']) && ($_POST['form'] == "sns") ){
			$serials = $_POST['serials'];
			search_sn($serials,$conn);
	}


?>