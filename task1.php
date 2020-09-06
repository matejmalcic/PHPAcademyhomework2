<?php
ob_start();

$name = 'matej';
$arrName = str_split($name);
$alphabet = range('a', 'z');

$result = [$alphabet, $alphabet, $alphabet, $alphabet, $alphabet];

for ($i=0; $i < count($arrName) ; $i++) {
    for ($j=0; $j < count($alphabet) ; $j++) {
        //adding <b> & <u> to specific positions in 2dim array
        $result[$i][array_search($arrName[$i],$alphabet)] = '<b>' . $result[$i][array_search($arrName[$i],$alphabet)] . '</b>';
        $result[$i][array_search($arrName[4-$i],$alphabet)] = '<u>' . $result[$i][array_search($arrName[4-$i],$alphabet)] . '</u>';
        echo $result[$i][$j];
    }
    echo '<br>';
}

$content = ob_get_clean();
include 'index.php';
