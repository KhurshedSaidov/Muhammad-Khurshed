<?php

function validateFloatlatutude($latutude) 
{
    if(is_float($latutude)) { return "type of latutude is float";
    }
    else return "422: The type of latutude is incorrectly!";
}
function validateFloatlongtutude($longtutude)
{    
    if(is_float($longtutude)) { return "type of longtutude is float";
    }
    else return "422: The type of longtutude is incorrectly!";
}
function validateValueLenghtLatutude($latutude)
{
    return (int) (log($latutude, 10) + 1);  
}
function validateValueLenghtLongtutude($longtutude)
{
    return (int) (log($longtutude, 10) + 1);  
}
function validateMySquareMinLatutude($latutude, $min_value)
{
    if($latutude > $min_value) {return "422: latutude is not in my square";
    }
    else return "OK";
}
function validateMySquareMaxLatutude($latutude, $max_value)
{
    if($latutude > $max_value) {return "422: latutude is not in my square";
    }
    else return "OK";
}
function validateMySquareMinLongtutude($longtutude, $min_value)
{
    if($longtutude > $min_value) {return "422: longtutude is not in my square";
    }
    else return "OK";
}
function validateMySquareMaxLongtutude($longtutude, $max_value)
{
    if($longtutude > $max_value) {return "422: longtutude is not in my square";
    }
    else return "OK";
}


function coordinates($latutude, $longtutude, $min_value, $max_value)
{
    $validate_float_lat = validateFloatlatutude($latutude);
    $validate_float_long = validateFloatlongtutude($longtutude);
    $validate_val_lenght_latutude = validateValueLenghtLatutude($latutude);
    $validate_val_lenght_longtutude = validateValueLenghtLongtutude($longtutude);
    $validate_my_square_min_latutude = validateMySquareMinLatutude($latutude, $min_value);
    $validate_my_square_max_latutude = validateMySquareMaxLatutude($latutude, $max_value);
    $validate_my_square_min_longtutude = validateMySquareMinLongtutude($longtutude, $min_value);
    $validate_my_square_max_longtutude = validateMySquareMaxLongtutude($longtutude, $min_value);
    return $validate_float_lat . $validate_float_long . $validate_val_lenght_latutude . $validate_val_lenght_longtutude . 
    $validate_my_square_min_latutude. $validate_my_square_max_latutude . $validate_my_square_min_longtutude .
    $validate_my_square_max_longtutude;
}

$latutude = readline("Input latutude: ");
$longtutude = readline("Input logtutude: ");
$min_value = 123123.312312;
$max_value = 121221.525353;
echo coordinates($latutude, $longtutude, $min_value, $max_value);