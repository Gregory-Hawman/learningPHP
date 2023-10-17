<?php

// Boolean operators
    // Equality == (PHP is weak typed) "1" == 1 true "1" === 1 false
    // (PHP 7) var_dump(0=='foo') is true
    // (PHP 8) var_dump(0=='foo') is false PHP 8 converts numbers to strings if comparing against a string

// Logical operators
    // && === and, || === or

$a = 9 > 5;
$b = 10 != 10;
$c = $a && $b;
$d = $a || $b;
$e = $b && $c;
$f = $a || $d;

$logic = array( $a, $b, $c, $d, $e, $f);

echo '<pre>';
print_r( $logic );
echo '</pre>';


// Creating if/else statements


// Ternary operators


// Switch statements


// Match expression


// Challenge:


// Solution


// Chapter Quizs