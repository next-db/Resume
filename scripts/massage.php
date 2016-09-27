<?php
if ($_POST) {
    $massage = serialize($_POST);
    $file = fopen('massages.txt', 'a');
    fwrite($file,$massage . PHP_EOL);
    fclose($file);
}
?>