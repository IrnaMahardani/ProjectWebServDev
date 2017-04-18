<center> <?php
   // error_reporting (E_ALL^ (E_NOTICE|E_WARNING));
    //$QueryState = $_GET['state'];
    //$QueryCity = str_replace(' ', '_', $_GET['city']);

    $json_string = file_get_contents("http://api.wunderground.com/api/8d86474392050bc6/conditions/q/Indonesia/Gunungpati.json");   
    $json_c = json_decode($json_string);

    $json_string = file_get_contents("http://api.wunderground.com/api/8d86474392050bc6/forecast10days/q/Indonesia/Gunungpati.json");   
    $json_d = json_decode($json_string);
	

        //pencarian variabel
    $lokasi  = $json_c->{"current_observation"}->{"display_location"}->{"city"};
    $lokasi4 = $json_c->{"current_observation"}->{"observation_location"}->{"city"};
    $lokasi5 = $json_c->{"current_observation"}->{"observation_location"}->{"country"};
	$local_time = $json_c->{"current_observation"}->{"local_time_rfc822"};
	$weather =  $json_c->{"current_observation"}->{"weather"};
	$suhuc =  $json_c->{"current_observation"}->{"temp_c"};
	$suhuf =  $json_c->{"current_observation"}->{"temp_f"};
	$wind =  $json_c->{"current_observation"}->{"wind_kph"};
    $icon   = $json_d->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"icon"};
    

        //eksekusi variabel
    echo "<h3> ${lokasi4} City , ${lokasi5} \n</h3>";
    echo "$local_time\n";
    echo "<br>";
    echo "<img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'><br/>";
    echo "<h3>${suhuf} <sup>O</sup>F/ ${suhuc}<sup>O</sup>C\n</h3>";
	echo "<br>";
    echo "Hari ${local_time}<br>";
	echo "Cuaca di ${lokasi} ${lokasi2}<br>";
	echo "Kondisi hari ini : ${weather}<br>";
	echo "Dan suhu ${suhuf} <sup>O</sup>F|  ${suhuc}<sup>O</sup>C<br>"; 
	echo "Dengan Derajat Angin : ${wind} kph ";
   

	

?></center>
<br></br>
<center>	<form action="prakiraan.php" method="get">
		<input class="btnForm" type="submit" name="submit" value="Kembali"/>
	</form>
</center>
</html>