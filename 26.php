<?php
/**
 * Created by PhpStorm.
 * User: Serdenko1
 * Date: 16.10.2016
 * Time: 17:12
 */

/*for ($i=1;$i<=100;$i++) {
   print_r($arr[$i] = rand(1, 100));
}
foreach ($arr as $va) {
    if ($ar > 0 and $key % 2 == 0) {
        echo "{$key}(парные) и больше нуля={$ar} \n ";
    }
    if ($ar > 0 and $key % 2 == 1) {
        echo "{$key}(ne парные) и больше нуля={$ar} \n ";
    }
}*/

for ($i = 0; $i <= 100; $i++) {
    $arr [$i] = rand(1, 100);
}
print_r($arr);
echo "<br>";
foreach ($arr as $key => $value) {
    if ($value > 0 && $key % 2 == false) {
        echo array_product($arr) . " <br> ";
        break;
    }
}
foreach ($arr as $key => $value) {
    if ($value > 0 and $key % 2 == true) {
        echo "[$key]=>$value. <br> ";
    }
}