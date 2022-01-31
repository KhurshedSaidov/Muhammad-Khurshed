<?php

function validateFloat($latutude, $longtitude)
{
    var_dump(is_float($latutude));
    var_dump(is_float($longtitude));
}

function validateValLenght(int $latutude, int $longtitude)
{
    echo strlen($latutude); echo "<br>";
    echo strlen($longtitude); echo "<br>";
}

function validateMySquare(int $latutude, int $longtitude)
{
    $min = 8;
    $max = 15;
    if (strlen(string: $latutude)  >= $max)
{
    return "A lot of characters in coordinates. ";
}
    if (strlen(string: $longtitude)  >= $max)
{
    return "A lot of characters in coordinates. ";
}
    if (strlen($latutude, $latutude) < $min)
{
    return "Few characters in coordinates. ";
}
    if (strlen($latutude, $longtitude) < $min)
{
    return "Few characters in coordinates. ";
}

function coordinates(int $latutude, int $longtitude)
{
    $latutude       = ["23134.12331"];
    $longtitude     = ["2313213.4244"];
    $type_checking  = validateFloat($latutude, $longtitude);
    $val_lenght     = validateValLenght($latutude, $longtitude);
    $in_my_square   = validateMySquare($latutude, $longtitude);
    return "$type_checking $val_lenght $in_my_square";

}
$latutude   = readline("Input latutude: ");
$longtitude = readline("Input longtitude: ");
echo coordinates($latutude, $longtitude);