<?php

// contains an integer: 3
$weightInteger= 3;

// output:
// string
print '$weightInteger has value of type = ' . gettype($weightInteger);
print PHP_EOL;

// put double/float number in variable $weight (3.0)
$weight = (double)$weightInteger;

print '$weight has value of type = ' . gettype($weight);
print PHP_EOL;
