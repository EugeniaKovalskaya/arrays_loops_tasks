<?php
/**
 * Created by PhpStorm.
 * User: Serdenko1
 * Date: 15.10.2016
 * Time: 14:56
 */
$result = 0;
$array = array (1, 20, 15, 17, 24, 35);

foreach ($array as $value) {
   $result += $value;
}
echo $result;
