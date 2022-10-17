<?php
$i = 1;
while ($a <= 10) {
    echo "$i";
    $i++;
}
$i = 1;
while ($i <= 100) {
    if ($i %2 == 0){
        echo $i. "even : <br>";
    }
    else {
        echo $i. "odd";
    }
    $i++;
}
do {
    echo $a. "<br>";
    $a++;
}
while ($a <= 10);
?>