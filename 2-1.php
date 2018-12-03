<?php
$f = @fopen('2.txt', 'r');

$twiceCounter = 0;
$thriceCounter = 0;
while (($line = fgets($f)) !== false) {
    $chars = str_split($line);

    $usedLetters = [];
    $letter;
    $doubleCounter = false;
    $tripleCounter = false;
    for ($i = 0, $charLength = count($chars); $i < $charLength; $i++) {
        $letter = $line[$i];
	if (in_array($letter, $usedLetters)) continue;
	$usedLetters[] = $letter;

	$counter = 0;
        for ($j = $i+1; $j < $charLength; $j++) {
            if ($line[$j] === $letter) $counter++;
            if ($counter > 3) break;
        }

        if ($counter < 1 || $counter > 2) continue;

	if ($counter === 1 && !$doubleCounter) {
		$twiceCounter++;
		$doubleCounter = true;
	}
	elseif ($counter === 2 && !$tripleCounter) {
		$thriceCounter++;
		$tripleCounter = true;
        }
    }
}

print($twiceCounter * $thriceCounter);
