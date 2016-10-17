<?php
/**
 * Created by PhpStorm.
 * User: Serdenko1
 * Date: 16.10.2016
 * Time: 12:41
 */

$arr = array(4, 2, 5, 19, 13, 0, 10);

foreach ($arr as $e) {
    if ((($e = 2) || ($e = 3) || ($e = 4)) && in_array($e,$arr)) {
        echo "Есть!";
    }else {
        echo "Нет!";
    };
    break;
}

