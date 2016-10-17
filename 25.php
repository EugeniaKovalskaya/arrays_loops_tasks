<?php
/**
 * Created by PhpStorm.
 * User: Serdenko1
 * Date: 16.10.2016
 * Time: 16:46
 */

for ($i = 0; $i <= 10; $i++) {
    $arr [$i] = rand();
}
print_r($arr);

echo "<br>";

echo max($arr). "<br>";
echo min($arr). "<br>";

$max=(max($arr)+min($arr));
$min=($max-min($arr));
$max=($max-$min);

echo $max. "<br>";
echo $min. "<br>";
