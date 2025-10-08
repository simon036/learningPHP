// variables = containers for storing data
// PHP variables are represented by a dollar sign followed by the name of the variable
// variable names are case-sensitive
// valid variable names start with a letter or an underscore, followed by any number of letters, numbers, or underscores
// variable names cannot contain spaces or special characters
// variable names cannot be a PHP reserved word



<?php
    $x =10;
    $y = 20;
    $age = 25;
    $is_student = true;
    $price = 19.99;
    $txt = "Hello, PHP!";
    echo "I love $txt!" . "<br>"; // interpolation
    // echo "I love " . $txt . " !"; // concatenation
    echo $x + $y;
?>

/*
 php data types:
    1. String  
    2. Integer
    3. Float
    4. Boolean
    5. Array
    6. Object
    7. NULL
    8. Resource
*/

// getting the data type 

<?php
    $z = 5;
    var_dump($z); // var_dump() fn returns data type and the value
?>


// assinginig string to variable
<?php
    $x = "Simon";
    echo $x;
    var_dump($x);
?>

// assigning multiple  variables
<?php 
    $x = $y =$z = "Orange";

?>

// booleans ==true or false
<?php
    $name = True;
    var_dump($name);
?>

<?php
    if ($firstName = "Simon" ){
        echo " The first name is $firstName";
    }
?>

// integers
// division of integers
<?php
    $x = 10;
    $y = 4;
    echo $x / $y; // outputs 2.5
?>

//float
<?php
    $x = 10.5;
    var_dump($x);
?>
