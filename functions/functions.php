# fn is a block of code that can be reused 
# syntax
# function nameOfFunction() {
#       code to be executed;
# }
# example 

<?php
function dayOfWeek(){
    echo "Today is Wednesday ";
}
dayOfWeek(); #calling a function
?>

# fn arguements
<?php
function first_name($fname){
    echo "Hello $fname";    
}
first_name("Simon")
?>

# fn multiple arguements
<?php
function details($name , $age){
    echo "Hello $name, you are $age  yrs old";
}
details("Simon",20);
?>

#fn with default values

<?php
function setHeight($height = 50) {
    echo "Height is: $height <br>";
}
setHeight(100);
setHeight(); // will use default value 50

?>

#returning values

<?php
function sum($a , $b){
    return $a + $b;

}
echo sum(5,10);
?>

# passing by reference 
# we use & to pass by reference
 

<?php
function addTen(&$num){
    $num += 5;

}
$x = 15;
addTen($x);
echo $x; 
?>