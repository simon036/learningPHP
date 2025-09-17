//for loop = used to loop through code block a specified number of times

//example 

<?php //Print the numbers from 0 to 10:
    for ($x = 0; $x <= 10; $x++){// The first expression, $x = 0;, is evaluated once and sets a counter to 0.
                                //The second expression, $x <= 10;, is evaluated before each iteration, and the code block is only executed if this expression evaluates to true. In this example the expression is true as long as $x is less than, or equal to, 10.
                                //The third expression, $x++;, is evaluated after each iteration, and in this example, the expression increases the value of $x by one at each iteration.

        echo "The number is: $x <br>";
    }
?>

// break statement = stops loop even if condition is true

<?php // Stop the loop when $x is 3:

for ($x = 0; $x <= 10; $x++) {
        if ($x == 3) break;
        echo "The number is: $x <br>";
        }
?>