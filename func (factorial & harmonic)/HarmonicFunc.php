<?php // This sign indicates the start of the PHP code.
    function harmonic($n) { // This line defines a function with the name harmonic that has one parameter: $n which is a positive integer. This function is supposed to calculate and return the n-th harmonic number.
        if ($n == 0) { // This line checks a condition that whether the number is equal to zero or not. This condition is for handling the invalid input.
            return "Invalid input"; // This line returns a message as the output of the function. The harmonic number is not defined for zero.
        } else { // This line starts the other part of the condition. This part is for handling the valid input.
            $sum = 0; // This line defines a variable with the name $sum and assigns it the value of zero. This variable is supposed to hold the sum of the harmonic series.
            for ($i = 1; $i <= $n; $i++) { // This line starts a for loop that goes from one to the number. In this loop, the variable $i is used as the counter.
                $sum += 1 / $i; // This line adds the reciprocal of the counter to the sum. This is the formula for the harmonic series.
            }
            return $sum; // This line returns the sum as the output of the function. This is the n-th harmonic number.
        }
    }

    $n = 10; // This line defines a variable with the name $n and assigns it the value of 5.
    $h = harmonic($n); // This line calls the function harmonic with the variable as the argument and saves the output in the variable $h.
    echo "<h1>" . "The " . $n . "-th harmonic number is " . $h . "</h1>"; // This line prints a message with the variables $n and $h.
?>