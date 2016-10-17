<?php
/**
 * Created by PhpStorm.
 * User: Serdenko1
 * Date: 17.10.2016
 * Time: 20:56
 */

$table = array(1,2,3,4,5,6,7,8,9,10);

echo "<table><tr>";

foreach ($table as $col) {
    foreach ($table as $row)
        echo "<td>" .($col*$row) . "</td>";
    if ($col != 10) echo "</tr><tr>";
};
echo "</tr></table>";