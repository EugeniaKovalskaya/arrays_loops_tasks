<?php
/**
 * Created by PhpStorm.
 * User: Serdenko1
 * Date: 16.10.2016
 * Time: 13:18
 */

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

foreach ($arr as $value) {
    if ($value % 3 ==false ) {
        echo $value. " ";
    } else {
        echo $value. ", ";
    }
}

