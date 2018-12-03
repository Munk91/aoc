<?php
$f = @fopen('2-2.txt', 'r');

$counter = 0;
while (($line = fgets($f)) !== false) {
    $chars = str_split($line);

    $charsCounter = [];

    foreach ($chars as $char) {
	    // do something
    }
}

print($twiceCounter * $thriceCounter);
