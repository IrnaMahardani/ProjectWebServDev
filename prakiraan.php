<?php
	include "header.php";
?>
<div class="container">

<html>
	<head>
        <link href="css/style.css" rel="stylesheet">
        <style type="text/css">
          body {
            background-repeat: no-repeat;
            padding-top: 30px;
            padding-bottom: 20px;
          }
        </style>
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<h2 align=center>Prakiraan Cuaca di Semarang</h2><br>
			
	</head>
	<body>
        <div align=center>
			<form action="GWeather.php" method="get">
			<input class="btnForm" type="submit" name="submit" value="Prakiraan Cuaca Hari Ini"/>
			</form></br>
			<form action="Conditionss.php" method="get">
			<input class="btnForm" type="submit" name="submit" value="Prakiraan Cuaca 7 hari ke depan"/>
			</form>
		</div>
	</body>

</html>