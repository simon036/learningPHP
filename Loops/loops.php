// loops =execute block of code again and again as long as condition is true

//while loop = executes a block of code as long as the condition is true

<?php //    Print $i as long as $i is less than 6:

$i = 1;
    while ($i < 6) {
    echo $i;
    $i++;
    }
?>

//break statement = used to exit a loop when a specified condition is met
<?php  //Stop the loop when $i is 3:

$i = 1;
    while ($i < 6) {
    if ($i == 3) break;
    echo $i;
    $i++;
    }
?>

// continue statement = skips the current iteration of the loop and continues with the next iteration
<?php // Stop, and jump to the next iteration if $i is 3:
    $i = 0;
        while ($i < 6) {
        $i++;
        if ($i == 3) continue;
        echo $i;
        }
?>

// or use endwhile to close the loop
<?php //    Print $i as long as $i is less than 6:

$i = 1;
    while ($i < 6):
    echo $i;
    $i++;
    endwhile;
?>