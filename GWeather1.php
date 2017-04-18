<?php
   // error_reporting (E_ALL^ (E_NOTICE|E_WARNING));
    //$QueryState = $_GET['state'];
    //$QueryCity = str_replace(' ', '_', $_GET['city']);

    $json_string = file_get_contents("http://api.wunderground.com/api/8d86474392050bc6/conditions/q/Indonesia/Achmad_Yani.json");   
    $json_a = json_decode($json_string);

    $json_string = file_get_contents("http://api.wunderground.com/api/8d86474392050bc6/forecast10day/q/Indonesia/Achmad_Yani.json");   
    $json_b = json_decode($json_string);

        //pencarian variabel
    $city = $json_a->{"current_observation"}->{"display_location"}->{"city"};
    
	$date1 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"pretty"};
	$date2 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[1]->{"date"}->{"pretty"};
	$date3 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[2]->{"date"}->{"pretty"};
	$date4 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[3]->{"date"}->{"pretty"};
	$date5 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[4]->{"date"}->{"pretty"};
	$date6 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[5]->{"date"}->{"pretty"};
	$date7 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[6]->{"date"}->{"pretty"};

  
    $cndtn1 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"conditions"};
	$cndtn2 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[1]->{"conditions"};
	$cndtn3 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[2]->{"conditions"};
	$cndtn4 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[3]->{"conditions"};
	$cndtn5 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[4]->{"conditions"};
	$cndtn6 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[5]->{"conditions"};
	$cndtn7 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[6]->{"conditions"};
	
	$wind1 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"maxwind"}->{"mph"};
	$wind2 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[1]->{"maxwind"}->{"mph"};
	$wind3 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[2]->{"maxwind"}->{"mph"};
	$wind4 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[3]->{"maxwind"}->{"mph"};
	$wind5 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[4]->{"maxwind"}->{"mph"};
	$wind6 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[5]->{"maxwind"}->{"mph"};
	$wind7 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[6]->{"maxwind"}->{"mph"};
	
	
	$temp1 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"high"}->{"celsius"};
	$temp2 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[1]->{"high"}->{"celsius"};
	$temp3 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[2]->{"high"}->{"celsius"};
	$temp4 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[3]->{"high"}->{"celsius"};
	$temp5 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[4]->{"high"}->{"celsius"};
	$temp6 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[5]->{"high"}->{"celsius"};
	$temp7 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[6]->{"high"}->{"celsius"};
	
	$temp_f1 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"low"}->{"fahrenheit"};
	$temp_f2 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[1]->{"low"}->{"fahrenheit"};
	$temp_f3 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[2]->{"low"}->{"fahrenheit"};
	$temp_f4 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[3]->{"low"}->{"fahrenheit"};
	$temp_f5 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[4]->{"low"}->{"fahrenheit"};
	$temp_f6 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[5]->{"low"}->{"fahrenheit"};
	$temp_f7 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[6]->{"low"}->{"fahrenheit"};
	
	$icon1 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"icon"};
	$icon2 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[1]->{"icon"};
	$icon3 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[2]->{"icon"};
	$icon4 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[3]->{"icon"};
	$icon5 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[4]->{"icon"};
	$icon6 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[5]->{"icon"};
	$icon7 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[6]->{"icon"};
    
    

        
   
	
	
  
 

   
    
	

?>