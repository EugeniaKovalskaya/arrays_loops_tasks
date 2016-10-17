<?php
/**
 * Created by PhpStorm.
 * User: Serdenko1
 * Date: 17.10.2016
 * Time: 20:57
 */

$row = rand(2,10);
$cols = rand(2,10);
$colors = array('red','yellow','blue','gray','maroon','brown','green');

echo "<table>";

for ($tr=1; $tr<=$row; $tr++){
    echo '<tr>';
    for ($td=1; $td<=$cols; $td++){
        echo '<td style="background-color:  ' . $colors[array_rand($colors)] . '">'. rand() .'</td>';
    }
    echo '</tr>';
}

echo "</table>";



