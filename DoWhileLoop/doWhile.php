// do while = loops through a block of code once, and then repeats the loop as long as a specified condition is true.
<?php //Print $i as long as $i is less than 6:

 $i = 1;

        do {
            echo $i;
            $i++;
        } while ($i < 6);
?>

// Set $i = 8, then print $i as long as $i is less than 6:
<?php
$i = 8;

        do {
            echo $i;
            $i++;
        } while ($i < 6);
?> // code will be executed once ,even if condition is never true


//break statement = stops loop even if condition is still true
//example = Stop the loop when $x is 3:

<?php 
 for ($x = 0; $x <= 10; $x++) {
            if ($x == 3) break;
            echo "The number is: $x <br>";
        }
?>

//continue statement = stops the current iteration, and continues with the next
//example 1
<?php // Stop, and jump to the next iteration if $x is 3
    for ($x = 0; $x <= 10; $x++) {
        if ($x == 3) continue;
        echo "The number is: $x <br>";
    }
?>

//example 2
<?php  //  counts to 100 by tens:

    for ($x = 0; $x <= 100; $x+=10) {
        echo "The number is: $x <br>";
    }
?>