<?php
/**
 * Created by PhpStorm.
 * User: Serdenko1
 * Date: 15.10.2016
 * Time: 16:51
 */
// цикл for:
echo "<table><tr>";

for ($col = 1; $col <= 10; $col++) {
    for ($row = 1; $row <= 10; $row++)
    echo "<td>" .($col*$row) . "</td>";
    if ($col != 10) echo "</tr><tr>";
};
echo "</tr></table>";

// цикл foreach:

$table = array(1,2,3,4,5,6,7,8,9,10);

echo "<table><tr>";

foreach ($table as $col) {
    foreach ($table as $row)
        echo "<td>" .($col*$row) . "</td>";
    if ($col != 10) echo "</tr><tr>";
};
echo "</tr></table>";
