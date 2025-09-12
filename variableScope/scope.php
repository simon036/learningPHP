//variables can be declared anywhere in the script
// variable scope = part of script where variable can be referenced /used
// 3 types = local, global, static


//Global scope = declared outside a function , can only be accessed outside a fn 

<?php
    $x = 5; // global scope

    function myGlobalscope() {
        // using x inside this fn will generate an error
        echo "<p>Variable x inside function is: $x</p>";
    }

    myGlobalscope();

    echo "<p>Variable x outside function is: $x</p>";
?>

// Local scope = declared inside a function , can only be accessed within that fn

<?php
    function myLocalscope() {
        $y = 10; // local scope
        echo "<p>Variable y inside function is: $y</p>";
    }

    myLocalscope();

    // echo "<p>Variable y outside function is: $y</p>"; // will generate an error
?>

// Global keyword = used to access a global variable from within a fn

<?php
    $a = 10; // global scope
    $b = 20; // global scope

    function myGlobalKeyword(){
        global $a , $b; // access global variables
        $b = $a + $b;
    }

    myGlobalKeyword();
    echo $b;
?>

// php also stores all variables in an array called $GLOBALS[index]
// index holds name of variable , array is also accessible from within fn and can be used to update global variables directly
<?php
    $x = 5;
    $y = 10;

    function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    myTest();
    echo $y;
?>

// the static Keyword
Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job
