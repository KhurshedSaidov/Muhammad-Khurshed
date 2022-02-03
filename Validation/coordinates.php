<?php

 function validateFloat($value) : string
{
	if (!filter_var($value, FILTER_VALIDATE_FLOAT)) {
		return "Type of value is correct!";
	} else {
		return "ERROR: Type of value must be float!";
	}
}

function validateMin($value, $min_value) : string
{
	if ($value <= $min_value) {
		return "ERROR: Too few characters sent";
	} else {
		return "Min characters OK";
	}
}

function validateMax($value, $max_value) : string
{
	if ($value >= $max_value) {
		return "ERROR: Too many characters sent";
	} else {
		return "Max characters OK";
	}
}

function validateMySquare($value, $latitude1, $longitude2) : string
{
    if ($value >= $latitude1 && $value <= $longitude2) {
        return "Coordinates is in my square.";
    } else {
        return "ERROR: coordinates is not on my square!";
    }
}


//business logic
$latitude = readline("Input latitude: ");
$longitude = readline("Input longitude: ");
$latitude1 = 500;
$latitude2 = 1500;
$longitude1 = 500;
$longitude2 = 1500;


$float_validation_longitude = validateFloat($longitude);
$float_validation_latitude = validateFloat($latitude);
$min_validation_longitude= validateMin($longitude, 5);
$min_validation_latitude = validateMin($latitude, 5);
$max_validation_longitude= validateMax($longitude, 9);
$max_validation_latitude = validateMax($latitude, 9);
$validation_my_square_latitude = validateMySquare($latitude, $latitude1, $longitude2);
$validation_my_square_longitude = validateMySquare($longitude, $latitude1, $longitude2);
echo $float_validation_latitude . ' ' . $float_validation_longitude . ' ' . $max_validation_longitude . ' ' . $min_validation_latitude . ' ' . $min_validation_longitude . ' ' . $max_validation_latitude . ' ' . $max_validation_longitude . ' ' . $validation_my_square_latitude . ' ' . $validation_my_square_longitude;


