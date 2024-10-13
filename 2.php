<?php
// Function to calculate the product of digits of a number
function productOfDigits($num) {
    $product = 1;
    while ($num > 0) {
        $digit = $num % 10;
        $product *= $digit;
        $num = (int)($num / 10);
    }
    return $product;
}

// Function to generate the cryptic sequence
function generateSequence($seed, $terms) {
    $sequence = array($seed);
    
    for ($i = 1; $i < $terms; $i++) {
        // Get the previous number in the sequence
        $prev = $sequence[$i - 1];
        // Calculate the next number by adding the product of its digits
        $next = $prev + productOfDigits($prev);
        $sequence[] = $next;
    }
    
    // Return the sequence as a comma-separated string
    return implode(', ', $sequence);
}

// Input values
$seed = 7;
$terms = 5;

// Generate and print the sequence
echo "Seed value: $seed, Terms: $terms\n";
echo "Sequence: " . generateSequence($seed, $terms) . "\n";

// Another example
$seed2 = 4;
$terms2 = 9;
echo "\nSeed value: $seed2, Terms: $terms2\n";
echo "Sequence: " . generateSequence($seed2, $terms2) . "\n";
?>
