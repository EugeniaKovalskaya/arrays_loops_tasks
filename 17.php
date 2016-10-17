<?php
/**
 * Created by PhpStorm.
 * User: Serdenko1
 * Date: 16.10.2016
 * Time: 13:26
 */

$arr = array('January', 'February', 'March', 'April' , 'May', 'June', 'July', 'August', 'September', 'October','November', 'December');
$month = date("F");

foreach ($arr as $value)
{
    if ($value == $month)
    {
        echo "<b>$value</b><br>";
    }
    else
    {
        echo $value. "<br>";
    }
}