<?php
/**
 * Created by PhpStorm.
 * User: Serdenko1
 * Date: 15.10.2016
 * Time: 16:38
 */
$num = 1000;
$i = 0;
while ($num > 50)
{
    $i++;
    $num /= 2;
}

echo $i."<br>";
echo $num;

