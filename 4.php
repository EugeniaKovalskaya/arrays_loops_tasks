<?php
/**
 * Created by PhpStorm.
 * User: Serdenko1
 * Date: 15.10.2016
 * Time: 15:38
 */

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $key=>$value) {
   echo $key. "<br>";
};

echo "<br>";

foreach ($arr as $key=>$value) {
    echo $value. "<br>";
}