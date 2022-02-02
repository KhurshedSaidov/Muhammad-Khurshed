<?php

function validateFloatlatutude($latutude) 
{
    if(is_float($latutude)) 
    { 
        return "type of latutude is float";
    }
    else return "422: The type of latutude is incorrectly!";
}
function validateFloatlongtutude($longtutude)
{    
    if(is_float($longtutude)) 
    { 
        return "type of longtutude is float";
    }
    else return "422: The type of longtutude is incorrectly!";
}

function validateValueCheckingForLatutude($latutude, $value_one, $value_four)
{
    If($latutude >= $value_one)
    {
        return "this is the normal value for coordinate";
    }
    else return "422: too small value for coordinates";
    
    If($latutude <= $value_four)
    {
        return "422: too long value for coordinates";
    }
    else return "this is the normal value for coordinate";
}
function validateValueCheckingForLongtutude($longtutude, $value_one, $value_four)
{
    If($longtutude >= $value_one)
    {
        return "this is the normal value for coordinate";
    }
    else return "422: too small value for coordinates";
    
    If($longtutude <= $value_four)
    {
        return "422: too long value for coordinates";
    }
    else return "this is the normal value for coordinate";
}
function validateMySquareLatutude($latutude, $value_one, $value_four)
{
    If($latutude >= $value_one)
    {
        return "latutude is in my square";
    }
    else return "422: latutude is not in my square";
    
    If($latutude <= $value_four)
    {
        return "422: latutude is not in my square";
    }
    else return "latutude is in my square";
}
function validateMySquareLongtutude($longtutude, $value_one, $value_four)
{
    If($longtutude >= $value_one)
    {
        return "longtutude is in my square";
    }
    else return "422: latutude is not in my square";
    
    If($longtutude <= $value_four)
    {
        return "422: longtutude is not in my square";
    }
    else return "latutude is in my square";
}


function coordinates($latutude, $longtutude, $value_one, $value_two, $value_three, $value_four)
{
    $validate_float_lat = validateFloatlatutude($latutude);
    $validate_float_long = validateFloatlongtutude($longtutude);
    $validate_val_checking_lat = validateValueCheckingForLatutude($latutude, $value_one, $value_four);
    $validate_val_checking_long = validateValueCheckingForLongtutude($longtutude, $value_one, $value_four);
    $validate_my_square_lat = validateMySquareLatutude($latutude, $value_one, $value_four);
    $validate_my_square_long = validateMySquareLongtutude($longtutude, $value_one, $value_four);
    return $validate_float_lat . $validate_float_long. $validate_val_checking_lat . $validate_val_checking_long .
    $validate_my_square_lat . $validate_my_square_long;
}

$latutude = readline("Input latutude: ");
$longtutude = readline("Input logtutude: ");
$value_one  = 500.500;
$value_two  = 1000.1000;
$value_three= 1500.100;
$value_four = 2000.100;
echo coordinates($latutude, $longtutude, $value_one, $value_two, $value_three, $value_four);