<?php
/**
 * Created by PhpStorm.
 * User: Serdenko1
 * Date: 15.10.2016
 * Time: 15:53
 */

$arr = array('green'=>'зеленый','red'=>'красный','blue'=>'голубой');

foreach ($arr as $key => $value) {
   $en = array($key);
    var_dump($en);
}

foreach ($arr as $key => $value) {
    $ru = array($value);
    var_dump($ru);
}


