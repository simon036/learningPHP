// string 
<?php
    $x = "Hello";
    var_dump($x);
?>


// float 
<?php
    $x = 10.5;
    var_dump($x);
?>

//interger
<?php
    $x = 10;
    var_dump($x)
?>

//boolean
<?php
    $x = true;
    var_dump($x);
?>

//array
<?php
$fruits  = array ("Mango", "Orange " ,"guava ");
var_dump($fruits);
?>

//object
<?php
 class Car{
        public $color;
        public $model;
        public function __construct ($color , $model){
            $this-> color = $color;
            $this->model = $model;
        }
        public function message() {
            return "My car is a " . $this->color . " " . $this->model . "!";
        }
        }

        $myCar = new Car("red", "Volvo");
        var_dump($myCar);


?>

//null value
<?php
$x = null ;
var_dump($x)
?>

//changing datatypes 
<?php
    $x = 5;
    var_dump($x);

    $x = "Hello";
    var_dump($x);
?>

<?php
        $x = 5;
        $x = (string) $x;
        var_dump($x)
?>

<?php
?>