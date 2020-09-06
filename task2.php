<?php
ob_start();

$alphabet = range('a', 'z');
$result=[];
$position = 12; //index for bold char in row

//forming 25 alphabet rows
for ($i=0; $i< count($alphabet); $i++){
    $result[$i]= $alphabet;
    $char = array_shift($alphabet);
    array_push($alphabet, $char);
}

//bolding 1st half of rows
for ($i=0; $i < count($result) ; $i++) {
    for ($j = 0; $j < count($alphabet); $j++) {
        if( $j === $position ) {
            $result[$i][$j]= '<b>' . $result[$i][$j] . '</b>';
            if($position === 0 ){
                break 2;
            }
            $position--;
        }
    }
}

//bolding 2nd half o rows, but need to find better way to bold both together
$j=1;
for ($i=13; $i < count($alphabet) ; $i++) {
    $result[$i][$j]= '<b>' . $result[$i][$j] . '</b>';
    $j++;
}

//echo result
for ($i=0; $i < count($result) ; $i++) {
    for ($j = 0; $j < count($alphabet); $j++) {
        echo $result[$i][$j];
    }
    echo '<br>';
}

$content = ob_get_clean();
include 'index.php';
