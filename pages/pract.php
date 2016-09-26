<?php
$title = 'Практические задания';
$content = '';
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
$content .= 'Числа:';
foreach ($easyNumbers as $number)
    $content .= ' ' . $number;
unset($easyNumbers);
$content .= ' простые.';
?>