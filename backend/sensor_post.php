		<?php

		require_once('connections/connections.php');

		$api_key = "tPmAT5Ab3j7F9";

		if ($_SERVER["REQUEST_METHOD"] == "POST"){

			if(isset($_POST['api_key'])){

				if($api_key == strip_tags(mysqli_real_escape_string($con,$_POST['api_key']))) {

					$temperature = strip_tags(mysqli_real_escape_string($con, $_POST['temperature']));
					$humidity = strip_tags(mysqli_real_escape_string($con, $_POST['humidity']));
					$light_intensity = strip_tags(mysqli_real_escape_string($con, $_POST['light_intensity']));
					$soil_moisture = strip_tags(mysqli_real_escape_string($con, $_POST['soil_moisture']));
					$pressure = strip_tags(mysqli_real_escape_string($con, $_POST['pressure']));
					$farm_id = 2;
					$created_at = date('Y-m-d H:i:s');

					$parameters = "INSERT INTO `farm_conditions` (`temperature`, `humidity`, `light_intensity`, `soil_moisture`, `pressure`, `created_at`, `farm_id`) VALUES('$temperature', '$humidity', '$light_intensity', '$soil_moisture', '$pressure', '$created_at', '$farm_id')";


					$save_parameters = mysqli_query($con, $parameters);

					if($save_parameters){

						echo "Sensor values have been saved";

					}else{

						echo mysqli_error($con);
					}		

				}else{

					echo "Wrong API Key sent.";
				}

			}else{
				echo "No API Key seen.";
			}




		}


		?>