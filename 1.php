<?php
$f = @fopen('1-input.txt', 'r');

$counter = 0;
while (($line = fgets($f)) !== false) {
    $token = substr($line, 0, 1);
    $number = (int)substr($line, 1);

    if ($token === '+') {
        $counter += $number;
    } else {
        $counter -= $number;
    }
}
echo $counter;
