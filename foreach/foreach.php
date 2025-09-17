// for each locale_compose

<?php  // Loop through the items of an indexed array
$colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
    echo "$x <br>";
    }
?>

// key and values
//example 
<?php //  Print both the key and the value from the $members array

$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    foreach ($members as $x => $y) {
        echo "$x : $y <br>";
    }
?>


// for each loop on objects
<?php 
class Car {  //Print the property names and values of the $myCar object:

        public $color;
        public $model;
        public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
        }
    }

    $myCar = new Car("red", "Volvo");

    foreach ($myCar as $x => $y) {
    echo "$x: $y <br>";
    }

?>

// break statement in foreach  loops
<?php  //   Stop the loop if $x is "blue":

$colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        if ($x == "blue") break;
        echo "$x <br>";
    }
?>

// continue statement in for each loop

<?php //Stop, and jump to the next iteration if $x is "blue":

$colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        if ($x == "blue") continue;
        echo "$x <br>";
    }
?>


// Foreach Loop Byref
<?php
$colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        if ($x == "blue") $x = "pink";
        }

    var_dump($colors);

?>

//using the '&' character 
<?php

    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as &$x) {
        if ($x == "blue") $x = "pink";
    }

    var_dump($colors);

?>