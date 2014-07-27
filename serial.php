<?php require 'includes/database/config.php'; ?>
<?php

	$serial = $_POST['serial'];
	search_sn($serial,$conn);

?>