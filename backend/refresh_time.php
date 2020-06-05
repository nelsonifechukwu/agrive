<?php
require_once('connections/connections.php');

	//check if refresh time has been saved before
	$select_refresh_time = "SELECT * FROM `farm_refresh_time` WHERE `farm_id` = '2'";
	$query_refresh_time = mysqli_query($con, $select_refresh_time);

	if($query_refresh_time){

		if(mysqli_num_rows($query_refresh_time) <= 0){

				$display_refresh_time = "0";

		}else{

			while($data = mysqli_fetch_assoc($query_refresh_time)){
			$display_refresh_time = $data['refresh_time'];
			}

		echo "<script type='type/javascript'>alert('$display_refresh_time')</script>";

		}

	}else{
		mysqli_error($con);
	}






if(isset($_POST['save_refresh_time'])){

	$refresh_time = strip_tags(mysqli_real_escape_string($con, $_POST['refresh_time']));
	$farm_id = '2';


	if(mysqli_num_rows($query_refresh_time) <= 0){

		$insert_refresh_time = "INSERT INTO `farm_refresh_time` (`refresh_time`, `farm_id`) VALUES ('$refresh_time', '$farm_id')";
		$query_insert = mysqli_query($con, $insert_refresh_time);

		if($query_insert){
			echo "<script type='type/javascript'>alert('Refresh time saved')</script>";
		}

	}else{

		$update_refresh_time = "UPDATE `farm_refresh_time` SET `refresh_time` = '$refresh_time' WHERE `farm_id` = '$farm_id'";
		$query_update = mysqli_query($con, $update_refresh_time);

		if($query_update){
			echo "<script type='type/javascript'>alert('Refresh time saved')</script>";
		}
	}
}


 ?>