<?php
/**
 * Created by PhpStorm.
 * User: Serdenko1
 * Date: 16.10.2016
 * Time: 14:04
 */

$arr = array('Monday', 'Thuesday', 'Wednsday', 'Thursday' , 'Friday', 'Saturday', 'Sunday');

foreach ($arr as $value) {
    if ($value == 'Saturday' or $value == 'Sunday' ) {
        echo "<b>$value</b><br>";
    } else {
        echo $value. "<br>";
    }
}