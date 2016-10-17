<?php
/**
 * Created by PhpStorm.
 * User: Serdenko1
 * Date: 16.10.2016
 * Time: 14:17
 */

$arr = array('Monday', 'Thuesday', 'Wednsday', 'Thursday' , 'Friday', 'Saturday', 'Sunday');
$day = date("l");

foreach ($arr as $value)
{
    if ($value == $day)
    {
        echo "<b>$value</b><br>";
    }
    else
    {
        echo $value. "<br>";
    }
}