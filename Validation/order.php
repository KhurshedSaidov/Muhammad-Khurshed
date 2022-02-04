<?php

function validateString($fish_name)
{
    if (is_string($fish_name)) {
        return "200: Fish name type is ok!";
    }
    else
        return "422: The type of Fish name is incorrectly!";
}

function validateInteger($fish_quantity)
{
    if (is_numeric($fish_quantity) && $fish_quantity != 0) {
        return "200: Fish number type is ok!";
    }
    else
        return "422: The type of Fish number is incorrectly!";

}

function validateMin($fish_name, $min_value)
{
    if (mb_strlen($fish_name) <= $min_value) {
        return "Very few characters in the order!";
    }
    else
        return "Min number of characters are ok!";
}

function validateMax($fish_name, $max_value)
{
    if (mb_strlen($fish_name) >= $max_value) {
        return "A lot of characters in the order!";

    }
    else
        return "Max number of characters are ok!";
}

function validateInArray($fish_name, $fishes)
{
    if (in_array($fish_name, $fishes)) {
        return "The fish is in list!";
    }
    else
        return "The fish is not in list!";
}

function validate ($fish_name, $fishes, $fish_quantity){

    $messages = [];
    array_push($messages, call_user_func('validateString', $fish_name));
    array_push($messages, call_user_func('validateInteger', $fish_quantity));
    array_push($messages, call_user_func_array('validateMin', [$fish_name, 2]));
    array_push($messages, call_user_func_array('validateMax', [$fish_name, 20]));
    array_push($messages, call_user_func_array('validateInArray', [$fish_name, $fishes]));
     return $messages;
}

function index($fish_name, $fish_quantity)
{
    $fishes = [
        'Щука',
        'Судак',
        'Берш',
        'Карась',
        'Толстолобик',
        'Форель'
    ];
    $rules = 'string|integer|min:3|max:20|in:$array';
    $messages = validate($fish_name, $fishes, $fish_quantity);

    return count ($messages)
        ? implode(",<br/>", $messages)
        : 'No validation order';
}

$fish_name = readline("Input the name of fish, please: ");
$fish_quantity = (int)readline("Input the number of fish, please: ");

echo index($fish_name, $fish_quantity);