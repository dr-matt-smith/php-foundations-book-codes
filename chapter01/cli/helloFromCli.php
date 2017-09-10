<?php
// source: adapted from
// http://www.phptherightway.com/#command_line_interface

if ($argc !== 2) {
    print 'Usage: php hello.php [name].' . PHP_EOL;
    exit(1);
}
$name = $argv[1];
print 'Hello, ' . $name . PHP_EOL;
