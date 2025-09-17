//integers
// is_int()
<?php
$x = 5985;
    var_dump(is_int($x));

    $x = 59.85;
    var_dump(is_int($x));
?>

// float
// is_float()
<?php
$x = 10.365;
    var_dump(is_float($x)); 
?>

// infinity
is_infinite()
<?php
$x = 1.9e411;
    var_dump(is_infinite($x));
?>
 // NaN
// is_nan()
<?php
$x = acos(8);
    var_dump(is_nan($x));
    
?>


//numerical strings
// is_numeric()
<?php
    $x = 5985;
    var_dump(is_numeric($x));

    $x = "5985";
    var_dump(is_numeric($x));
    $x = "59.85" + 100;
    var_dump(is_numeric($x));

    $x = "Hello";
    var_dump(is_numeric($x));
?>

//casting strings and floats to integers
<?php
 // Cast float to int
    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast;

    echo "<br>";

// Cast string to int
    $x = "23465.768";
    $int_cast = (int)$x;
    echo $int_cast;