<?php
$title = 'Практические задания';
$content = '';
function massives() {
    $str = '';
    $food = array(
        'fruits' => array(
            'apples',
            'bananas',
            'oranges'
        ),
        'meet' => array(
            'pig',
            'chicken',
            'frog'
        ),
        'vegetables' => array(
            'cucumbers',
            'eggplants'
        )
    );
    $str .= 'Fruits:<br>';
    foreach ($food['fruits'] as $fruit){
        $str .= $fruit . ' ';
    }
    $str .= '<br>Vegetables:<br>';
    foreach ($food['vegetables'] as $vegetable) {
        $str .= $vegetable . ' ';
    }

    $str .= '<br><br>';

    foreach ($food as $titleFood){
        foreach ($titleFood as $food) {
            $str .= $food . ' ';
        }
        $str .= '<br>';
    }

    return $str;
}
$content .= '<h3>Работа с многомерными массивамы</h3>' . massives();

function easyNumbers() {
    $easyNumbers[] = null;
    for($i = 2; $i < 101; $i++)
    {
        $count = false;
        for($j = 2; $j < $i; $j++)
        {
            if($i % $j === 0)
                $count = true;
        }
        if(!$count)
            $easyNumbers[] = $i;
    }
    $con = 'Числа:';
    foreach ($easyNumbers as $number)
        $con .= ' ' . $number;
    $con .= ' простые.';
    return $con;
}
$content .= '<br><h3>Вывод простых чисел</h3>  <br><i>' . easyNumbers() . '</i>';
?>