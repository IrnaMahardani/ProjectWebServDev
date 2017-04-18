<?php
	include "header.php";
?>
<html>
	<head>
	<h2><center>Prakiraan Cuaca di Semarang</center></h2>
	</head>
	<link href="css/style.css" rel="stylesheet">
	<body>
	
<?php
    require 'GWeather1.php';
?>
<?php

echo "<h1> </h1>";
echo "<hr>";
echo "<table width = 1500  >

<tr>
<td align=center><b>Tanggal</b></td>
<td align=center>$date1</td>
<td align=center>$date2</td>
<td align=center>$date3</td>
<td align=center>$date4</td>
<td align=center>$date5</td>
<td align=center>$date6</td>
<td align=center>$date7</td>

</tr>
<tr>
<td align=center><b>Icon</b></td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon1 . ".gif'></td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon2 . ".gif'></td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon3 . ".gif'></td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon4 . ".gif'></td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon5 . ".gif'></td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon6 . ".gif'></td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon7 . ".gif'></td>
<tr>
<tr>
<td align=center><b>Kondisi</b></td>
<td align=center>$cndtn1</td>
<td align=center>$cndtn2</td>
<td align=center>$cndtn3</td>
<td align=center>$cndtn4</td>
<td align=center>$cndtn5</td>
<td align=center>$cndtn6</td>
<td align=center>$cndtn7</td>
</tr>

<tr>
<td align=center><b>Suhu </b></td>
<td align=center>$temp1 <sup>O</sup> C atau $temp_f1 <sup>O</sup>F</td>
<td align=center>$temp2 <sup>O</sup> C atau $temp_f2 <sup>O</sup>F</td>
<td align=center>$temp3 <sup>O</sup> C atau $temp_f3 <sup>O</sup>F</td>
<td align=center>$temp4 <sup>O</sup> C atau $temp_f4 <sup>O</sup>F</td>
<td align=center>$temp5 <sup>O</sup> C atau $temp_f5 <sup>O</sup>F</td>
<td align=center>$temp6 <sup>O</sup> C atau $temp_f6 <sup>O</sup>F</td>
<td align=center>$temp7 <sup>O</sup> C atau $temp_f7 <sup>O</sup>F</td>
</tr>

</table>";
?>
	<br></br>
<center>	<form action="prakiraan.php" method="get">
		<input class="btnForm" type="submit" name="submit" value="Kembali"/>
	</form>
</center>
</html>