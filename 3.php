<?php
/**
 * Created by PhpStorm.
 * User: Serdenko1
 * Date: 15.10.2016
 * Time: 15:29
 */
$result = 0;
$array = array (26, 17, 136, 12, 79, 15);

foreach ($array as $value) {
    echo $result += $value*$value;
}
echo $result;