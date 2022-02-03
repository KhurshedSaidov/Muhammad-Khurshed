<?php

function validateString($fish_name)
{
    if (is_string($fish_name)) {
        return "200: Fish name type is ok! ";
    }
    return "422: The type of Fish name is incorrectly! ";
}

function validateInteger($fish_number)
{
    if (is_numeric($fish_number)) {
        return "200: Fish number type is ok! ";
    }
    return "422: The type of Fish number is incorrectly! ";

}

function validateMin($fish_name, $min_value)
{
    if (mb_strlen($fish_name) <= $min_value) {
        return "Very few characters in the order! ";
    }
    return "Min number of characters are ok! ";
}

function validateMax($fish_name, $max_value)
{
    if (mb_strlen($fish_name) >= $max_value) {
        return "A lot of characters in the order! ";

    }
    return "Max number of characters are ok! ";
}

function validateInArray($fish_name, $fishes)
{
    if (in_array($fish_name, $fishes)) {
        return "The fish is in list!";
    }
    return "The fish is not in list!";
}

function orderToFisherman($fish_name, $fish_number)
{
    $validate_string = validateString($fish_name);
    $validate_integer = validateInteger($fish_number);
    $min_value = 3;
    $max_value = 20;
    $validate_min = validateMin($fish_name, $min_value);
    $validate_max = validateMax($fish_name, $max_value);
    $fishes = array(
        'Щука',
        'Судак',
        'Берш',
        'Карась',
        'Толстолобик',
        'Форель'
    );
    $in_array = validateInArray($fish_name, $fishes);
    return $validate_string . $validate_integer . $validate_min . $validate_max . $in_array;
}

$fish_name = readline("Input the name of fish, please: ");
$fish_number = (int)readline("Input the number of fish, please: ");


echo orderToFisherman($fish_name, $fish_number);
/*
function index($request)
{
    $fishes = [
        'Щука',
        'Судак',
        'Берш',
        'Карась',
        'Толстолобик',
        'Форель'
    ];
    $rules =
        'required|string|min:3|max:20|in:$fishes';
    $messages = validate($rules, $requests);

    return count ($messages)
        ? implode(',/n', $messages)
        : 'No validation order';
}
call_user_func_array("index", ['Судак']);*/