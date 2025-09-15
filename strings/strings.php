<?php
$x = 5;
$y = 10;
$z = "$x . $y";
echo $z; 

?>

<?php
//$x = "Hi, how are you?";
//echo substr($x, 5, -3);
$x = "Hello World!";
echo substr($x, 3, 2);
?>

//double quotes string 
<?php
$x = "Simon ";
echo "Hello $x";
?>

//single quotes string
<?php
$x = "Simon ";
echo 'Hello $x';
?>

//strings functions
// 1 .length
<?php
echo strlen("Hello World!"); 
?>

// 2. word count
<?php
 echo str_word_count("Hello world!");
?>

// 3. searching for a text within a string
<?php
echo strpos("Hello world!", "world");
?>

// 4. uppercase
<?php
 $x = "Hello World!";
echo strtoupper($x);
?>

// 5. lowercase
<?php
$x = "Hello World!";
echo strtolower($x);
?>

// 6. replacing string
<?php
$x = "Hello World!";
echo str_replace("World", "Simon", $x);
?>

7 . reverse string
<?php
$x = "Hello World!";
echo strrev($x);
?>

// 8. remove whitespace
<?php
$x = " Hello World! ";
echo trim($x);
?>

// 9. converting string to array
<?php
$x = "Hello World. It's a beautiful day.";
$y = explode(" ", $x);
print_r($y);
?>

// 10 . concatenate strings
<?php
$x = "Hello";
        $y = "World";
        $z = $x . $y;
        echo $z;
?>

 
// adding space character 
<?php
$x = "Hello";
$y = "World";
$z = $x . " " . $y;
echo $z;
?>

// 11 .slicing strings 
<?php
$x = "Hello World!";
echo substr($x, 6 , 5); //used to extract a part of a string
?>

// slice string to the end
<?php
$x = "Hello World!";
echo substr($x, 6); //used to extract a part of a string
?>
// slice string from the end
<?php
$x = "Hello World!";
echo substr($x, -5, 3); //used to extract a part of a string
?>

// negative length
<?php
$x = "Hi, how are you?";
echo substr($x, 5, -3);
?>


