<?php
// Проверить типы данных
function validateTypeOfFishName ($fish_name){
    if ((int)$fish_name != 0) {
        return "422: The type of Fish name is incorrectly! ";
    }
    else return "200: Fish name type is ok! ";
}

function validateTypeOfFishNumber ($fish_number){
    if ((int)$fish_number == 0) {
        return "422: The type of Fish number is incorrectly! ";
    }
    else return "200: Fish number type is ok! ";
}

// Длина команды минимум и максимум
function validateMin ($fish_name){
    $min = 3;
    if (strlen($fish_name) < $min) {
        return "Very few characters in the order! ";
    }
    else return "Min number of characters are ok! ";
}

function validateMax ($fish_name){
    $max = 12;
    if (strlen($fish_name) > $max) {
        return "A lot of characters in the order! ";
    }
    else return "Max number of characters are ok! ";
}

// находится для в наборе уже существующих рыб в океане
function isInArray ($fish_name) {
    $fishes = array(
        'Щука',
        'Судак',
        'Берш',
        'Карась',
        'Толстолобик',
        'Форель'
    );
    if (in_array($fish_name, $fishes)) {
        return "The fish is in list!";
    }
    else return "The fish is not in list!";
}

function FishermanOrder($fish_name, $fish_number)
{
    $str_validate_type = validateTypeOfFishName($fish_name);
    $int_validate_type = validateTypeOfFishNumber($fish_number);
    $validate_min = validateMin($fish_name);
    $validate_max = validateMax($fish_name);
    $in_array = isInArray($fish_name);
    return $str_validate_type . $int_validate_type . $validate_min . $validate_max . $in_array;
}


//business logic
$fish_name = readline("Input the name of fish, please: ");
$fish_number = readline("Input the number of fish, please: ");
echo FishermanOrder($fish_name, $fish_number);