<?php

// contains a string - the characters '2' and '1'
$ageAsString= '21';

// output:
// string
print '$ageAsString has value of type = ' . gettype($ageAsString);
print PHP_EOL;

// put integer number in variable $age (21)
$age = (int)$ageAsString;

print '$age has value of type = ' . gettype($age);
print PHP_EOL;
