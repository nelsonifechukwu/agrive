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


$temperature_array = array_reverse(array_column($sensor_data, 'temperature'));
$humidity_array = array_reverse(array_column($sensor_data, 'humidity'));
$light_intensity_array = array_reverse(array_column($sensor_data, 'light_intensity'));
$soil_moisture_array = array_reverse(array_column($sensor_data, 'soil_moisture'));
$pressure_array = array_reverse(array_column($sensor_data, 'pressure'));

$current_temperature = end($temperature_array);
$current_humidity = end($humidity_array);
$current_light_intensity = end($light_intensity_array);
$current_soil_moisture = end($soil_moisture_array);
$current_pressure = end($pressure_array);

//check status of enviromental conditions

$get_enviromental_conditions = "SELECT * FROM `normal_enviromental_conditions` WHERE `farm_id` = '2'";
	$query_get_enviromental_conditions = mysqli_query($con, $get_enviromental_conditions);

	if($query_get_enviromental_conditions){

		while($conditions = mysqli_fetch_assoc($query_get_enviromental_conditions)){

			//var_dump($conditions);
			$normal_enviromental_conditions = $conditions;

			//var_dump($normal_enviromental_conditions);
		}

}


$min_temperature = $normal_enviromental_conditions['min_temperature']; 
$max_temperature = $normal_enviromental_conditions['max_temperature'];
$min_humidity = $normal_enviromental_conditions['min_humidity'];
$max_humidity = $normal_enviromental_conditions['max_humidity'];
$min_light_intensity = $normal_enviromental_conditions['min_light_intensity'];
$max_light_intensity = $normal_enviromental_conditions['max_light_intensity'];
$min_soil_moisture = $normal_enviromental_conditions['min_soil_moisture'];
$max_soil_moisture  = $normal_enviromental_conditions['max_soil_moisture'];
$min_pressure = $normal_enviromental_conditions['min_pressure'];
$max_pressure = $normal_enviromental_conditions['max_pressure'];


//check temperature status
if(($current_temperature <= $max_temperature) && ($current_temperature >= $min_temperature))
{
	$temperature_status = "Good";
	$temperature_class = "text-success";

}else if ($current_temperature > $max_temperature)
{
	$temperature_status = "Too high";
	$temperature_class = "text-danger";
}else if ($current_temperature < $min_temperature)
{
	$temperature_status = "Too low";
	$temperature_class = "text-danger";
}


//check pressure status
if(($current_pressure <= $max_pressure) && ($current_pressure >= $min_pressure))
{
	$pressure_status = "Good";
	$pressure_class = "text-success";

}else if ($current_pressure > $max_pressure)
{
	$pressure_status = "Too high";
	$pressure_class = "text-danger";


}else if ($current_pressure < $min_pressure)
{
	$pressure_status = "Too low";
	$pressure_class = "text-danger";
}


//check humidity status
if(($current_humidity <= $max_humidity) && ($current_humidity >= $min_humidity))
{
	$humidity_status = "Good";
	$humidity_class = "text-success";

}else if ($current_humidity > $max_humidity)
{
	$humidity_status = "Too high";
	$humidity_class = "text-danger";


}else if ($current_humidity < $min_humidity)
{
	$humidity_status = "Too low";
	$humidity_class = "text-danger";
}


//check light intesity status
if(($current_light_intensity <= $max_light_intensity) && ($current_light_intensity >= $min_light_intensity))
{
	$light_intesnity_status = "Good";
	$light_intensity_class = "text-success";

}else if ($current_light_intensity > $max_light_intensity)
{
	$light_intensity_status = "Too high";
	$light_intensity_class = "text-danger";


}else if ($current_light_intensity < $min_light_intensity)
{
	$light_intensity_status = "Too low";
	$light_intensity_class = "text-danger";
}


//check soil_moisture status
if(($current_soil_moisture <= $max_soil_moisture) && ($current_soil_moisture >= $min_soil_moisture))
{
	$soil_moisture_status = "Good";
	$soil_moisture_class = "text-success";

}else if ($current_soil_moisture > $max_soil_moisture)
{
	$soil_moisture_status = "Too high";
	$soil_moisture_class = "text-danger";


}else if ($current_soil_moisture < $min_soil_moisture)
{
	$soil_moisture_status = "Too low";
	$soil_moisture_class = "text-danger";
}


	?>