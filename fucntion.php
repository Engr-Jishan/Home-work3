<?php
function num($number) {
    if ($number < 2) {
        return 1;
    }
    else {
        return ($number * num($number -1));
    }
}
echo num(5);
?>