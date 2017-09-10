<?php

function many_hellos($count)
{
    $output = '';
    for($i = 0; $i <= $count; $i++){
        $output .= 'hello';
    }

    return $output;
}
