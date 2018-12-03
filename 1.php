<?php

$f = @fopen('1-input.txt', 'r');

$counter = 0;
while (($line = fgets($f, 4096)) !== false) {
    $token = substr($line, 0, 1);
    $number = substr($line, 1);

    if ($token === '+') {
        $counter += (int)$number;
    } else {
        $counter -= (int)$number;
    }
}

echo $counter;
