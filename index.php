<?php
/*
Ingredients for Atlanta:
    * 100 ml pepsi
    * 60 ml orange juice
    * 30 g lemon
    * ice
*/

function Atlanta
(int $pepsi,
int $orange_juice,
int $lemon,
int $ice)

{
    echo "
    1. Смешайте $pepsi мл пепси с $orange_juice мл апельсинового сока. <br>
    2. Добавьте $lemon грамм лимона и $ice кубиков льда. <br>
    ";
}
Atlanta(100, 60, 30, 5);

/*
Ingredients for JUNGLE BANANA MINT COCKTAIL
    Bananas (large): 2 PC.
    Mint (twigs): 4 PC.
    Honey: 2 tablespoon
    Mineral water: taste
*/
function cocktailJungle (
    int $banana,
    int $mint,
    int $honey
) 
{
    echo "
    <hr style='margin:10px 0 10px 0;>
    1. $banana банана очистить и крупно нарезать.<br>
    2. $mint мята вымыть, обсушить и разобрать на листики и растереть в кашицу.<br>
    3. Взбить блендером бананы с мятой и $honey стол.л медом.<br>
    4. Влить минеральную воду и снова взбить.<br>
    5. Украшение. Банан нарезать кружочками.<br>
    6. Готовый коктейль разлить по бокалам и украсить кружочками банана.";
}
cocktailJungle(2, 4, 2);