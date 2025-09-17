//if else = executes some code if a condition is true and another if that condition is false
<?php
$t = date("H");

    if ($t < "20") {
    echo "Have a good day!";
    } else {
    echo "Have a good night!";
    }

?>

<?php
 $t = date("H");

    if ($t < "10") {
    echo "Have a good morning!";
    } elseif ($t < "20") {
    echo "Have a good day!";
    } else {
    echo "Have a good night!";
    }
?>