<!DOCTYPE html>
<html>
<head>
	<title>Hackathon Test</title>
</head>
<body>

	<form action="sensor_post.php" method="post">
		<input name = "temperature" placeholder="temperature" /><br>
		<input name = "humidity" placeholder="humidity" /><br>
		<input name = "light_intensity" placeholder="light_intensity" /><br>
		<input name = "soil_moisture" placeholder="soil_moisture" /><br>
		<input name = "pressure" placeholder="pressure" /><br>
		<input type="hidden" name = "api_key" value = "Some random string" placeholder="pressure" />

		<button name="submit">Submit</button>
	</form>
</body>
</body>
</html>