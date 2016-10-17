<?php
/**
 * Created by PhpStorm.
 * User: Serdenko1
 * Date: 15.10.2016
 * Time: 16:17
 */

$arr = array(2, 5, 9, 15, 0, 4);

foreach ($arr as $value) {
    if ($value >3 && $value<10 ) {
        echo $value."<br>";
    }
}