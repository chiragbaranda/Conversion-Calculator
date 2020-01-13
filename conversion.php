<?php
	# I, CHIRAG BARANDA, student number 000759867, certify that all code submitted is my own work; 
		#that I have not copied it from any other source.  
		#I also certify that I have not allowed my work to be copied by others.
	#Author: CHIRAG BARANDA, 000759867
	#Date : 18th Sept, 2018
	#purpose : This php file contains the logic for conversion of currency and temprature,
		   # which take 3 Input and generate html table in response for the calculated values.


	//getting an input from the textbox (form)
	$minValue= $_GET["minValue"];
	$maxValue= $_GET["maxValue"];
	$steps= $_GET["NumberOfSteps"];
	$typeOfConversion= $_GET["conversionValue"];

	

	// if the parameter get from form is cadtousd it will perform CAD to USD conversion
	if($typeOfConversion=="cadtousd")
	{

		echo "<br> <br> CAD TO USD <br> <br>";

		echo "<table border=1><tr> <th>CAD</th> <th>USD </th></tr>"; //create table as HTTP Response for CAD to USD
		for ($i=$minValue; $i <=$maxValue; $i = $i + $steps) 
			{
				$cal = 0.75 * $i; // calculation for conversion

				echo "<tr> <td> $i </td> <td> " . round($cal,2) . " </td></tr>	"; //printing correnspoing value and converted values in table

			}	
		echo "</table>";
	}

	

	// if the parameter get from form is usdtocad it will perform USD TO CAD conversion
	if($typeOfConversion=="usdtocad")
		{

			echo "<br> <br> USD TO CAD <br> <br>";

			echo "<table border=1><tr> <th>USD</th> <th>CAD </th></tr>"; //create table as HTTP Response for USD to CAD
			for ($i=$minValue; $i <=$maxValue; $i = $i + $steps) 
				{
					$cal = $i * 1.5 ; // calculation for conversion

					echo "<tr> <td> $i </td> <td> " .  round($cal,2) . "</td></tr>	";	//printing correnspoing value and converted values in table

				}
			echo "</table>";

	}

	
	// if the parameter get from form is 'celtofer' it will perform Celcius to Fahrenheit conversion
	if($typeOfConversion=="celtofer")
		{

			echo "<br> <br> Celcius to Fahrenheit <br> <br>";
	

			echo "<table border=1><tr> <th>Celcius</th> <th>Fahrenheit </th></tr>"; //create table as HTTP Response for Celcius to Fahrenheit
			for ($i=$minValue; $i <=$maxValue; $i = $i + $steps) 
				{
					$cal = $i * 1.8 +32 ; // calculation for conversion

					echo "<tr> <td> $i </td> <td>" . round($cal,2) . " </td></tr>	";	//printing correnspoing value and converted values in table

				}
			echo "</table>";

	}



	// if the parameter get from form is 'fertocel' it will perform  Fahrenheit to Celcius conversion

	if($typeOfConversion=="fertocel")
		{


			echo "<br> <br> Fahrenheit to Celcius <br> <br>";
	

			echo "<table border=1><tr> <th>Fahrenheit </th> <th>Celcius </th></tr>"; //create table as HTTP Response Fehrenheit
			for ($i=$minValue; $i <=$maxValue; $i = $i + $steps) 
				{
					$cal = ($i - 32) /1.8 ; // calculation for conversion

					echo "<tr> <td> $i </td> <td>" . round($cal,2) . " </td></tr>	";	//printing correnspoing value and converted values in table

				}	
			echo "</table>";
	}
?>