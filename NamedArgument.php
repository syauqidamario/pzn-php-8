<?php

function sayHello(string $first, string $last):void{
    echo "Hello, $first $last" . PHP_EOL;
}

//with named argument
sayHello(first:"Kazuo", last:"Sagawa");
sayHello("Akio", last:"Jissouji");