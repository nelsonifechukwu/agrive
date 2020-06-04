<?php

require_once('connections/connections.php');


if(isset($_POST['create_farm'])){

	$farm_type = strip_tags(mysqli_real_escape_string($con, $_POST['farm_type']));
	$farm_address = strip_tags(mysqli_real_escape_string($con, $_POST['farm_address']));
	$city = strip_tags(mysqli_real_escape_string($con, $_POST['city']));
	$country = strip_tags(mysqli_real_escape_string($con, $_POST['country']));
	$postal_code = strip_tags(mysqli_real_escape_string($con, $_POST['postal_code']));
	$company_id = $_SESSION['user_id'];

	$save_farm = "INSERT INTO `farms` (`farm_type`, `farm_address`, `city`, `country`,`postal_code`, `company_id`) VALUES ('$farm_type', '$farm_address', '$city', '$country', '$postal_code', '$company_id')";

	$query_save = mysqli_query($con, $save_farm);

	if($query_save){
		echo "<script type='text/javascript'>alert('You have created a farm')</script>";
	}
}



?>