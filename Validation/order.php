<?php

function validateString($fish_name)
{
    if (is_string($fish_name)) {
        return "200: Fish name type is ok!";
    }
    else
        return "422: The type of Fish name is incorrectly!";
}

function validateInteger($fish_name, $fish_quantity)
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

function validateIn($fish_name, $value, $available_fishes)
{
    if (in_array($fish_name, $available_fishes)) {
        return "The fish is in list!";
    }
    else
        return "The fish is not in list!";
}

function validate ($rules, $fish_name, $available_fishes, $fish_quantity){
    $rules = explode("|", $rules);
    $messages = [];

    foreach ($rules as $rule) {
        $rule = explode(':', $rule);
        if (isset($rule[1])) {
            $messages[] = call_user_func_array('validate' . ucfirst($rule[0]), [$fish_name, $rule[1], $available_fishes, $fish_quantity]);
        }
        else
            $messages[] = call_user_func_array('validate' . ucfirst($rule[0]), [$fish_name, $fish_quantity]);
    }
     return $messages;
}

function index($fish_name, $fish_quantity)
{
    $available_fishes = [
        'Щука',
        'Судак',
        'Берш',
        'Карась',
        'Толстолобик',
        'Форель'
    ];
    $rules = 'string|integer|min:3|max:20|in:$array';
    $messages = validate($rules, $fish_name, $available_fishes, $fish_quantity);

    return count ($messages)
        ? implode(",<br/>", $messages)
        : 'No validation order';
}

$fish_name = readline("Input the name of fish, please: ");
$fish_quantity = (int)readline("Input the number of fish, please: ");

echo index($fish_name, $fish_quantity);