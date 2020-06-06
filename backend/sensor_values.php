<?php
	require_once('connections/connections.php');

	$records = "SELECT * FROM `farm_conditions` WHERE `farm_id` = '2' ORDER BY `id` DESC limit 40";
	$get_records = mysqli_query($con, $records);

	if($get_records){

		while($param = mysqli_fetch_assoc($get_records)){

			$sensor_data[] = $param;
		}
	}


	$readings_time = array_column($sensor_data, 'created_at');

// ******* Uncomment to convert readings time array to your timezone ********
/*$i = 0;
foreach ($readings_time as $reading){
    // Uncomment to set timezone to - 1 hour (you can change 1 to any number)
    $readings_time[$i] = date("Y-m-d H:i:s", strtotime("$reading - 1 hours"));
    // Uncomment to set timezone to + 4 hours (you can change 4 to any number)
    //$readings_time[$i] = date("Y-m-d H:i:s", strtotime("$reading + 4 hours"));
    $i += 1;
}*/
$temperature_array = array_reverse(array_column($sensor_data, 'temperature'));
$humidity_array = array_reverse(array_column($sensor_data, 'humidity'));
$light_intensity_array = array_reverse(array_column($sensor_data, 'light_intensity'));
$soil_moisture_array = array_reverse(array_column($sensor_data, 'soil_moisture'));
$pressure_array = array_reverse(array_column($sensor_data, 'pressure'));

$temperature = json_encode(array_reverse(array_column($sensor_data, 'temperature')), JSON_NUMERIC_CHECK);
$humidity = json_encode(array_reverse(array_column($sensor_data, 'humidity')), JSON_NUMERIC_CHECK);
$light_intensity = json_encode(array_reverse(array_column($sensor_data, 'light_intensity')), JSON_NUMERIC_CHECK);
$soil_moisture	 = json_encode(array_reverse(array_column($sensor_data, 'soil_moisture')), JSON_NUMERIC_CHECK);
$pressure = json_encode(array_reverse(array_column($sensor_data, 'pressure')), JSON_NUMERIC_CHECK);
$reading_time = json_encode(array_reverse($readings_time), JSON_NUMERIC_CHECK);



	?>