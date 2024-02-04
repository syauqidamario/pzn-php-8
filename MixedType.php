<?php

function testMixed(mixed $param): string|array|int|null
{
    if(is_array($param))
    {
        return [];
    }
    else if(is_string($param))
    {
        return "Shaw";
    }
    else if (is_numeric($param))
    {
        return 1;
    }
    else
    {
        return null;
    }
}

var_dump(testMixed([]));
var_dump(testMixed("Shaw"));
var_dump(testMixed(1));
var_dump(testMixed(true));
