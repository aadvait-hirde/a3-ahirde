<?php
// CSCI-A 290 PHP – Assignment 3
// Description: This script demonstrates PHP functions for string concatenation
//              and diagonal sum calculation of a 3x3 array.

/**
 * Function 1: Concatenate Strings with Tab
 * 
 * This function accepts two string parameters and concatenates them
 * with a tab character (\t) placed between them.
 *
 * @param string $str1 The first string (e.g., first name).
 * @param string $str2 The second string (e.g., last name).
 * @return string The concatenated result: $str1 + tab + $str2.
 */
function concatenateWithTab($str1, $str2)
{
    // Concatenate the first string with a tab special character
    $result = $str1 . "\t";

    // Then concatenate the second string to the result
    $result = $result . $str2;

    // Return the final concatenated string
    return $result;
}

/**
 * Function 2: Sum Diagonal Values in a 3x3 Array
 * 
 * This function accepts a 3x3 integer array and calculates the sum
 * of both diagonals:
 *   - Primary diagonal (top-left to bottom-right): indices [0][0], [1][1], [2][2]
 *   - Secondary diagonal (top-right to bottom-left): indices [0][2], [1][1], [2][0]
 * Note: The center element [1][1] appears on both diagonals and is counted twice.
 *
 * @param array $arr A 3x3 integer array.
 * @return int The sum of all diagonal elements.
 */
function sumDiagonals($arr)
{
    // Initialize the sum variable to zero
    $sum = 0;

    // Sum the primary diagonal (top-left to bottom-right)
    // Elements: [0][0], [1][1], [2][2]
    for ($i = 0; $i < 3; $i++) {
        $sum += $arr[$i][$i];
    }

    // Sum the secondary diagonal (top-right to bottom-left)
    // Elements: [0][2], [1][1], [2][0]
    for ($i = 0; $i < 3; $i++) {
        $sum += $arr[$i][2 - $i];
    }

    // Return the total sum of both diagonals
    return $sum;
}

// -------------------------------------------------------
// Function Call for the First Function
// -------------------------------------------------------

// Call concatenateWithTab with first name and last name as arguments
$nameResult = concatenateWithTab("Aadvait", "Hirde");

// Print the returned result to the screen
echo "Concatenated Name: " . $nameResult . "\n";

// -------------------------------------------------------
// Function Call for the Second Function
// -------------------------------------------------------

// Define the 3x3 integer array as specified in the assignment
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

// Call sumDiagonals with the 3x3 array as the argument
$diagonalSum = sumDiagonals($matrix);

// Print the result of the returned sum of diagonal elements
echo "Sum of Diagonal Elements: " . $diagonalSum . "\n";

?>