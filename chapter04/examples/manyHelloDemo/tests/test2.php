<?php

// read in function declaration
require_once __DIR__ . '/../my_functions1.php';

// zero our count number of passed/failed tests
$passed = 0;
$failed = 0;

print '------------- details of testing ----------' . PHP_EOL;


// (1) Arrange (create any objects, sample data needed by the test)
$count = 3;
$expectedResult = 'hello hello hello';

// (2) Act (run the code, collect the outputs / system changes)
$result = many_hellos($count);

// (3) Assert (make statements that should be TRUE if our code behaved as expected)
// compare expected with actual results
if($expectedResult == $result){
    print '.';
    $passed++;
} else {
    $failed++;
    print 'FAILED TEST: got [' . $result . '] but was expecting [' . $expectedResult . ']';
    print PHP_EOL;
}


// summary report
$total = $passed + $failed;
$passPercentage = (int) ($passed * 100 / $total);
print PHP_EOL;
print '------------- summary of testing ----------';
print PHP_EOL;
print 'passed = ' . $passed;
print ' / failed = ' . $failed;
print ' / total = ' . $total;
print PHP_EOL;
print $passPercentage . '% tests have passed';
print PHP_EOL;
