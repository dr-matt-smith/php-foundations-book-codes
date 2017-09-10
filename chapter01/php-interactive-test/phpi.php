<?php

// source:
// https://processwire.com/talk/topic/9807-using-php-pw-in-an-interactive-shell-on-windows/

echo "PHP (" . phpversion() . ") - Interactive mode enabled\n";
$fp = fopen('php://stdin', 'r');
define('quit', 'quit');
$in = '';
while('quit' != substr($in, 0, 4)) {
    echo 'php > ';
    $in = trim(fgets($fp));
    eval($in);
    echo "\n";
}
