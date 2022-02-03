<?php

function validateString($fish_name)
{
    if (is_string($fish_name)) {
        return "200: Fish name type is ok!";
    }
    return "422: The type of Fish name is incorrectly!";
}

function validateInteger($fish_name, $min_value, $max_value, $fishes, $fish_number)
{
    if (is_numeric($fish_number) && $fish_number != 0) {
        return "200: Fish number type is ok!";
    }
    return "422: The type of Fish number is incorrectly!";

}

function validateMin($fish_name, $min_value)
{
    if (mb_strlen($fish_name) <= $min_value) {
        return "Very few characters in the order!";
    }
    return "Min number of characters are ok!";
}

function validateMax($fish_name, $min_value, $max_value)
{
    if (mb_strlen($fish_name) >= $max_value) {
        return "A lot of characters in the order!";

    }
    return "Max number of characters are ok!";
}

function validateInArray($fish_name, $min_value, $max_value, $fishes)
{
    if (in_array($fish_name, $fishes)) {
        return "The fish is in list!";
    }
    return "The fish is not in list!";
}

function validate ($rules, $fish_name, $fishes, $fish_number){
    $arr_rules = explode("|", $rules);
    $messages = [];
    foreach ($arr_rules as $rule){
        array_push($messages, call_user_func_array("validate" . $rule, [$fish_name, 2, 20, $fishes, $fish_number]));
    }
    return $messages;
}

function index($fish_name, $fish_number)
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
        'String|Integer|Min|Max|InArray';
    $messages = validate($rules, $fish_name, $fishes, $fish_number);

    return count ($messages)
        ? implode(",<br/>", $messages)
        : 'No validation order';
}

$fish_name = readline("Input the name of fish, please: ");
$fish_number = (int)readline("Input the number of fish, please: ");

echo index($fish_name, $fish_number);