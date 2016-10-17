<?php
/**
 * Created by PhpStorm.
 * User: Serdenko1
 * Date: 15.10.2016
 * Time: 15:42
 */

$arr = array('Коля' => 200, 'Вася' => 300, 'Петя' =>400 );

foreach ($arr as $key => $value) {
    echo $key . " " . "- зарплата" . " " . $value . " " . "долларов";
    break;
}