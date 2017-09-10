<?php

// read in function declaration
require_once __DIR__ . '/../my_functions1.php';

// (1) Arrange (create any objects, sample data needed by the test)
$count = 3;
$expectedResult = 'hello hello hello';

// (2) Act (run the code, collect the outputs / system changes)
$result = many_hellos($count);

// (3) Assert (make statements that should be TRUE if our code behaved as expected)
// compare expected with actual results
if($expectedResult == $result){
    print 'PASSED TEST';
} else {
    print 'FAILED TEST: got [' . $result . '] but was expecting [' . $expectedResult . ']';
}

print PHP_EOL;
print PHP_EOL;
